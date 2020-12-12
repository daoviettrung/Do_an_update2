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
                        <form action="profile/edit_profile/{{$user->id}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div>
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder={{$user->name}} name="name" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Gender</label>
                                <input type="text" class="form-control" placeholder={{$user->gender}} name="gender" aria-describedby="basic-addon1">
                            </div>
                            <br>
                           <!-- <div>
                                <input type="checkbox" class="" name="checkpassword">
                                <label>Change Password</label>
                                <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Enter the password
                                </label>
                                <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                            </div>-->
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
