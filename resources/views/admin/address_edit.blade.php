@extends('admin')
@section('title','Địa Chỉ')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

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
					
					<a class="btn btn-warning" data-toggle="modal" href='#modal-id'><i class="fas fa-edit"></i></a>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit</h4>
								</div>
								<div class="modal-body">
									<form action="" method="POST" role="form">
										<div class="form-group">
											<label for="">name</label>
											<input type="text" class="form-control" name="name" value="{{$model->name}}">
										</div>
										<div class="form-group">
											<label for="">address</label>
											<input type="text" class="form-control" name="address" value="{{$model->address}}">
										</div>
										<div class="form-group">
											<label for="">phone</label>
											<input type="text" class="form-control" name="phone" value="{{$model->phone}}">
										</div>
										<div class="form-group">
											<label for="">business_registration_certificate_number</label>
											<input type="text" class="form-control" name="business_registration_certificate_number" value="{{$model->business_registration_certificate_number}}">
										</div>
										<div class="form-group">
											<label for="">register</label>
											<input type="text" class="form-control" name="register" value="{{$model->register}}">
										</div>
										<div class="form-group">
											<label for="">email</label>
											<input type="text" class="form-control" name="email" value="{{$model->email}}">
										</div>
                                        @csrf
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
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