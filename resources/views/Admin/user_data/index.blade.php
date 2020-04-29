@extends('layouts.admin.main')
@section('title')
User Data
@endsection
@section('content')

<div class="page-wrapper chiller-theme toggled">
	<!-- sidebar-wrapper  -->
	<main class="page-content">
   
       @if(session()->has('message'))
		    <div class="alert alert-success alert-dismissible">
			   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			   <strong>{{ session()->get('message') }}</strong>
			 </div>
		@endif
	    <div class="container-fluid">
	      <div class="table-responsive">
	            <table id="myTable" class="table table-bordered table-hover">
		              <thead>
			                <tr>
			                  <th>No</th>
			                  <th>Name</th>
			                  <th>Email</th>
			                 
			                </tr>
		              </thead>
		              @php
		              $user = App\User::get();
		              @endphp
		              <tbody>
		              		@foreach($user_data  as $key => $data)
			                <tr>
			                  <td>{{ $key+1 }}</td>
			                  <td>{{ $data->name }}</td>
			                  <td>{{ $data->email }}</td>
			            
			                  @endforeach
			                </tr>
		              </tbody>
	            </table>
	      </div><!--end of .table-responsive-->
	    </div>
	</main>
</div>


<script type="text/javascript">
	function check() {
	    if(document.getElementById('password').value ===
	            document.getElementById('confirm_password').value) {
	        document.getElementById('error_message').innerHTML = "";
	    $('#change_password').attr('disabled',false);
	    } else {
	        document.getElementById('error_message').innerHTML = "Not match password";
	        $('#change_password').attr('disabled',true);
	    }
	}
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection