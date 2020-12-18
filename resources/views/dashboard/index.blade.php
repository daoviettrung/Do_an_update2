<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BTEC FPT forum</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />
    <link href="assets_dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_dashboard/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets_dashboard/css/timeline.css" rel="stylesheet">
    <link href="assets_dashboard/css/startmin.css" rel="stylesheet">
    <link href="assets_dashboard/css/morris.css" rel="stylesheet">
    <link href="assets_dashboard/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets_dashboard/css/style.css" rel="stylesheet">
</head>
<body>
@include('dashboard.layouts.nav-top')<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') | Dashboard</title>
    <base href="{{asset('')}}">
    @yield('style')
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('dashboard.layouts.nav-logo')
        @include('dashboard.layouts.nav-top')
        @if(Auth::user()->level==0)
            @include('dashboard.layouts.nav-left-member')
        @endif
        @if(Auth::user()->level==1)
            @include('dashboard.layouts.nav-left-mod')
        @endif
        @if(Auth::user()->level==2)
            @include('dashboard.layouts.nav-left-admin')
        @endif
    </nav>
    @yield('content')
</div>
@yield('js')
</body>
</html>
