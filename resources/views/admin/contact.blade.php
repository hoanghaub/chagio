@extends('admin')
@section('title','Contact')
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
						<label for="">address</label>
						<input type="text" class="form-control" name="address" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">hostline</label>
						<input type="number" class="form-control" name="hostline" placeholder="Input field">
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
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>address</th>
				<th>hostline</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
		@foreach($contact as $ct)
			<tr>
				<td>{{$ct['id']}}</td>
				<td>{{$ct['address']}}</td>
				<td>{{$ct['hostline']}}</td>
				<td>
					<a href="{{route('contact_edit',['id'=>$ct['id']])}}" title="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="{{route('contact_delete',['id'=>$ct['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection