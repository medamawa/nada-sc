<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;

class UsersController extends Controller
{
    public function committeeIndex(User $user)
    {
        // 委員会の一覧を取得
        $users = $user->getCommitteeUsers();
        
        return view('user.committee.index', ['users' => $users]);
    }

    public function clubIndex(User $user)
    {
        // クラブの一覧を取得
        $users = $user->getClubUsers();
        
        return view('user.club.index', ['users' => $users]);
    }
}
