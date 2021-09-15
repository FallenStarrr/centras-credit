<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <base href="/" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css"/>
    <!-- / -->

    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="one-page/css/et-line.css" type="text/css"/>

    <link rel="stylesheet" href="css/custom.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/colors.php?color=222E2B" type="text/css"/>

    <!-- Beauty Demo Specific Stylesheet -->
    <link rel="stylesheet" href="demos/beauty-kit/beauty-kit.css" type="text/css"/>
    <link rel="stylesheet" href="demos/beauty-kit/css/fonts.css" type="text/css"/>
    <link rel="stylesheet" href="demos/spa/css/fonts/spa-icons.css" type="text/css"/>

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Document Title
    ============================================= -->
    <title></title>

</head>

<body class="stretched side-header">

    <!-- Document Wrapper
    ============================================= -->

    @yield('content')


    <!-- Go To Top
    ============================================= -->
<div id="gotoTop" class="icon-angle-up rounded-circle bg-color3"></div>

<!-- External JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<script src="js/components/event.move.js"></script>
<script src="js/components/image-changer.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

<script>

    jQuery(window).on('load', function () {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
    });
</script>

</body>
</html>
