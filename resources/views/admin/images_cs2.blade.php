@extends('admin')
@section('title','Ảnh Cơ Sở 2')
@section('main')
@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('success')}}</strong>
</div>
@endif
@if(Session::has('danger'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('danger')}}</strong>
</div>
@endif
@if(Session::has('warning'))
<div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('warning')}}</strong>
</div>
@endif
<br>
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Ảnh Cơ Sở 2</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">name</label>
						<input type="text" class="form-control" name="name" placeholder="Input field">
					</div>

					<div class="form-group">
						<label for="">ảnh</label>
						<input type="file" class="form-control" name="upload_image" placeholder="Input field">
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
				<th>tên</th>
				<th>hình ảnh</th>
				<th>sửa</th>
				<th>xóa</th>
			</tr>
		</thead>
		<tbody>
		@foreach($images_cs2 as $imgcs2)
			<tr>
				<td>{{$imgcs2['id']}}</td>
				<td>{{$imgcs2['name']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$imgcs2['img']}}" alt="" width="50px">
				</td>
				<td>
					<a href="{{route('images_cs2_edit',['id'=>$imgcs2['id']])}}" title="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="{{route('images_cs2_delete',['id'=>$imgcs2['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()