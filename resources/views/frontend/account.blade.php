@extends('layouts.frontend.main')
<link href="{{asset('css/profile.css')}}" rel="stylesheet">
@section('content')
<link rel="stylesheet" href="{{asset('css/account.css')}}"
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

@if(Auth::user()->type=='foundation')
<div class="container">
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-white profile-widget">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="image-container bg2">  
                    <img src="{{url('uploads/'.$foundation->foundation_profile)}}" class="avatar" alt="avatar"> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="details">
                        <h4>John Doe <i class="fa fa-sheild"></i></h4>
                        <div>Works at Bootdey.com</div>
                        <div>Attended University of Bootdey.com</div>
                        <div>Bootdey Land</div> 
                        <div class="mg-top-10">
                            <a href="#" class="btn btn-blue">Followers</a>
                            <a href="#" class="btn btn-green">Following</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-6">
                
                <div class="panel panel-white border-top-purple">
                   <div class="panel-heading">
                        <h3 class="panel-title">My Story</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">About</h5>
                            <p class="section-content">A brief description of you</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Introduction</h5>
                            <p class="section-content">Put a little about yourself here so people know they've found the correct Kevin.</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Acheivements</h5>
                            <p class="section-content">Examples: survived high school, have 3 kids, etc.</p>
                        </div> 
                        <div class="body-section">
                            <a href="#" class="btn btn-purple btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-light-blue">
                   <div class="panel-heading">
                        <h3 class="panel-title">My Plan</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">Current Plan: Basic Plan</h5>
                            <p>Your next charge is $100 due May 12, 2014</p>
                            <ul>
                                <li>400 Orders/Month</li>
                                <li>10 GB storage</li>
                                <li>5 Users</li>
                                <li>Mobile App Access</li>
                            </ul>
                        </div>
                        <div class="body-section">
                            <a href="#" class="btn btn-info btn-sm">Upgrade Account</a>
                        </div>
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-pink">
                   <div class="panel-heading">
                        <h3 class="panel-title">My Tasks</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="mg-top-0">Completed Pre-Orders - 90%</h5>
                                <div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                        </div>
                        <div class="body-section">
                            <h5>Completed Orders - 40%</h5>
                            <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                            </div>
</div>
                        </div>
                        <div class="body-section">
                            <h5>Design New Ad - 20%</h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> 
                                </div>
                            </div>
                        </div>
                        <div class="body-section">
                            <h5>Conduct Feasibility Test - 60%</h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div> 
                        <div class="body-section">
                            <h5>Conduct Domain Analysis - 80%</h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> 
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
            </div>
            
            <div class="col-sm-6">
                 
                <div class="panel panel-white border-top-green">
                   <div class="panel-heading">
                        <h3 class="panel-title">User Info</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">Name</h5>
                            <p class="section-content">Jane A. Doe</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Address</h5>
                            <p class="section-content">46 Gray's Inn Rd, London, WC1X 8LP</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Telephone</h5>
                            <p class="section-content">(123) 456 - 7890</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Email</h5>
                            <p class="section-content">spam@ztapps.com</p>
                        </div> 
                        <div class="body-section">
                            <h5 class="section-heading">Website</h5>
                            <p class="section-content">ztapps.com</p>
                        </div>  
                        <div class="body-section">
                            <a href="#" class="btn btn-green btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-orange">
                   <div class="panel-heading">
                        <h3 class="panel-title">Social Statistics</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">Friends</h5>
                            <p class="section-content">242</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Posts</h5>
                            <p class="section-content">2240</p>
                        </div> 
                        <div class="body-section">
                            <h5 class="section-heading">Pictures</h5>
                            <p class="section-content">18</p>
                        </div>  
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-blue">
                   <div class="panel-heading">
                        <h3 class="panel-title">Sale Statistics</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">  
                        <div class="body-section">
                            <h5 class="section-heading">Today</h5>
                            <p class="section-content">$450.00</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Last Week</h5>
                            <p class="section-content">$1222.00</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">This Quarter</h5>
                            <p class="section-content">$122,300.00</p>
                        </div>  
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>

