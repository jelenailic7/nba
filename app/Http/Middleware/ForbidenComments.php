<?php

namespace App\Http\Middleware;

use Closure;

class ForbidenComments
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $words = explode(" ",$request->text);
        foreach ($words as $word){
            if($word ='hate' || $word = 'stupid'||$word = 'idiot'){
                return response(view('forbidden-comment'));   
        }
            else{
               return $next($request);
            }
        }
    }
}
