@extends('layouts.app')

@section('content')
    <form style="display: flex; flex-direction: column;" method="POST">
        @csrf
        <div style="display: flex;">
            <div>Country:</div>
            <div>
                <select type="text" name="country_id">
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" @if($country->id == $user->userDetail->citizenship_country_id) selected @endif>{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div style="display: flex;">
            <div>Name:</div>
            <div>
                <input type="text" name="name" value="{{ $user->userDetail->first_name }}">
            </div>
        </div>
        <div style="display: flex;">
            <div>Last name:</div>
            <div>
                <input type="text" name="lastname" value="{{ $user->userDetail->last_name }}">
            </div>
        </div>
        <div style="display: flex;">
            <div>Phone number:</div>
            <div>
                <input type="text" name="phone" value="{{ $user->userDetail->phone_number }}">
            </div>
        </div>
        <input type="submit" value="send">
    </form>

@stop
