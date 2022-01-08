<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Eyüp Can Gedik">
    <meta name="keywords" content="@yield('keywords')">
  

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

    <script type="text/javascript" src="js/banzhow.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">

    
      var myLatlng;
      var map;
      var marker;

      function initialize() {
        myLatlng = new google.maps.LatLng(41.213486,32.655090);

        var mapOptions = {
          zoom: 13,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
          draggable: false
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var contentString = '<p style="line-height: 20px;"><strong>Banzhow Template</strong></p><p>123 My Street, Banzhow City, CA 4567</p>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Marker'
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
</script>
  
</head>

<body>

@yield('header')

@yield('slider')

@yield('content')

@yield('footerjs')

@yield('footer')



</body>   
</html>