@extends('layout')
@section('content')
<div class="container">
    <div class="col-md-6">
    {!! Form::open(['routes' => 'home.store', 'files'=>true ]) !!}
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          @include('errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="area">Area</label>
              <input type="text" name="area" class="form-control" value="{{old('area')}}">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" name="city" class="form-control" value="{{old('city')}}">
            </div>
            <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" name="brand" class="form-control">
            </div>
            <div class="form-group">
              <label for="model">Model</label>
              <input type="text" name="model" class="form-control">
            </div>
            <div class="form-group">
              <label for="volume">Volume</label>
              <input type="number" name="volume" class="form-control">
            </div>
            <div class="form-group">
              <label for="mileage">Mileage</label>
              <input type="number" name="mileage" class="form-control">
            </div>
            <div class="form-group">
              <label for="owners">Owners</label>
              <input type="number" name="owners" class="form-control">
            </div>
            <div class="form-group">
              <label for="year">Year</label>
              <input type="number" name="year" class="form-control">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" name="price" class="form-control">
            </div>
            
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image">
            </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <a href="/" class="btn btn-default">Назад</a>
          <button class="btn btn-success pull-right">Добавить</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    {!! Form::close() !!}
    </div>
</div>
@endsection