@extends('main')

@section('title', ' | Dodaj' )

@section('content')



<div class="card border-primary">
  <div class="card-header text-primary">Artykuł</div>
  <br>
  <div class="card-body text-primary">


<form action="{{route('hC.save')}}" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nazwa</label>
    <input type="text" name="nazwa" class="form-control" id="nazwa1" aria-describedby="emailHelp" placeholder="Nazwa towaru">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Opis</label>
    <textarea name="opis" class="form-control" id="opis1" placeholder="Opis towaru..."></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Dodaj</button>
</form>


  </div>
</div>

@endsection