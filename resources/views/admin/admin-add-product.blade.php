@extends('layouts.master-admin')

@section('title', 'Add Product Admin')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Add Product</h1>
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                                <option>Cat</option>
                                                <option>Thinner</option>
                                                <option>Tinta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Stock</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
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