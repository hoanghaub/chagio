@extends('admin')
@section('title','Promotion')
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
						<label for="">day</label>
						<input type="text" class="form-control" name="day" placeholder="Input field">
					</div>

					<label for="">Content</label>
					<textarea name="content"></textarea>
				     <br>
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
				<th>name</th>
				<th>day</th>
				<th>content</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($promotion as $pm)
			<tr>
				<td>{{$pm['id']}}</td>
				<td>{{$pm['name']}}</td>
				<td>{{$pm['day']}}</td>
				<td>{{$pm['content']}}</td>
				<td>
					<a href="{{route('promotion_edit',['id'=>$pm['id']])}}" class="btn btn-warning" title=""><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="{{route('promotion_delete',['id'=>$pm['id']])}}" class="btn btn-danger" title=""><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection