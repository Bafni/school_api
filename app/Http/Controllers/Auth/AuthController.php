<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\LoginResourse;
use App\Http\Resources\Auth\RegisterResourse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (!$token = JwtAuth::attempt($data)) {

            return response()->json(['error' => 'Unauthorized']);
        }
        $user = auth()->user();

        return new LoginResourse($user, $token);

    }

    public function register(RegisterRequest $request){
        $data = $request->validated();
        $password = $data['password'];

        $data['password'] = Hash::make($data['password']);
        $data['role'] = USER::ROLE_USER;
        $user = User::create($data);
        /* Видача токена одразу після реєстрації*/
        $data['password'] =  $password;
        $token = JwtAuth::attempt($data);

        return new RegisterResourse($user, $token);
    }

    public function logout()
    {
        if(!auth()->user()){
            return response()->json([
                'status' => 'Error',
                'message' => 'Unauthorized',
            ]);
        }
        auth()->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function me()
    {
        if(auth()->user()){
            auth()->user();
            return  Auth::user();
        }
        return response()->json([
            'error' => 'Unauthorized'
        ]);
    }

    public function refresh()
    {
        if(!auth()->user()){
            return response()->json([
                'status' => 'Error',
                'message' => 'Unauthorized',
            ]);
        }
        return response()->json([
            'status' => 'success',
            'user' => auth()->user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }

}
