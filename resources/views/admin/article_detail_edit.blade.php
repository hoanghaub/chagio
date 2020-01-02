@extends('admin')
@section('title','Chi tiết bài viết')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>day</th>
				<th>content</th>
				<th>img</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($article_detail as $ad)
			<tr>
				<td>{{$ad['id']}}</td>
				<td>{{$ad['name']}}</td>
				<td>{{$ad['day']}}</td>
				<td>{{$ad['content']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$ad['img']}}" alt="" width="50px">
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
											<label for="">day</label>
											<input type="date" class="form-control" name="day">
										</div>
										<label for="">Content</label>
										
									    <textarea name="content"></textarea>
										<div class="form-group">
											<label for="">img</label>
											<input type="file" class="form-control" name="upload_image">
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
					<a href="{{route('article_detail_delete',['id'=>$ad['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()