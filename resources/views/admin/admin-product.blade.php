@extends('layouts.master-admin')

@section('title', 'Product Admin')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-success" href="admin-add-product" id="toggleNavColor">Add Product</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Stock</th>
                                        <th>Choose</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Catylax</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Cat</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>94</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>Trident</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Cat</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>Trident</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Cat</td>
                                        <td>Internet Explorer 5.5</td>
                                        <td>Win 95+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>Trident</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Cat</td>
                                        <td>Internet Explorer 6</td>
                                        <td>Win 98+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>Trident</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>Trident</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>AOL browser</td>
                                        <td>Win XP</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Firefox 1.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Firefox 1.5</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Firefox 2.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Firefox 3.0</td>
                                        <td>Win 2k+ / OSX.3+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Camino 1.0</td>
                                        <td>OSX.2+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-" />
                                        </span></td>
                                        <td>Thinner</td>
                                        <td>Camino 1.5</td>
                                        <td>OSX.3+</td>
                                        <td class="center">
                                            <a class="btn btn-primary" href="#" id="toggleNavColor">Edit</a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admin/vendor/raphael/raphael.min.js"></script>
    <script src="admin/vendor/morrisjs/morris.min.js"></script>
    <script src="admin/data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

@endsection