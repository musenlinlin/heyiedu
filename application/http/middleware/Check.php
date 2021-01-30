<?php

namespace app\http\middleware;

class Check
{
    public function handle($request, \Closure $next, $other)
    {
        if ($request->param('name') == 'shilun') {
            $request->teacher = 'wu';
            // return redirect('index/shilun');
        }
        // if ($other == 'admin') {
        //     return redirect('index/shilun');
        // }
        return $next($request);
    }
}
