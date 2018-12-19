@extends('layouts.master-admin')

@section('title', 'Edit News Admin')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Edit News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                        <div class="card">
                                                <div class="card-header">Edit News</div>
                            
                                                <div class="card-body">
                                                    <form class="" action="{{ route('news.update',$news->id) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PATCH') }}
                                                            <div class="form-group">
                                                                <label for="">News Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="News Name" value="{{$news->name}}">
                                                            </div>
                                            
                                                            <div class="form-group">
                                                                <label for="">Description</label>
                                                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="content">{{$news->description}}</textarea>
                                                            </div>
                                                
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-primary" value="Save">
                                                            </div>
                                                        </form>
                                                </div>
                                        </div>

                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@endsection