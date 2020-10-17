<?php

namespace App\Http\Middleware\RoleCheck;

use Closure;
use App\Http\Models\User;

class Admin
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
        // ログインユーザーのidを取得
        $user_id = auth()->user()->id;

        // 管理者(admin)かどうか確認、管理者であれば通す
        if (User::where('id', $user_id)->value('role') == 1) {
            return $next($request);
        }
            
        // 管理者(admin)でない場合はエラーコード403(認可エラー)を返す
        return abort(403);
    }
}
