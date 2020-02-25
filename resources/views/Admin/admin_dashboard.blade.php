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
	     
	      </div><!--end of .table-responsive-->
	    </div>
	</main>
	<!-- page-content" -->
	<!-- The Modal -->
</div>



@endsection