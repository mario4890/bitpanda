<?php

namespace App\Http\Controllers\User;

use App\Models\Country;
use App\Models\User;
use App\Models\User_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete(Request $request, User $userObj, int $userID)
    {
        $user = $userObj->getUserByID($userID);

        if (empty($user->userDetail->id)) {
            $user->delete();
        }
    }
}
