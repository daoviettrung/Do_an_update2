<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Khoa Phạm</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="client_assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="client_assets/css/shop-homepage.css" rel="stylesheet">
    <link href="client_assets/css/my.css" rel="stylesheet">
</head>

<body>


<div id="wrapper">

    <!-- Navigation -->
@include('client.layouts.header')


<!-- Page Content -->
@yield('content')
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="client_assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="client_assets/client_asset/js/bootstrap.min.js"></script>
<script src="client_assets/js/my.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>
