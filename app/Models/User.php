<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function getActiveUserFromAustria(): Object
    {
        $sql = $this->with('userDetail', 'userDetail.country')
            ->whereHas('userDetail.country', function ($q) {
                $q->where('name', 'Austria');
            })
            ->where('active', 1)
            ->get();

        return $sql;
    }

    public function getUserByID(int $id): Object
    {
        $sql = $this->with('userDetail', 'userDetail.country')
            ->where('id', $id)
            ->first();

        return $sql;
    }

    public function userDetail(): Object
    {
        return $this->hasOne(User_detail::class, 'user_id', 'id');
    }
}
