@extends('products.layout')
  
@section('content')
<div class="row-lg-8">
    <div class="col-lg-12 mt-5">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<div class="full-screen-container">
      <div class="login-container">
        <h3 class="login-title">Create</h3>
        <form action="{{ route('products.store') }}" method="POST">
    @csrf
          <div class="input-group">
            <label>Name</label>
            <input type="text" name="name"   />
          </div>
          <div class="input-group">
            <label>Detail</label>
            <input type="text" name="detail" />
          </div>
          <button type="submit" class="login-button">Submit</button>
        </form>
      </div>
    </div>
@endsection