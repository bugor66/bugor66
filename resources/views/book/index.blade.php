@extends('layouts.app')

@section('title', 'Laratest')

@section('content')

<h1>
    Books
</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">author</th>
      <th scope="col">created</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
    <tbody>
    @forelse($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->created_at }}</td>
            <td>
                <a href="">Delete</a> |
                <a href="">Edit</a>
            </td>
        </tr>
    @empty    
        <tr>
            <td>None</td>
        </tr>
    @endforelse
    </tbody>
</table>
<form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
    @include('book.includes.form')
</form>
@endsection