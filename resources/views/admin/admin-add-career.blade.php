@extends('layouts.master-admin')

@section('title', 'Add Career Admin')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Add Career</h1>
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

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                
                                                <form class="" action="{{ route('career.store') }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="">Career Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Career Name">
                                                    </div>
                                        
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="content"></textarea>
                                                    </div>
                                        
                                                    <div class="form-group">
                                                        <label for="">Qualification</label>
                                                        <textarea name="qualification" id="" cols="30" rows="5" class="form-control" placeholder="qualification"></textarea>
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