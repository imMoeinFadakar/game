<?php  

namespace App\Http\Middleware;  

use Closure;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;  

class AdminTypeCheck  
{  
    /**  
     * Handle an incoming request.  
     *  
     * @param  \Illuminate\Http\Request  $request  
     * @param  \Closure  $next  
     * @return mixed  
     */  
    public function handle(Request $request, Closure $next)  
    {  
         // Use guard('admin') to check if the admin is authenticated  
         $user = Auth::guard('admin')->user();  

         // Check if the user is authenticated  
         if (!$user) {  
             return redirect()->back()->with('error', 'Unauthorized: No admin found.');  
         }  
 
         // Check if the user's type is not 'manager'  
         if ($user->type !== 'manager') {  
             return redirect()->back()->with('error', 'Access forbidden: Only managers can send requests.');  
         }  
 
         return $next($request);  
    }  
}  