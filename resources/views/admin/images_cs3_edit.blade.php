@extends('admin')
@section('title','Ảnh cơ sở 3')
@section('main')

<br>
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
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
		@foreach($images_cs3 as $imgcs3)
			<tr>
				<td>{{$imgcs3['id']}}</td>
				<td>{{$imgcs3['name']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$imgcs3['img']}}" alt="" width="50px">
				</td>
				<td>
					
					<a class="btn btn-warning" data-toggle="modal" href='#modal-id'><i class="fas fa-edit"></i></a>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Chỉnh sửa</h4>
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
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td>
					<a href="{{route('images_cs3_delete',['id'=>$imgcs3['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()