@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">Tutti i vestiti</h1>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">nome</th>
            <th scope="col">Colore</th>
            <th scope="col">Taglia</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($dresses as $dress)
            <tr>
              <td>
                {{ $dress->id}}
              </td>
              <td>
                {{ $dress->name }}
              </td>
              <td>
                {{ $dress->color }}

              </td>
              <td>
                {{ $dress->size }}

              </td>
              <td>
                € {{ $dress->price }}

              </td>
              <td>
                <a href="{{ route('dresses.show', ['dress' => $dress->id]) }}" class="btn btn-info">Dettagli</a>
                <a href="{{ route('dresses.edit', ['dress' => $dress->id]) }}" class="btn btn-warning">Modifica</a>
                <form class="d-inline-block" action="{{ route('dresses.destroy', ['dress' => $dress->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" name="button" class="btn btn-danger"> Cancella</button>

                </form>
              </td>
            </tr>

          @endforeach
        </tbody>
      </table>

      <a href="{{ route('dresses.create') }}" class="btn btn-primary">Inserisci nuovo vestito</a>

      </div>
    </div>
  </div>
@endsection
