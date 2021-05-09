@extends('products.layout')

@section('content')
<div class="row-col-5 mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
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

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="full-screen-container">
      <div class="login-container">
        <h3 class="login-title">Update Product</h3>
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ $product->name }}" />
            </div>

        
        <div class="input-group">
            <label>Detail</label>
            <input type="text" name="detail" ></input>
            <button type="submit" class="login-button">Update Now</button>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
          </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail"
                    placeholder="Detail">{{ $product->detail }}</textarea>
            </div> -->
        </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            
        </div> -->
    </div>

</form>
@endsection