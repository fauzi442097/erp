<?php

namespace App\Traits;

trait Response
{

    public function coreResponse($message, $data = null, $statusCode)
    {
        return response()->json([
            'rc' => $statusCode,
            'rm' => $message,
            'data' => $data
        ]);
    }

    public function success($message, $data = null, $statusCode = 200)
    {
        return $this->coreResponse($message, $data, $statusCode);
    }

    public function error($message, $data = null, $statusCode = 500)
    {
        return $this->coreResponse($message, $data, $statusCode, false);
    }

    public function warning($message, $data = null, $statusCode = 300)
    {
        return $this->coreResponse($message, $data, $statusCode, false);
    }

    public function confirmation($message, $data = null, $statusCode = 210)
    {
        return $this->coreResponse($message, $data, $statusCode, false);
    }

    public function badRequest($message, $data = null, $statusCode = 400)
    {
        return $this->coreResponse($message, $data, $statusCode, false);
    }
}
