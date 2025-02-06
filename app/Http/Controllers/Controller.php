<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * Return a successful JSON response.
     *
     * @param mixed $data The data to be returned in the response.
     * @param string $message The success message.
     * @param int $status The HTTP status code.
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = null, $message = 'Done Successfully!', $status = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => 1,
            'message' => trans($message),
            'data' => $data,
        ], $status);
    }

    /**
     * Return an error JSON response.
     *
     * @param mixed $data The data to be returned in the response.
     * @param string $message The error message.
     * @param int $status The HTTP status code.
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error($data = null, $message = 'Operation failed!', $status = 400): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => 0,
            'message' => trans($message),
            'data' => $data,
        ], $status);
    }
}
