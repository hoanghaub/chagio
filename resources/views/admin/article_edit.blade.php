@extends('admin')
@section('title','Bài Viết')
@section('main')

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fas fa-plus-square"></i></a>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach($article as $at)
			<tr>
				<td>{{$at['id']}}</td>
				<td>{{$at['name']}}</td>
				<td>
					<a class="btn btn-warning" data-toggle="modal" href='#modal-id'><i class="fas fa-edit"></i></a>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Chỉnh Sửa</h4>
								</div>
								<div class="modal-body">
									<form action="" method="POST" role="form">
										<div class="form-group">
											<label for="">name</label>
											<input type="text" class="form-control" name="name" value="{{$model->name}}">
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
					<a href="{{route('article_delete',['id'=>$at['id']])}}" title="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()