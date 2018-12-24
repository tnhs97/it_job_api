<?php

namespace App\Http\Controllers;

use App\Account;
use App\Employer;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Register a new account.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {

        // $account = ([
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);
        // if ($request->accountable_type == 'User') {
        //     $user = User::firstOrCreate([
        //         'name' => $request->name,
        //     ]);
        //     $user->account()->firstOrCreate($account);
        // } else {
        //     $employer = Employer::firstOrCreate([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'id_location' => $request->id_location,

        //     ]);
        //     $employer->account()->firstOrCreate($account);
        // }
        // $account = new Account($account);
        // $token = auth()->login($account);

        // return $this->respondWithToken($token);
        echo 'llll';
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
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
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }
}
