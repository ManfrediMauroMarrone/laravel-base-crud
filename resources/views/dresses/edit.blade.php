@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mt-4 mb-4">Modifica un prodotto</h1>
        <form method="POST" action="{{ route('dresses.update', ['dress' => $dress->id]) }}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" value="{{ $dress->name }}">
          </div>
          <div class="form-group">
            <label>Colore</label>
            <input type="text" name="color" class="form-control" value="{{ $dress->color }}">
          </div>
          <div class="form-group">
            <label>Tessuto</label>
            <input type="text" name="fabric" class="form-control" value="{{ $dress->fabric }}">
          </div>
          <div class="form-group">
            <label>Taglia</label>
            <select class="form-control" name="size">
              <option value="XS" {{ $dress->size == 'XS' ? 'selected=selected' : "" }}>XS</option>
              <option value="S" {{ $dress->size == 'S' ? 'selected=selected' : "" }}>S</option>
              <option value="M" {{ $dress->size == 'M' ? 'selected=selected' : "" }}>M</option>
              <option value="L" {{ $dress->size == 'L' ? 'selected=selected' : "" }}>L</option>
              <option value="XL" {{ $dress->size == 'XL' ? 'selected=selected' : "" }}>XL</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Prezzo</label>
            <input type="number" name="price" class="form-control" value="{{ $dress->price }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


      </div>
    </div>
  </div>
@endsection
