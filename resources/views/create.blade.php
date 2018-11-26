@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar articulo
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nombre:</label>
              <input type="text" class="form-control" name="share_name"/>
          </div>
          <div class="form-group">
              <label for="price">Precio:</label>
              <input type="text" class="form-control" name="share_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Cantidad:</label>
              <input type="text" class="form-control" name="share_qty"/>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
  </div>
</div>
@endsection