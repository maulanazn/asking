<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(Request $request, $id) : JsonResponse {
        return response()->json([
            'message' => 'account updated successfully on id ' . $request->query('id'),
            'code' => $id
        ], 202);
    }

    public function logout(Request $request) : JsonResponse {
        return response()->json([
            'message' => 'account logout successfully on id ' . $request->cookie('USR_ID'),
        ], 202);
    }
}
