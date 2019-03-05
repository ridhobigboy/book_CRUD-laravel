@extends('layouts.app')
@section('conten')

    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h3>List Bookstore</h3>
        </div>
        <div class="col-sm-2">
          <a class="btn btn-sm btn-success" href="{{ route('bookstore.create') }}">Create New data</a>
        </div>
      </div>

      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif

      <table class="table table-hover table-sm">
        <tr>
          <th width = "50px"><b>No.</b></th>
          <th width = "300px">judul Buku</th>
          <th>pengarang Buku</th>
          <th width = "180px">tahunterbit Buku</th>
        </tr>

        @foreach($bookstores as $bookstore)
          <tr>
            <td><b>{{++$i}}.</b></td>
            <td>{{$bookstore->judulBuku}}</td>
            <td>{{$bookstore->pengarangBuku}}</td>
            <td>{{$bookstore->tahunterbitBuku}}</td>
            <td>
              <form action="{{ route('bookstore.destroy', $bookstore->id ) }}" method="post">
                <a class="btn btn-sm btn-success" href="{{ route(bookstore.Show), $bookstore->id}}">Show</a>
                <a class="btn btn-sm btn-warning" href="{{ route(bookstore.edit), $bookstore->id}}">edit</a>
                @csrf
                @method('DELET')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
  {!! $bookstores->link() !!}
    </div>
@endsection
