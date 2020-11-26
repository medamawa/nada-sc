<?php

namespace App\Http\Middleware\RoleCheck;

use Closure;
use App\Http\Models\User;

class Club
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

        // クラブアカウントかどうか確認、クラブアカウントであれば通す
        if (User::where('id', $user_id)->value('role') == 2) {
            return $next($request);
        }
            
        // クラブアカウントでない場合はエラーコード403(認可エラー)を返す
        return abort(403);
    }
}
