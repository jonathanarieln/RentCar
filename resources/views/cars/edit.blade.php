@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a car</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('cars.update', $car->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="model">Model:</label>
                <input type="text" class="form-control" name="model" value={{ $car->model }} />
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" name="color" value={{ $car->color }} />
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year" value={{ $car->year}} />
            </div>
            <div class="form-group">
                <label for="doors">Doors:</label>
                <input type="text" class="form-control" name="doors" value={{ $car->doors }} />
            </div>
            <div class="form-group">
                <label for="polarized">Polarized:</label>
                <input type="text" class="form-control" name="polarized" value={{ $car->polarized }} />
            </div>
            <div class="form-group">
                <label for="armored">armored:</label>
                <input type="text" class="form-control" name="armored" value={{ $car->armored }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
