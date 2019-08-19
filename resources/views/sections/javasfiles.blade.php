    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <script type="text/javascript" src="/js/plugins/jquery.countdown.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="/js/functions.js"></script>

    <script>
    $(function() {
        $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
    });
    </script>

    <script>
        jQuery(document).ready( function($){
            var t1 = new Date(2019, 3, 3);
            var t2 = new Date();
            var dif = t1.getTime() - t2.getTime();
            $('#countdownprimary').countdown({until: dif/1000, format: 'OWD'});
            console.log($('#countdownprimary').countdown());
        });

    </script>                
