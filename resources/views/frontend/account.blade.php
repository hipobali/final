@extends('layouts.frontend.main')
@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-sm-12  mt-5 mb-5">
            <div class="text-center">
                @if(session('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    @elseif(session('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                @endif
            <label class="mt-5 "><h2 >Update Account</h2></label>
            <div class="col-md-8  offset-md-2 col-sm-12">
                @if(Auth::user()->type=='foundation')
            <form method="post" action="{{route('faccount_update',Auth::user()->id)}}">
                @elseif(Auth::user()->type=='people')
                <form method="post" action="{{route('paccount_update',Auth::user()->id)}}">
                @endif
                @csrf
                <div class="form-group col-md-8  offset-md-2 col-sm-12">
                    <label class="control-label"><h5>Name</h5></label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required="true" id="name" value="{{ Auth::user()->name }}"/>
                </div>
                <div class="form-group col-md-8  offset-md-2 col-sm-12">
                    <label class="control-label"><h5>Old Password</h5></label>
                    <input type="password" class="form-control" placeholder="Old Password" name="old_password"/>
                </div>
                <div class="form-group col-md-8  offset-md-2 col-sm-12">
                    <label class="control-label"><h5>New Password</h5></label>
                <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group col-md-8  offset-md-2 col-sm-12">
                    <label class="control-label"><h5>Confirm Password</h5></label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password"/>
                </div>
                <div class="form-group col-md-8  offset-md-2 col-sm-12">
                   <button type="submit" class="form-control btn btn-dark" >Update </button> 
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    </div>

        @endsection
