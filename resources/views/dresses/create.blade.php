@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mt-4 mb-4">Inserisci un nuovo prodotto</h1>
        <form method="POST" action="{{ route('dresses.store')}}">
          @csrf
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Colore</label>
            <input type="text" name="color" class="form-control">
          </div>
          <div class="form-group">
            <label>Tessuto</label>
            <input type="text" name="fabric" class="form-control">
          </div>
          <div class="form-group">
            <label>Taglia</label>
            <select class="form-control" name="size">
              <option value="">--seleziona--</option>
              <option value="xs">XS</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Prezzo</label>
            <input type="number" name="price" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


      </div>
    </div>
  </div>
@endsection
