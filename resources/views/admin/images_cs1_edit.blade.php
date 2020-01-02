@extends('admin')
@section('title','Ảnh Cơ Sở 1')
@section('main')
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<table class="table table-hover table-responsive">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>ảnh</th>
			<th>sửa</th>
			<th>xóa</th>
		</tr>
	</thead>
	<tbody>
	@foreach($images_cs1 as $imgcs1)
		<tr>
			<td>{{ $imgcs1['id'] }}</td>
			<td>{{ $imgcs1['name'] }}</td>
			<td>
				<img src="{{url('public/image')}}/{{$imgcs1['img']}}" width="100px">
			</td>
			<td>
				<a class="btn btn-warning" data-toggle="modal" href='#modal-id'><i class="fas fa-edit"></i></a>
				<div class="modal fade" id="modal-id">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								
								<h4 class="modal-title">Chỉnh Sửa</h4>
							</div>
							<div class="modal-body">
								<form action="" method="POST" role="form" enctype="multipart/form-data">
									
								
									<div class="form-group">
										<label for="">name</label>
										<input type="text" class="form-control" name="name" value="{{$model->name}}">
									</div>

									<div class="form-group">
										<label for="">ảnh</label>
										<input type="file" class="form-control" name="upload_image" value="{{$model->img}}">
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
			</td>
			<td>
				<a href="{{route('images_cs1_delete',['id'=>$imgcs1['id']])}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop()