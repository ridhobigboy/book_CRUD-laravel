@extends('layouts.app')
@section('conten')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Bookstore</h3>
      </div>
    </div>

    @if($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong>there something problem with your input.<br>
        <ul>
          @foreach($errors as $error)
              <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('bookstore.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>judul Buku :</strong>
          <input type="text" name="judulBuku" class="form-control" placeholder="judul Buku">
        </div>
        <div class="col-md-12">
          <strong>pengarang Buku :</strong>
          <textarea class="form-control" placeholder="judul Buku" name="pengarangBuku" rows="8" cols="80"></textarea>
        </div>
        <div class="col-md-12">
          <a href="{{router('Bookstore.index')}}" class="btn btn-sm btn-succes">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">submit</button>
        </div>
      </div>
    </form>



  </div>
@endsection
