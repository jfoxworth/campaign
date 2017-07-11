
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

        @include('sections.header')

        @include('sections.landing.slider')

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                @include('sections.landing.equality')

                @include('sections.landing.issuesbreak')

                @include('sections.landing.issues')

                @include('sections.landing.afirstbreak')


                <div class="promo topmargin-lg promo-border bottommargin-lg promo-full">
                    <div class="container clearfix">
                        <div class="col_one_third center nobottommargin">
                            <h3>The primary is March 6, 2018</h3>
                        </div>
                        <div class="col_two_third col_last center nobottommargin">
                            <div id="countdownprimary"></div>
                        </div>
                    </div>
                </div>

                <a class="button button-full center tright footer-stick">
                    <div class="container clearfix">
                        Support the campaign to restore our nation <strong>Donate</strong> <i class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>

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