</div>
</div>
@elseif(Auth::user()->type=='people')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-white profile-widget">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="image-container bg2">  
                        <img src="{{url('uploads/'.$people->user_profile)}}" class="avatar" alt="avatar"> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="details">
                            <h4>John Doe <i class="fa fa-sheild"></i></h4>
                            <div>Works at Bootdey.com</div>
                            <div>Attended University of Bootdey.com</div>
                            <div>Bootdey Land</div> 
                            <div class="mg-top-10">
                                <a href="#" class="btn btn-blue">Followers</a>
                                <a href="#" class="btn btn-green">Following</a>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-sm-6">
                    
                    <div class="panel panel-white border-top-purple">
                       <div class="panel-heading">
                            <h3 class="panel-title">My Story</h3>
                            <div class="controls pull-right">
                                <span class="pull-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <div class="body-section">
                                <h5 class="section-heading">About</h5>
                                <p class="section-content">A brief description of you</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Introduction</h5>
                                <p class="section-content">Put a little about yourself here so people know they've found the correct Kevin.</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Acheivements</h5>
                                <p class="section-content">Examples: survived high school, have 3 kids, etc.</p>
                            </div> 
                            <div class="body-section">
                                <a href="#" class="btn btn-purple btn-sm">Edit</a>
                            </div>
                        </div>
                    </div>
                     
                    <div class="panel panel-white border-top-light-blue">
                       <div class="panel-heading">
                            <h3 class="panel-title">My Plan</h3>
                            <div class="controls pull-right">
                                <span class="pull-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <div class="body-section">
                                <h5 class="section-heading">Current Plan: Basic Plan</h5>
                                <p>Your next charge is $100 due May 12, 2014</p>
                                <ul>
                                    <li>400 Orders/Month</li>
                                    <li>10 GB storage</li>
                                    <li>5 Users</li>
                                    <li>Mobile App Access</li>
                                </ul>
                            </div>
                            <div class="body-section">
                                <a href="#" class="btn btn-info btn-sm">Upgrade Account</a>
                            </div>
                        </div>
                    </div>
                     
                    <div class="panel panel-white border-top-pink">
                       <div class="panel-heading">
                            <h3 class="panel-title">My Tasks</h3>
                            <div class="controls pull-right">
                                <span class="pull-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <div class="body-section">
                                <h5 class="mg-top-0">Completed Pre-Orders - 90%</h5>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                            </div>
                            <div class="body-section">
                                <h5>Completed Orders - 40%</h5>
                                <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                </div>
    </div>
                            </div>
                            <div class="body-section">
                                <h5>Design New Ad - 20%</h5>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> 
                                    </div>
                                </div>
                            </div>
                            <div class="body-section">
                                <h5>Conduct Feasibility Test - 60%</h5>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="body-section">
                                <h5>Conduct Domain Analysis - 80%</h5>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-sm-6">
                     
                    <div class="panel panel-white border-top-green">
                       <div class="panel-heading">
                            <h3 class="panel-title">User Info</h3>
                            <div class="controls pull-right">
                                <span class="pull-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <div class="body-section">
                                <h5 class="section-heading">Name</h5>
                                <p class="section-content">Jane A. Doe</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Address</h5>
                                <p class="section-content">46 Gray's Inn Rd, London, WC1X 8LP</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Telephone</h5>
                                <p class="section-content">(123) 456 - 7890</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Email</h5>
                                <p class="section-content">spam@ztapps.com</p>
                            </div> 
                            <div class="body-section">
                                <h5 class="section-heading">Website</h5>
                                <p class="section-content">ztapps.com</p>
                            </div>  
                            <div class="body-section">
                                <a href="#" class="btn btn-green btn-sm">Edit</a>
                            </div>
                        </div>
                    </div>
                     
                    <div class="panel panel-white border-top-orange">
                       <div class="panel-heading">
                            <h3 class="panel-title">Social Statistics</h3>
                            <div class="controls pull-right">
                                <span class="pull-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <div class="body-section">
                                <h5 class="section-heading">Friends</h5>
                                <p class="section-content">242</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Posts</h5>
                                <p class="section-content">2240</p>
                            </div> 
                            <div class="body-section">
                                <h5 class="section-heading">Pictures</h5>
                                <p class="section-content">18</p>
                            </div>  
                        </div>
                    </div>
                     
                    <div class="panel panel-white border-top-blue">
                       <div class="panel-heading">
                            <h3 class="panel-title">Sale Statistics</h3>
                            <div class="controls pull-right">
                                <span class="pull-right clickable">
                                    <i class="fa fa-chevron-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body">  
                            <div class="body-section">
                                <h5 class="section-heading">Today</h5>
                                <p class="section-content">$450.00</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">Last Week</h5>
                                <p class="section-content">$1222.00</p>
                            </div>
                            <div class="body-section">
                                <h5 class="section-heading">This Quarter</h5>
                                <p class="section-content">$122,300.00</p>
                            </div>  
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    
    </div>
    </div>
@endif
        @endsection
