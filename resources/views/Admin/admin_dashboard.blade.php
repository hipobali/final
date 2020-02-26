@extends('layouts.admin.main')

@section('content')

<div class="page-wrapper chiller-theme toggled">
	<!-- sidebar-wrapper  -->
	<main class="page-content">
      <div class="container" id="back_to">
        <div class="row">
          <div class="col-md-12">
            <a href="{{url('/')}}" target="_blank">BACK TO HOME</a>
          </div>
        </div>
      </div>
       @if(session()->has('message'))
		    <div class="alert alert-success alert-dismissible">
			   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			   <strong>{{ session()->get('message') }}</strong>
			 </div>
		@endif	
	    <div class="container-fluid">
	    <div class="row">
			<div class="col-md-3 col-sm-12">
				<div class="card shadow">
						<button type="button" class="btn btn-primary">
							Total User <span class="badge badge-light"> <i class="fa fa-user"></i> {{($user->count())}}</span>
						  </button>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="card shadow">
					<button type="button" class="btn btn-secondary">
						Total Foundation <span class="badge badge-light">  <i class="fa fa-user"></i>	{{$foundation->count()}}</span>
					</button>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="card shadow">
						<button type="button" class="btn btn-warning">
							Total People In Need<span class="badge badge-light"> <i class="fa fa-user"></i> {{$people->count()}}</span>
						</button>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="card shadow">
						<button type="button" class="btn btn-info">
							Total Admin<span class="badge badge-light"> <i class="fa fa-user"></i> 	{{$admin->count()}}</span>
						</button>
				</div>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4 col-sm-12">
				<div class="card shadow">
						<button type="button" class="btn btn-dark">
							Total User Post<span class="badge badge-light"> <i class="fa fa-user"></i> {{($userpost->count())}}</span>
						</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="card shadow">
						<button type="button" class="btn btn-danger">
							Total Foundation Post<span class="badge badge-light"> <i class="fa fa-user"></i>{{$foundationpost->count()}}</span>
						</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="card shadow">
						<button type="button" class="btn btn-dark">
							Total Report Post<span class="badge badge-light"> <i class="fa fa-user"></i>	{{$report->count()}}</span>
						</button>
				</div>
			</div>
	
		</div>
	      </div><!--end of .table-responsive-->
	    </div>
	</main>
	<!-- page-content" -->
	<!-- The Modal -->
</div>



@endsection