@extends('dashboard.index')

@section('title', 'List Post')

@section('style')
    <!-- DataTables CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css"
          href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

    <!-- DataTables -->
    <!-- Bootstrap Core CSS -->
    <link href="assets_dashboard/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets_dashboard/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="assets_dashboard/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets_dashboard/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets_dashboard/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets_dashboard/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade" id="myPost">
                                </div>
                                <div class="tab-pane fade in active" id="postOnTopic">
                                    <br>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form class="form-inline" role="form" method="post"
                                                  action="admin/ManagePost/filter">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Select Topic</label>
                                                    <select class="form-control" id="topic_id" name="topic"
                                                            onchange="getCategory();">
                                                        @foreach($topic as $t)
                                                            <option value="{{$t->id}}">{{$t->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Select Category</label>
                                                    <select class="form-control" id="category_id" name="category">

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Select poster</label>
                                                    <select class="form-control" id="poster_id" name="poster">
                                                        <option value="null">      </option>
                                                        @foreach($user as $u)
                                                            <option value="{{$u->id}}">{{$u->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table id="table1">
                                                    <thead>
                                                    <tr>
                                                        <th>Poster</th>
                                                        <th>Category</th>
                                                        <th>Title</th>
                                                        <th>View detail</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($post as $p)
                                                        <tr>
                                                            <td>{{$p->author->name}}</td>
                                                            <td>{{$p->category->name}}</td>
                                                            <td>{{$p->title}}</td>
                                                            <td>
                                                                <a href="admin/ManagePost/ViewPost/{{$p->id}}">
                                                                    <button type="button"
                                                                            class="btn btn-success btn-circle">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection

@section('js')
    <!-- jQuery -->
    <script src="assets_dashboard/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets_dashboard/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets_dashboard/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="assets_dashboard/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="assets_dashboard/js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets_dashboard/js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function () {
            getCategory();
            $('#table1').DataTable();
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getCategory() {
            var topic_id = $("#topic_id").val();
            $.ajax({
                type: "get",
                url: "admin/ManagePost/getCategory/" + topic_id,
                success: function (res) {
                    $("#category_id").html(res);
                }
            });
        }
    </script>

@endsection
