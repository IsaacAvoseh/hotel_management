<?php

namespace App\Exceptions;

use Exception;

class QueryException extends Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
            'message' => 'Query Exception',
            'errors' => [
                'code' => $this->getCode(),
                'message' => $this->getMessage(),
            ],
        ], 500);
    }

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
}
