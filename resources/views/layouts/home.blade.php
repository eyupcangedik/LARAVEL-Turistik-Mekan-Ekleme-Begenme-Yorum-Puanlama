<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Turistik Mekan">
    <meta name="author" content="Eyüp Can Gedik">
    <meta name="keywords" content="Gezi, Turizm">
  

    <title>@yield('title')</title>

    <!-- font-awesome -->
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 7]>
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <![endif]-->

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">

    <!-- custom CSS -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <!--[if lte IE 8]>
    <link href="css/ie8.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 7]>
    <link href="css/ie7.css" rel="stylesheet">
    <![endif]-->

    <!-- JavaScript -->
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/plugins.js"></script>
    <!--[if lte IE 7]>
    <script type="text/javascript" src="js/boxsizing/jquery.boxsizing.js"></script> 
    <![endif]-->
    <script type="text/javascript" src="{{asset('assets')}}/js/banzhow.js"></script>

</head>

<body>

@yield('header')

@yield('slider')

@yield('content')

@yield('footer')



</body>   
</html>