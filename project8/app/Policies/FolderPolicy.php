<?php

namespace App\Policies;

use App\Models\Folder;
use App\Models\User;

class FolderPolicy
{
    /**
     * フォルダの閲覧権限
     * @param User $user
     * @param Folder $folder
     * @return bool
     */
    // public function view(User $user, Int $id)
    // {
    //     $folder = Folder::find($id);
    //     return $user->id === $folder->user_id;
    // }
}
