<script type='text/javascript' src='../../assets/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='../../assets/js/jquery/jquery-migrate.min.js'></script>
    <script>
        var ms_grabbing_curosr = '../../assets/plugins/masterslider/public/assets/css/common/grabbing.html',
            ms_grab_curosr = '../../assets/plugins/masterslider/public/assets/css/common/grab.html';
    </script>
    <script type='text/javascript' src='../../assets/plugins/superfish/js/superfish.js'></script>
    <script type='text/javascript' src='../../assets/js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='../../assets/plugins/dl-menu/modernizr.custom.js'></script>
    <script type='text/javascript' src='../../assets/plugins/dl-menu/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='../../assets/plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='../../assets/plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='../../assets/plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='../../assets/plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='../../assets/plugins/flexslider/jquery.flexslider.js'></script>
    <script type='text/javascript' src='../../assets/plugins/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='../../assets/js/plugins.js'></script>
    <script type='text/javascript' src='../../assets/plugins/masterslider/public/assets/js/masterslider.min.js'></script>
    <script type='text/javascript' src='../../assets/plugins/jquery.transit.min.js'></script>
    <script type='text/javascript' src='../../assets/plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>




    <script>
    (function ( $ ) {
        "use strict";

        $(function () {
            var masterslider_d1da = new MasterSlider();

            // slider controls
			masterslider_d1da.control('arrows'     ,{ autohide:true, overVideo:true  });
			masterslider_d1da.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom', space:6 , margin:25  });
            // slider setup
            masterslider_d1da.setup("slider_1", {
				width           : 1140,
				height          : 800,
				minHeight       : 0,
				space           : 0,
				start           : 1,
				grabCursor      : false,
				swipe           : true,
				mouse           : false,
				keyboard        : true,
				layout          : "fullwidth",
				wheel           : false,
				autoplay        : false,
                instantStartLayers:false,
				mobileBGVideo:false,
				loop            : true,
				shuffle         : false,
				preload         : 0,
				heightLimit     : true,
				autoHeight      : false,
				smoothHeight    : true,
				endPause        : false,
				overPause       : true,
				fillMode        : "fill",
				centerControls  : true,
				startOnAppear   : false,
				layersMode      : "center",
				autofillTarget  : "",
				hideLayers      : false,
				fullscreenMargin: 0,
				speed           : 20,
				dir             : "h",
				parallaxMode    : 'swipe',
				view            : "basic"
            });
            

            
            $("head").append( "<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />" );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
         });
        
    })(jQuery);
    </script> 