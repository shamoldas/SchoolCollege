@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<table class="table table-striped">
<thead>
<th>ID</th>
<th>Title</th>
<th>Action</th>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>{{ $post->id }}</td>
<td>{{ $post->title }}</td>
<td>
<a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show Post</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

	<ul class="pagination">
		
		<li class="page-item"><a class="page-link" href="{{$posts->previouspageUrl()}}">Previous</a></li>
		<li class="page-item"><a class="page-link" href="{{$posts->nextpageUrl()}}">Next</a></li>
	</ul>

</div>
@endsection