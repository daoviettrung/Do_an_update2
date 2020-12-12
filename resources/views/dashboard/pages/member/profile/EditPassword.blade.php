@extends('dashboard.index')
@section('content')
    <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Information user</div>
                    <div class="panel-body">
                        <form action="profile/postEditPassword/{{$accountLogin->id}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                             <div>
                                 <label>Change Password</label>
                                 <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                             </div>
                             <br>
                             <div>
                                 <label>Enter the password
                                 </label>
                                 <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                             </div>
                            <br>
                            <button type="submit" class="btn btn-default">Edit
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
@endsection
