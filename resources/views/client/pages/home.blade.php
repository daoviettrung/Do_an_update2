@extends('client.index')
@section('content')
    <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Menu
                    </li>

                    <li href="#" class="list-group-item menu1">
                        Level 1
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="loaitin.html">Level2</a>
                        </li>
                    </ul>


                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>

                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>


                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"> Home</h2>
                    </div>

                    <div class="panel-body">
                        <!-- item -->
                        @foreach($post as $p)
                            <div class="row-item row">
                                <h3>
                                    <a href="#">Title</a> |
                                    <small><a href="loaitin.html"><i>{{$p->title}}</i></a>/</small>
                                </h3>

                                <div class="col-md-9">

                                    <p></p>
                                    <a class="btn btn-primary" href="post/{{$p->slug}}">Read post <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>

                            </div>

                            <div class="break"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- end Page Content -->

    <!-- Footer -->

@endsection
