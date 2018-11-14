@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">POST {{$post->title}}
                        <div class="pull-right">
                            <form action="{{ route('post.destroy',$post->id) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                    {{$post->content}}
                    </div>
                </div></br>
            @endforeach
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($products as $product)
                <div class="card">
                    <div class="card-header">PRODUCT {{$product->name}}
                        <div class="pull-right">
                            <form action="{{ route('product.destroy',$product->id) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                    {{$product->description}}
                    </div>
                <p>stock : {{$product->stock}}</p>
                </div></br>
            @endforeach
        </div>
    </div>

</div>
@endsection