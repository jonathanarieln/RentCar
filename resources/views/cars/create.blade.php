@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a car</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cars.store') }}">
          @csrf
          <div class="form-group">
              <label for="model">Model:</label>
              <input type="text" class="form-control" name="model"/>
          </div>

          <div class="form-group">
              <label for="color">Color:</label>
              <input type="text" class="form-control" name="color"/>
          </div>

          <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" class="form-control" name="year"/>
          </div>
          <div class="form-group">
              <label for="doors">Doors:</label>
              <input type="text" class="form-control" name="doors"/>
          </div>
          <div class="form-group">
              <label for="polarized">Polarized:</label>
              <input type="text" class="form-control" name="polarized"/>
          </div>
          <div class="form-group">
              <label for="armored">Armored:</label>
              <input type="text" class="form-control" name="armored"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add car</button>
      </form>
  </div>
</div>
</div>
@endsection
