@extends('admin')
@section('title', 'Promotion Detail')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>day</th>
				<th>img</th>
				<th>content</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($promotion_detail as $pd)
			<tr>
				<td>{{$pd['id']}}</td>
				<td>{{$pd['name']}}</td>
				<td>{{$pd['day']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$pd['img']}}" alt="" width="50px">
				</td>
				<td>{{$pd['content']}}</td>
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
											<label for="">name</label>
											<input type="text" class="form-control" name="name" value="{{$model->name}}">
										</div>

										<div class="form-group">
											<label for="">day</label>
											<input type="text" class="form-control" name="day" value="{{$model->day}}">
										</div>

										<div class="form-group">
											<label for="">img</label>
											<input type="file" class="form-control" name="upload_image">
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
				</td>
				<td>
					<a href="{{route('promotion_detail_delete',['id'=>$pd['id']])}}" class="btn btn-danger" title=""><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection