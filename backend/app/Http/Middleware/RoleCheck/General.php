<?php

namespace App\Http\Middleware\RoleCheck;

use Closure;
use App\Http\Models\User;

class General
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

        // 一般アカウント(general)かどうか確認、一般アカウントであれば通す
        if (User::where('id', $user_id)->value('role') == 3) {
            return $next($request);
        }
            
        // 一般アカウント(general)でない場合はエラーコード403(認可エラー)を返す
        return abort(403);
    }
}
