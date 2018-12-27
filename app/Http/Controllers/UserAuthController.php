<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Resources\User as UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'refresh']]);
    }
    /**
     * Register a new account.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {

        $account = ([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user = User::firstOrCreate([
            'name' => $request->name,
        ]);
        $user->account()->firstOrCreate($account);
        $account = new Account($account);
        $token = auth()->login($account);

        return $this->respondWithToken($token);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password', 'accountable_type'=>'App\User']);
        $remember_me = $request->remember_me;
        
        if (!$token = auth()->claims(['accountable_type' => 'App\User'])->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        if ($remember_me === '1') {
            auth()->user()->fill([
                'remember_token' => str_random(100),
            ])->save();
        }

        return $this->respondWithToken($token);
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function me()
    {
        $user = User::findOrFail(auth()->user()->accountable_id);

        return new UserResource($user);
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function logout(Request $request)
    {
        auth()->user()->fill([
            'remember_token' => null,
        ])->save();
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);

    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(Request $request)
    {
        $user = Account::findOrFail($request->account_id);
        if ($user->remember_token == $request->remember_token) {
            return $this->respondWithToken(auth()->login($user));
        }
        return response()->json(['error' => 'Unauthorized'], 401);

    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        if (auth()->user()->remember_token != null) {
            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
                'account_id' => auth()->user()->id,
                'remember_token' => auth()->user()->remember_token,
            ]);}
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);

    }
}
