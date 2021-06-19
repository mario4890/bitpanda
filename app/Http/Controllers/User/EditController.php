<?php

namespace App\Http\Controllers\User;

use App\Models\Country;
use App\Models\User;
use App\Models\User_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $userObj, Country $countryObj, int $user_id)
    {
        $user       = $userObj->getUserByID($user_id);
        $countries  = $countryObj->all();

        return view('User.edit', compact('user', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_detail $userDetailObj, int $userID)
    {
        $user = $userDetailObj->getByUserID($userID);
        $user->setFirstName($request->name);
        $user->setLastName($request->lastname);
        $user->setCountryID($request->country_id);
        $user->setPhoneNumber($request->phone);
        $user->save();

        return redirect()->back();
    }
}
