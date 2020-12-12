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
                        <form>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div>
                                <label>Name</label>
                                <p class="form-control" placeholder={{$accountLogin->name}} name="name" aria-describedby="basic-addon1">{{$accountLogin->name}}</p>
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <p class="form-control" placeholder={{$accountLogin->email}} name="email" aria-describedby="basic-addon1">{{$accountLogin->email}}</p>
                            </div>
                            <br>
                            <div>
                                <label>Gender</label>
                                <p class="form-control" placeholder={{$accountLogin->gender}} name="gender" aria-describedby="basic-addon1">{{$accountLogin->gender}}</p>
                            </div>
                            <br>
                            <br>
                        </form>
                        <button  class="btn btn-default"><a href="profile/EditProfile/{{$accountLogin->id}}">Edit profile</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
@endsection
