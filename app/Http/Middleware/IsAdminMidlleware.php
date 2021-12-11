<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use SebastianBergmann\Environment\Console;

class IsAdminMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->role !== 'admin'){
            return redirect('forbidden');
        }
        return $next($request);
    }
}
