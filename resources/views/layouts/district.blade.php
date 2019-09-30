
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    @include('sections.head')

    <!-- Document Title
    ============================================= -->
    <title>Congressional District 14 in Texas</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('sections.secondheader')

        @include('sections.district.title')

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap center">

            @include('sections.district.text')

            @include('sections.district.map')

            </div>

        </section><!-- #content end -->

        @include('sections.footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    @include('sections.javasfiles')

</body>
</html>