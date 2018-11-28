@extends('layouts.app')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form class="" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name">
            </div>

            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control" name="stock">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="content"></textarea>
            </div>

            <div class="form-group">
                <label for="author">Image</label>
                <input type="file" class="form-control" name="image"/>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection