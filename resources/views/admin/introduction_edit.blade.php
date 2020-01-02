@extends('admin')
@section('title','Introduction')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>content</th>
				<th>img</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($introduction as $intro)
			<tr>
				<td>{{$intro['id']}}</td>
				<td>{{$intro['title']}}</td>
				<td>{{$intro['content']}}</td>
				<td>
					<img src="{{url('public/image')}}/{{$intro['img']}}" alt="" width="50px">
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
											<label for="">title</label>
											<input type="text" class="form-control" name="title" value="{{$model->title}}">
										</div>
                                        <label for="">Content</label>
                                        <textarea name="content"></textarea>
										<div class="form-group">
											<label for="">img</label>
											<input type="file" class="form-control" name="upload_image" >
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
					<a href="{{route('introduction_delete',['id'=>$intro['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection