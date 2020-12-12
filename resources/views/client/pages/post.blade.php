@extends('client.index')
@section('content')
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$postDt->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Ten nguoi dang</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">{{$postDt->content}}</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
@endsection
