@extends('dashboard.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Posts waiting for approval</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
                                    <tr>
                                        <th>Poster</th>
                                        <th>Title</th>
                                        <th>Date created</th>
                                    </tr>
                                    </thead>
                                    @foreach($post as $p)
                                        @if($p->status=="approve")
                                            <tbody>
                                            <tr class="odd gradeX">
                                                <td>Poster</td>//Đây là chỗ hiển thị tên người đăng ạ
                                                <td>{{$p->title}}<a href="dtPost/{{$p->slug}}">Read</a></td>
                                                <td>{{$p->created_at}}</td>
                                            </tr>


                                            </tbody>
                                        @endif

                                    @endforeach
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <!-- /.table-responsive -->
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
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_assets/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_assets/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="admin_assets/js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_assets/js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection
