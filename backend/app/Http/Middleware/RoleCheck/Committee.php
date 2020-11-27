<?php

namespace App\Http\Middleware\RoleCheck;

use Closure;
use App\Http\Models\User;

class Committee
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

        // 委員会アカウントかどうか確認、委員会アカウントであれば通す
        if (User::where('id', $user_id)->value('role') == 1) {
            return $next($request);
        }
            
        // 委員会アカウントでない場合はエラーコード403(認可エラー)を返す
        return abort(403);
    }
}
