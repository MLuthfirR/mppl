@extends('layouts.master-admin')

@section('title', 'Feedback Admin')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Feedback</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12 .col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Feedback
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><label>From :</label> Nama pemberi feedback <br></h4>
                                <a class="form-control">(Isi feedback) Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a><br>
                                <div class="form-group">
                                    <label>Answer :</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Send to :</label>
                                    <input class="form-control" placeholder="E-mail si pemberi feedback" name="email" type="email" autofocus>
                                </div>
                                <a href="index.html" class="btn btn-success">Send</a>
                            </div>                            
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@endsection