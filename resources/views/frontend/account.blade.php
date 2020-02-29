@extends('layouts.frontend.main')
<link href="{{asset('css/profile.css')}}" rel="stylesheet">
@section('content')
<link rel="stylesheet" href="{{asset('css/account.css')}}"


<div class="container ">

    <div class="row">
        <div class="col-md-8 offset-2  mt-5 mb-5">
            <div class="text-center">
                @if(session('message'))
                    {{session('message')}}
                @endif
            <label class="mt-5 "><h2 >Update Account</h2></label>
            <div class="col-md-8 offset-2">
                @if(Auth::user()->type=='foundation')
            <form method="post" action="{{route('faccount_update',Auth::user()->id)}}">
                @elseif(Auth::user()->type=='people')
                <form method="post" action="{{route('paccount_update',Auth::user()->id)}}">
                @endif
                @csrf
                <div class="form-group">
                    <label class="control-label"><h5>Name</h5></label>
                <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label"><h5>Email</h5></label>
                <input type="text" name="name" value="{{Auth::user()->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label"><h5>Old Password</h5></label>
                <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label"><h5>New Password</h5></label>
                <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label"><h5>Confirm Password</h5></label>
                <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                   <button type="submit" class="form-control btn btn-dark" >Update </button> 
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    </div>

        @endsection
