
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    @include('sections.head')

    <!-- Document Title
    ============================================= -->
    <title>Joshua Foxworth for US Congress - Texas 14</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('sections.landing.slider')

        @include('sections.header')

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="">

                @include('sections.landing.issueSummary')

                @include('sections.landing.profile')

                @include('sections.landing.afirstbreak')

                @include('sections.issues.issueportfolio')

                @include('sections.landing.countdown')

                @include('sections.landing.donaterow')

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