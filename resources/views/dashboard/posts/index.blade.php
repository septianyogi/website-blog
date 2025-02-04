@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My posts</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive small">
    <a href="/dashboard/store/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-danger"><i class="bi bi-trash3"></i></a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>


@endsection