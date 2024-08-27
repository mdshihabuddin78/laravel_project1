
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword"
              content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
        <link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
              rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="{{asset('backend/css/ie.css')}}" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
        <link id="ie9style" href="{{asset('backend/css/ie9.css')}}" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- end: Favicon -->
        @yield('header')


    </head>

    <body>


    @include('backend.layouts.topbar')

    @include('backend.layouts.sidebar')

        @yield('dashboard_content')

    <!-- start: JavaScript-->

    <script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('backend/js/modernizr.js')}}"></script>

    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.cookie.js')}}"></script>

    <script src='{{asset('backend/js/fullcalendar.min.js')}}'></script>

    <script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>

    <script src="{{asset('backend/js/excanvas.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.noty.js')}}"></script>

    <script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>

    <script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>

    <script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>

    <script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>

    <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

    <script src="{{asset('backend/js/counter.js')}}"></script>

    <script src="{{asset('backend/js/retina.js')}}"></script>

    <script src="{{asset('backend/js/custom.js')}}"></script>

    <script src="{{asset('backend/js/vue/support.js')}}"></script>
    <script>window.baseUrl = '{{url('/')}}'</script>
    <!-- end: JavaScript-->
    @yield('script')

    </body>
    </html>