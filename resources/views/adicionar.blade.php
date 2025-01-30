@extends('app')

@section('content')
        <h1 class="mb-5">Adicionar CEP</h1>
        <form action="{{route('salvar')}}" method="POST">
          @csrf
            <div class="form-group">
              <label class="mb-2">CEP</label>
              <input type="text" class="form-control" name="cep" value="{{$cep}}">
            </div>
            <div class="form-group">
              <label class="mb-2">Logradouro</label>
              <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
            </div>
            <div class="form-group">
              <label class="mb-2">Número</label>
              <input type="text" class="form-control" name="numero">
            </div>
            <div class="form-group">
              <label class="mb-2">Bairro</label>
              <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
            </div>
            <div class="form-group">
              <label class="mb-2">Cidade</label>
              <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
            </div>
            <div class="form-group">
              <label class="mb-2">Estado</label>
              <input type="text" class="form-control" name="estado" value="{{$estado}}">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Salvar</button>
        </form>
@endsection