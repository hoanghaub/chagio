@extends('admin')
@section('title','Menu')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>img</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($menu as $mn)
			<tr>
				<td>{{$mn['id']}}</td>
				<td>{{$mn['title']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$mn['img']}}" alt="" width="50px">
				</td>
				<td>
					
					<a class="btn btn-warning" data-toggle="modal" href='#modal-id'><i class="fas fa-edit"></i></a>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit</h4>
								</div>
								<div class="modal-body">
									<form action="" method="POST" role="form" enctype="multipart/form-data">
										<div class="form-group">
											<label for="">Title</label>
											<input type="text" class="form-control" name="title" value="{{$model->title}}">
										</div>
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
					<a href="{{route('menu_delete',['id'=>$mn['id']])}}" class="btn btn-danger" title=""><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection