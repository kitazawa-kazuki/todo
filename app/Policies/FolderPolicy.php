<?php

namespace App\Policies;

use App\User;
use App\Folder;

class FolderPolicy
{
    /**
     * フォルダの閲覧権限があるか判定する。
     *
     * @param App\User 閲覧しているユーザー
     * @param App\Folder 閲覧したいフォルダー
     * @return bool 閲覧しているユーザーがフォルダーの所有者の場合true,所有者ではない場合falseを返す
     */
    public function view(User $user, Folder $folder)
    {
        return $user->id === $folder->user_id;
    }
}
