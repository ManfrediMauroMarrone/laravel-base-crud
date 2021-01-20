@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Dettagli vestito con id = {{ $dress->id }}</h1>
        <ul>
          <li>Nome: {{ $dress->name}}</li>
          <li>Colore: {{ $dress->color}}</li>
          <li>Tessuto: {{ $dress->fabric}}</li>
          <li>Taglia: {{ $dress->size}}</li>
          <li>Prezzo: {{ $dress->price}}</li>

        </ul>

      </div>
    </div>
  </div>
@endsection
