<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use App\Employer;
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

        $account = ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'is_active' => '0',
            'status' => '1',
            'gender' => $request->gender,
            'dob' => $request->dob,
        ]);
        if ($request->accountable_type == 'User') {
            $user = User::firstOrCreate([
                'rank' => 0,
                'location_id' => $request->location_id,
            ]);

            $user->account()->firstOrCreate($account);
        } else {
            $employer = Employer::firstOrCreate([
                'employer_type' => '1',
                'description' => $request->description,
                'location_id' => $request->location_id,
            ]);
            $employer->account()->firstOrCreate($account);
        }
        $account= new Account($account);
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
