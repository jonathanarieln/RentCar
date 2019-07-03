@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Cars</h1>
    <div class="col-sm-12">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Model</td>
          <td>Color</td>
          <td>Year</td>
          <td>Doors</td>
          <td>Polarized</td>
          <td>Armored</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{$car->model}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->year}}</td>
            <td>{{$car->doors}}</td>
            <td>{{$car->polarized}}</td>
            <td>{{$car->armored}}</td>
            <td>
                <a href="{{ route('cars.edit',$car->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
  </table>
  <div>
  <a style="margin: 19px;" href="{{ route('cars.create')}}" class="btn btn-primary">New car</a>
  </div>
<div>
  <a href="https://www.techiediaries.com/php-laravel-crud-mysql-tutorial/">Tutorial Original</a>
</div>
@endsection
