<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if($request->user()->role !== $role){

            $userRole = $request->user()->role;

            if($userRole ===  'user' && $role !== 'user'){
                return redirect('dashboard');
            }
            elseif($userRole === 'admin' && $role === 'user'){
                return redirect('/admin/dashboard');
            }
          
            elseif($userRole === 'admin' && $role === 'hr'){
                return redirect('/admin/dashboard');
            }
            elseif($userRole === 'admin' && $role === 'finance'){
                return redirect('/admin/dashboard');
            }
            elseif($userRole === 'admin' && $role === 'store'){
                return redirect('/admin/dashboard');
            }
            elseif($userRole === 'admin' && $role === 'production'){
                return redirect('/admin/dashboard');
            }
            elseif($userRole === 'admin' && $role === 'quality'){
                return redirect('/admin/dashboard');
            }
            elseif($userRole === 'hr' && $role === 'user'){
                return redirect('/hr/dashboard');
            }
            elseif($userRole === 'hr' && $role === 'admin'){
                return redirect('/hr/dashboard');
            }
            elseif($userRole === 'hr' && $role === 'store'){
                return redirect('/hr/dashboard');
            }
            elseif($userRole === 'hr' && $role === 'quality'){
                return redirect('/hr/dashboard');
            }
            elseif($userRole === 'hr' && $role === 'finance'){
                return redirect('/hr/dashboard');
            }
            elseif($userRole === 'hr' && $role === 'production'){
                return redirect('/hr/dashboard');
            }
            


            elseif($userRole === 'finance' && $role === 'user'){
                return redirect('/finance/dashboard');
            }
            elseif($userRole === 'finance' && $role === 'admin'){
                return redirect('/finance/dashboard');
            }
            elseif($userRole === 'finance' && $role === 'store'){
                return redirect('/finance/dashboard');
            }
            elseif($userRole === 'finance' && $role === 'quality'){
                return redirect('/finance/dashboard');
            }
            elseif($userRole === 'finance' && $role === 'hr'){
                return redirect('/finance/dashboard');
            }
            elseif($userRole === 'finance' && $role === 'production'){
                return redirect('/finance/dashboard');
            }

            elseif($userRole === 'store' && $role === 'user'){
                return redirect('/store/dashboard');
            }

            elseif($userRole === 'store' && $role === 'admin'){
                return redirect('/store/dashboard');
            }
            elseif($userRole === 'store' && $role === 'finance'){
                return redirect('/store/dashboard');
            }
            elseif($userRole === 'store' && $role === 'hr'){
                return redirect('/store/dashboard');
            }
            elseif($userRole === 'store' && $role === 'production'){
                return redirect('/store/dashboard');
            }
            elseif($userRole === 'store' && $role === 'quality'){
                return redirect('/store/dashboard');
            }
          
            elseif($userRole === 'production' && $role === 'user'){
                return redirect('/production/dashboard');
            }

            elseif($userRole === 'production' && $role === 'admin'){
                return redirect('/production/dashboard');
            }
            elseif($userRole === 'production' && $role === 'store'){
                return redirect('/production/dashboard');
            }
            elseif($userRole === 'production' && $role === 'quality'){
                return redirect('/production/dashboard');
            }
            elseif($userRole === 'production' && $role === 'finance'){
                return redirect('/production/dashboard');
            }
            elseif($userRole === 'production' && $role === 'hr'){
                return redirect('/production/dashboard');
            }

            elseif($userRole === 'quality' && $role === 'user'){
                return redirect('/quality/dashboard');
            }
            elseif($userRole === 'quality' && $role === 'admin'){
                return redirect('/quality/dashboard');
            }
            elseif($userRole === 'quality' && $role === 'store'){
                return redirect('/quality/dashboard');
            }
            elseif($userRole === 'quality' && $role === 'production'){
                return redirect('/quality/dashboard');
            }
            elseif($userRole === 'quality' && $role === 'finance'){
                return redirect('/quality/dashboard');
            }
            elseif($userRole === 'quality' && $role === 'hr'){
                return redirect('/quality/dashboard');
            }

        }
        
        return $next($request);
    }
}
