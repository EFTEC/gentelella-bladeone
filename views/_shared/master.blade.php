<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include("_shared.head")
    @section('css')
    @show()
    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include("_shared.leftmenu")
        @include("_shared.header")
        <!-- page content -->
        @section('content')
        @show
        @include("_shared.footer")
    </div>
</div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
@section("js")
@show()
<!-- Custom Theme Scripts -->
<script src="js/custom.js"></script>

<!-- google analytics, please remove it -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-99820696-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- google analytics, please remove it -->


</body>
</html>
