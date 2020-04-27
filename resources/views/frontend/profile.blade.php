@extends('layouts.frontend.main')
<link href="{{asset('css/profile.css')}}" rel="stylesheet">
@section('content')
<div class="container profile">
    <div class="row">
        <div class="col-md-12 col-sm-12 mt-5">
            <div class="twPc-div">
                <a class="twPc-bg twPc-block"></a>
                <div>
                    <div class="twPc-button">
                    </div>
                    @if(Auth::user()->type=='foundation')
                        <a title="{{ $data->name }}" href="#" class="twPc-avatarLink name-title">
                            <img alt="{{ $data->name }}"
                                src="{{ url('uploads/'.$foundation->foundation_profile) }}"
                                class="twPc-avatarImg">
                        </a>
                    @elseif(Auth::user()->type=='people')
                        <a title="{{ $data->name }}" href="#" class="twPc-avatarLink name-title">
                            <img alt="{{ $data->name }}"
                                src="{{ url('uploads/'.$people->user_profile) }}"
                                class="twPc-avatarImg">
                        </a>
                    @endif

                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <h2 style="margin-top:30px"><strong>{{ $data->name }}</strong></h2>
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

                                    <span class="twPc-StatLabel twPc-block"><strong>Created Date</strong></span>
                                    <h5><strong>{{ Auth::user()->created_at }}</strong></h5>

                                @elseif(Auth::user()->type=='people')

                                    <span class="twPc-StatLabel twPc-block"><strong>Created Date</strong></span>
                                    <h5><strong>{{ Auth::user()->created_at }}</strong></h5>
                                @endif
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                            </li>
                        </ul>

                        

                    </div>
                </div>
            </div>
        </div>
   
<div class="container-fluid mt-3 mb-4">
    <div class="row">
        @if(Auth::user()->type=='foundation')
            @forelse($fpost as $aa)
             <div class="col-md-4 col-sm-12 mb-3">
                 <div class="card promoting-card">
                     <div class="card-header d-flex flex-row">
                         <img src="{{ url('uploads/'.$foundation->foundation_profile) }}"
                             class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
                         <div>
                             <!-- Title -->
                             <h4 class="card-title font-weight-bold mb-2 mt-3">{{ $data->name }}</h4>
                             <!-- Subtitle -->
                             <p class="card-text"><i
                                     class="far fa-clock pr-2"></i>{{ $aa->created_at->diffForHumans() }}</p>
                         </div>
                     </div>
                     <div class="card-body">
                         <div class="view overlay">
                             @if(is_null($aa->user_post_id))
                                 <img class="card-img-top rounded-0"
                                     src="{{ url('uploads/'.$aa->f_post_image) }}"
                                     alt="Card image cap">
                             @elseif($aa->user_post_id==$aa->userPost->id)
                                 <img class="card-img-top rounded-0"
                                     src="{{ url('uploads/'.$aa->userPost->image) }}"
                                     alt="Card image cap">
                             @endif
                         </div>
                         <div class="collapse-content">

                             @foreach($p_id as $pposts )
                                 @if($pposts->id == $aa->user_post_id)
                                     <p class="text-success mt-2"> You have been confirmed this post !</p>
                                 @endif
                             @endforeach

                             <p class="mt-3">{{ str_limit($aa->f_post_detail,100) }} </p>
                         </div>
                     </div>
                     <div class="card-footer  text-center">
                         <div class="row">
                             <div class="col-md-6">
                                <a class="btn btn-primary detail_link " href="{{url('detail_page/'.$aa->id)}}"  style="text-decoration: none">{{(__('common.detail'))}}</a>
                             </div>
                             <div class="col-md-6">
                                <a class="btn btn-danger" href="{{url('post_delete/foundation/'.$aa->id)}}">Remove</a>     
                            </div>
                         </div>
                        
                            
                     </div>
                 </div>
             </div>
         @empty<p>There is no data</p>
        @endforelse
        
        @elseif(Auth::user()->type=='people')
        @forelse($ppost as $aa)
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="card promoting-card1">
                <div class="card-header d-flex flex-row">
                    <img src="{{ url('uploads/'.$people->user_profile) }}"
                        class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
                    <div>
                        <!-- Title -->
                        <h4 class="card-title font-weight-bold mb-2">{{ $data->name }}</h4>
                        <!-- Subtitle -->
                        <p class="card-text"><i class="far fa-clock pr-2"></i>{{ $aa->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="view overlay">
                        <img class="card-img-top rounded-0"
                            src="{{ url('uploads/'.$aa->image) }}" alt="Card image cap">
                    </div>
                    <div class="collapse-content">

                        @foreach($f_id as $fposts )
                            @if($fposts->user_post_id == $aa->id)
                                <p class="text-success mt-2"> Foundation have been confirmed this post !</p>
                            @endif
                        @endforeach

                        <div class="collapse-content">
                            <p class="mt-3"><img src="../../../img/house.svg" width="5%"> &nbsp;<strong> Location
                                    :</strong>
                                &nbsp;{{ $aa->location }}</p>
                            <p><img src="../../../img/idea.svg" width="5%"> &nbsp;<strong> Item Requested :</strong>
                                &nbsp;{{ $aa->items_requested }}</p>
                            <p><img src="../../../img/rich.svg" width="5%"> &nbsp;<strong> Estimated Costs :</strong>
                                &nbsp;{{ $aa->cost }}</p>
                            <p><img src="../../../img/star.svg" width="5%"> &nbsp;<strong> Significance of the project
                                    :</strong> &nbsp;{{ $aa->significance }}</p>
                            <p><img src="../../../img/phone.svg" width="5%"> &nbsp;<strong> Phone :</strong>
                                &nbsp;{{ $aa->phone }}</p>
                            <p><img src="../../../img/edit.svg" width="5%"> &nbsp;<strong> remark :</strong>
                                &nbsp;{{ $aa->remark }}</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-danger"
                                href="{{ url('post_delete/people/'.$aa->id) }}">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty<p>There is no data</p>
   @endforelse
@endif
    </div>
</div>

  @if(Auth::user()->type == 'foundation')
    <div class="pagination mt-5" >
      {{ $fpost->links() }}
    </div>
  @else
    <div class="pagination ">
     {{ $ppost->links() }}
    </div>
  @endif

@endsection
