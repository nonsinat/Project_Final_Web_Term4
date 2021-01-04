@extends('adminlte::page')

@section('title', 'Create product')

@section('content_header')
    <h1>Create Products</h1>
@stop

@section('content')
    <p>Form Create Products</p>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    
    @endif
    <form action="{{route('products.store')}}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="pname">Product Name </label>
          <input type="text" class="form-control" id="pname" placeholder="Product name" name="name">
        </div>

        <div class="form-group">
            <label for="pamount">Product amount </label>
            <input type="text" class="form-control" id="pamount" placeholder="Product amount" name="amount">
        </div>

        <div class="form-group">
            <label for="pname">Product price </label>
            <input type="text" class="form-control" id="pprice" placeholder="Products price" name="price">
        </div>

        <div class="form-group">
            <label for="pimg">Product img </label>
            <input type="file" class="form-control" id="pimg" placeholder="Products img" name="img_url">
        </div>

        <div class="form-group">
            <label for="pdes">Product description </label>
            <input type="textarea" class="form-control" id="pdes" placeholder="Products description" name="description">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop