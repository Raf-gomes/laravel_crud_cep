@extends('app')

@section('content')
        <h1 class="mb-5">Buscar CEP</h1>
        <form action="{{route('buscar')}}" method="GET">
            <div class="form-group">
              <label class="mb-2">CEP</label>
              <input type="text" class="form-control" name="cep">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </form>
@endsection