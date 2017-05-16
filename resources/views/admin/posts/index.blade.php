@extends('layouts.admin')

@section('content')
	<h1>Post</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Post ID</th>
				<th>Photo</th>
				<th>Owner</th>
				<th>Cateogry</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created</th>
				<th>Updated</th>
			</tr>
		</thead>
		<tbody>
			@if($posts)
				@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
				<td>{{$post->user->name}}</td>
				<td>{{$post->category->name}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->body}}</td>
				<td>{{$post->created_at}}</td>
				<td>{{$post->updated_at}}</td>
				
			</tr>
				@endforeach
			@endif
		</tbody>
	</table>
@stop