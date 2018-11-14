@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-offset-2">

                <div class="card">
                        <div class="card-header">Edit post</div>
    
                        <div class="card-body">
                            <form class="" action="{{ route('post.update',$post->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group">
                                        <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title post" value="{{$post->title}}">
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id}}"> {{ $category->name }} </option> 
                                            @endforeach
                                        </select>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Content</label>
                                    <textarea name="content" id="" cols="30" rows="5" class="form-control" placeholder="content">{{$post->content}}</textarea>
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