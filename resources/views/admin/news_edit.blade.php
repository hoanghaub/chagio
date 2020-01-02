@extends('admin')
@section('title','News')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>img</th>
				<th>title</th>
				<th>day</th>
				<th>content</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($news as $new)
			<tr>
				<td>{{$new['id']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$new['img']}}" alt="" width="50px">
				</td>
				<td>{{$new['title']}}</td>
				<td>{{$new['day']}}</td>
				<td>{{$new['content']}}</td>
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
											<label for="">img</label>
											<input type="file" class="form-control" name="upload_image" placeholder="Input field">
										</div>
										<div class="form-group">
											<label for="">title</label>
											<input type="text" class="form-control" name="title" value="{{$model->title}}">
										</div>
										<div class="form-group">
											<label for="">day</label>
											<input type="text" class="form-control" name="day" value="{{$model->day}}">
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
					<a href="{{route('news_delete',['id'=>$new['id']])}}" class="btn btn-danger" title=""><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection