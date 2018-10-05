<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof HttpException && $exception->getStatusCode() == 429) 
        {
            return response()->json([
                   'status_code' => 429,
                   'description' => 'Too Many Requests – You’re requesting too many kittens! Slow down!',
                   'request_data' => $request->all(),
            ], 429);

        }

       if($exception instanceof HttpException && $exception->getStatusCode() == 500) 
        {
            return response()->json([
                   'status_code' => 500,
                   'description' => 'Internal Server Error – We had a problem with our server. Try again later.',
                   'request_data' => $request->all(),
            ], 500);

        }


        if($exception instanceof HttpException && $exception->getStatusCode() == 503) 
        {
            return response()->json([
                   'status_code' => 503,
                   'description' => 'Service Unavailable – We’re temporarily offline for maintenance. Please try again later',
                   'request_data' => $request->all(),
            ], 503);

        }

        if ($exception instanceof NotFoundHttpException) 
        {
            return response()->json( [
                   'status_code' => 404,
                   'description' => 'Requested URL ' . $request->fullUrl() . ' Not Found!',
                   'request_data' => $request->all(),
            ], 404 );
        }

        if ($exception instanceof MethodNotAllowedHttpException) 
        {
            return response()->json( [
                   'status_code' => 405,
                   'description' => $request->getMethod() . ' Method Not Allowed for the URL ' . $request->fullUrl(),
                   'request_data' => $request->all(),
            ], 405 );
        }

        return parent::render($request, $exception);
    }
}
