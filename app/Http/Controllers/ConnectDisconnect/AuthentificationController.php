<?php

namespace App\Http\Controllers\ConnectDisconnect;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lcobucci\JWT\Parser;

class AuthentificationController extends Controller
{
    // Login function
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if($user != null)
        {
            if($request->get('password') == $user->password)
            {
                /*$token = $user->createToken('Personal Access Token')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);*/

                $token = $user->createToken('Personal Access Token')->accessToken;
                return response()->json(['access_token' => $token]);
            }
            else
            {
                /*$response = 'Password mismatch';
                return response($response, 400);*/


                return response()->json(['error'=>'Unauthorised'], 401);
            }
        }
        else
        {
            $response = 'L\'utilisateur n\'existe pas';
            return response($response, 400);
        }
    }



    // Logout function
    public function logout(Request $request)
    {
        $value = $request->bearerToken();
        $id = (new Parser())->parse($value)->getHeader('token');
        $token = $request->user()->tokens->find($id);
        $token->revoke();

        $response = 'You have been successfully logged out';
        return response($response, 200);
    }
}
