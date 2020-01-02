@extends('admin')
@section('title','Địa Chỉ')
@section('main')
@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('success')}}</strong>
</div>
@endif
@if(Session::has('warning'))
<div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('warning')}}</strong>
</div>
@endif
@if(Session::has('danger'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('danger')}}</strong>
</div>
@endif
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Addition</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form">
					<div class="form-group">
						<label for="">name</label>
						<input type="text" class="form-control" name="name" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">address</label>
						<input type="text" class="form-control" name="address" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">phone</label>
						<input type="number" class="form-control" name="phone">
					</div>
					<div class="form-group">
						<label for="">business_registration_certificate_number</label>
						<input type="number" class="form-control" name="business_registration_certificate_number" >
					</div>
					<div class="form-group">
						<label for="">register</label>
						<input type="date" class="form-control" name="register" >
					</div>
					<div class="form-group">
						<label for="">email</label>
						<input type="email" class="form-control" name="email" >
					</div>
					@csrf
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
			</div>
		</div>
	</div>
</div>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>address</th>
				<th>phone</th>
				<th>business_registration_certificate_number</th>
				<th>register</th>
				<th>email</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($address as $diachi)
			<tr>
				<td>{{$diachi['id']}}</td>
				<td>{{$diachi['name']}}</td>
				<td>{{$diachi['address']}}</td>
				<td>{{$diachi['phone']}}</td>
				<td>{{$diachi['business_registration_certificate_number']}}</td>
				<td>{{$diachi['register']}}</td>
				<td>{{$diachi['email']}}</td>
				<td>
					<a href="{{route('address_edit',['id'=>$diachi['id']])}}" title="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="{{route('address_delete',['id'=>$diachi['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection()