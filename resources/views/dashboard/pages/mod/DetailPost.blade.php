@extends('dashboard.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Content
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <h4></h4>
                                <p>{{$post->content}}</p>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <script src="admin_assets/js/jquery.min.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="admin_assets/js/bootstrap.min.js"></script>

                <!-- Metis Menu Plugin JavaScript -->
                <script src="admin_assets/js/metisMenu.min.js"></script>

                <!-- Custom Theme JavaScript -->
                <script src="admin_assets/js/startmin.js"></script>

@endsection
