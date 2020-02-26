@extends('layouts\frontend\main')
<link href="{{asset('css/profile.css')}}" rel="stylesheet">
@section('content')
<div class="container profile">
    <div class="row">
        <div class="col-md-12 col-sm-12 mt-4">
            <div class="twPc-div">
                <a class="twPc-bg twPc-block"></a>
            
                <div>
                    <div class="twPc-button">
           
                    </div>
                    @if(Auth::user()->type=='foundation')
                <a title="{{$data->name}}" href="#" class="twPc-avatarLink name-title">
                        <img alt="{{$data->name}}" src="{{url('uploads/'.$foundation->foundation_profile)}}" class="twPc-avatarImg">
                        </a>
                    @elseif(Auth::user()->type=='people')
                    <a title="{{$data->name}}" href="#" class="twPc-avatarLink name-title">
                    <img alt="{{$data->name}}" src="{{url('uploads/'.$people->user_profile)}}" class="twPc-avatarImg">
                    </a>
                    @endif

                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <h2 style="margin-top:30px"><strong>{{$data->name}}</strong></h2>
                        </div>
                        @if(Auth::user()->type=='foundation')
                        <span>
                            <a href="#">@<span>Foundation</span></a>
                        </span>
                        @elseif(Auth::user()->type=='people')
                        <span>
                            <a href="#">@<span>People In Need</span></a>
                        </span>
                        @endif
                       
                    </div>
            
                    <div class="twPc-divStats">
                        <ul class="twPc-Arrange">
                            <li class="twPc-ArrangeSizeFit">
                                @if(Auth::user()->type=='foundation')

                                <span class="twPc-StatLabel twPc-block"><strong>Total Post</strong></span>
                                <h5><strong>{{$foundationpost->count()}}</strong></h5>

                                @elseif(Auth::user()->type=='people')

                                <span class="twPc-StatLabel twPc-block"><strong>Total Request Post</strong></span>
                               <h5><strong>{{$userpost->count()}}</strong></h5>
                                @endif
                              
                            </li>

                            <li class="twPc-ArrangeSizeFit">
                                @if(Auth::user()->type=='foundation')

                                <span class="twPc-StatLabel twPc-block"><strong>Total Post</strong></span>
                                <h5><strong>{{$foundationpost->created_at}}</strong></h5>

                                @elseif(Auth::user()->type=='people')

                                <span class="twPc-StatLabel twPc-block"><strong>Total Request Post</strong></span>
                               <h5><strong>{{$userpost->created_at}}</strong></h5>
                                @endif
                              
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   
<div class="container-fluid mt-3">
    <div class="row">
        @if(Auth::user()->type=='foundation')
            @forelse($fpost as $aa)
             <div class="col-md-6 col-sm-12">
                <div class="card promoting-card">

                    <!-- Card content -->
                    <div class="card-body d-flex flex-row">
                  
                      <!-- Avatar -->
                    <img src="{{url('uploads/'.$foundation->foundation_profile)}}" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
                  
                      <!-- Content -->
                      <div>
                  
                        <!-- Title -->
                      <h4 class="card-title font-weight-bold mb-2">{{$data->name}}</h4>
                        <!-- Subtitle -->
                        <p class="card-text"><i class="far fa-clock pr-2"></i>{{$aa->created_at->diffForHumans()}}</p>
                  
                      </div>
                  
                    </div>
                  
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top rounded-0" src="{{url('uploads/'.$aa->image)}}" alt="Card image cap">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                  
                    <!-- Card content -->
                    <div class="card-body">
                  
                      <div class="collapse-content">
                  
                        <!-- Text -->
                        <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>
                        <!-- Button -->
                        <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
                        <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                        <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                  
                      </div>
                  
                    </div>
                  
                  </div>
                </div>
         @empty<p>There is no data</p>
        @endforelse
        @elseif(Auth::user()->type=='people')
        @forelse($ppost as $aa)
        <div class="col-md-6 col-sm-12">
           <div class="card promoting-card">

               <!-- Card content -->
               <div class="card-body d-flex flex-row">
             
                 <!-- Avatar -->
               <img src="{{url('uploads/'.$people->user_profile)}}" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
             
                 <!-- Content -->
                 <div>
             
                   <!-- Title -->
                 <h4 class="card-title font-weight-bold mb-2">{{$data->name}}</h4>
                   <!-- Subtitle -->
                 <p class="card-text"><i class="far fa-clock pr-2">{{$aa->created_at->diffForHumans()}}</i></p>
             
                 </div>
             
               </div>
             
               <!-- Card image -->
               <div class="view overlay">
                 <img class="card-img-top rounded-0" src="{{url('uploads/'.$aa->image)}}" alt="Card image cap">
                 <a href="#!">
                   <div class="mask rgba-white-slight">
                       {{$aa->d}}
                   </div>
                 </a>
               </div>
             
               <!-- Card content -->
               <div class="card-body">
             
                 <div class="collapse-content">
             
                   <!-- Text -->
                   <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>
                   <!-- Button -->
                   <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
                   <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                   <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
             
                 </div>
             
               </div>
             
             </div>
           </div>
    @empty<p>There is no data</p>
   @endforelse
@endif
    </div>
</div>
        @endsection
