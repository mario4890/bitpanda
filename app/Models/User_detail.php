<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getByUserID(int $userID): User_detail
    {
        return $this->where('user_id', $userID)->first();
    }

    public function setCountryID(int $id): User_detail
    {
        $this->citizenship_country_id = $id;

        return $this;
    }

    public function setFirstName(string $name): User_detail
    {
        $this->first_name = $name;

        return $this;
    }

    public function setLastName(string $lastname): User_detail
    {
        $this->last_name = $lastname;

        return $this;
    }

    public function setPhoneNumber(string $phone): User_detail
    {
        $this->phone_number = $phone;

        return $this;
    }

    public function country(): Object
    {
        return $this->hasOne(Country::class, 'id', 'citizenship_country_id');
    }
}
