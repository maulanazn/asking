<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function register(Request $request): JsonResponse {
        return response()->json([
            'message' => 'account created successfully',
            'id' => $request->json('id')
        ], 201);
    }

    public function login(Request $request): JsonResponse {
        return response()->json([
            'message' => 'account logged in successfully',
        ], 202);
    }
}
