@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-offset-2">

                <div class="card">
                        <div class="card-header">Edit product</div>
    
                        <div class="card-body">
                            <form class="" action="{{ route('product.update',$product->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{$product->name}}">
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Stock</label>
                                    <input type="number" class="form-control" name="stock" value="{{$product->stock}}">
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Description</label>
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="content">{{$product->description}}</textarea>
                                    </div>
                        
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Save">
                                    </div>
                                </form>
                        </div>
                </div></br>
            </div>
        </div>
    </div>
@endsection