<?php

namespace App\Http\Middleware;

use Closure;
use App\models\OperationLog;

class AdminOperationLog
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
        if(session('adminFlag')) {
            $response = $next($request);
            $admins_id = session('admin')->id;
        
            if('GET' != $request->method()){
                $input = $request->all();
                $log = new OperationLog; // 提前创建表、model
                $log->admins_id = $admins_id;
                $log->path = $request->path();
                $log->ip = $request->ip();
                $log->method = $request->method();
                if (session('success')) {
                    $log->status = 1;
                }
                $log->input = json_encode($input, JSON_UNESCAPED_UNICODE);
                $log->save();  // 记录日志
            }
            return $response;
        } else {
            return redirect('/admin/login')->with('error', '请登录');
        }
    }
}
