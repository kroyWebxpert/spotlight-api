<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler; 
use Symfony\Component\HttpKernel\Exception\HttpException; 
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\FatalThrowableError;
use Auth;
use Response;
use Session;
use Redirect;
use URL;
use ErrorException;
use Illuminate\Database\QueryException; 
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class, 
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
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
         
        if($exception instanceof FatalErrorException)
        {
            echo  json_encode(
                    
                        [   "status"=>0,
                            "code"=>500,
                            "message"=>$exception->getmessage() ,
                            "data" => "" 
                        ]
                );
            exit();
        }
        if ($exception instanceof MethodNotAllowedHttpException) {
            echo  json_encode(
                    
                        [ "status"=>0,
                            "code"=>500,
                            "message"=>
                                    'Invalid Method!',
                            "data" => "" 
                    ]
                );
            exit();
        }
        if ($exception instanceof NotFoundHttpException) {

            echo  json_encode(
                    
                        [ "status"=>0,
                            "code"=>404,
                            "message"=>
                                    'Invalid request url!',
                            "data" => "" 
                    ]
                );
            exit();
        }

        if($exception instanceof ErrorException)
        {    
                $data = $request->all();
                    echo json_encode(
                        [ "status"=>1,
                          "code"=>500,
                          "message"=>$exception->getmessage() ,
                          "data" => $data 
                        ]
                );
             
            exit();
        }

        if($exception instanceof QueryException)
        {    
            
            $data = $request->all();
                echo json_encode(
                    [ "status"=>1,
                      "code"=>500,
                      "message"=>$exception->getmessage() ,
                      "data" => $data 
                    ]
                );
             
            exit();
        }

        if($exception instanceof FatalThrowableError)
        {
           echo  json_encode(
                    
                        [ "status"=>1,
                            "code"=>500,
                            "message"=>[
                                    'error'=>'Route not available for request URL',
                                    'file_path'=>$exception->getfile(),
                                    'line_number'=>$exception->getline()],    
                      "data" => "" 
                    ]
                );
            exit(); 
        }
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }
}
