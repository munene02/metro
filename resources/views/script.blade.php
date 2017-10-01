    <script src="{{ asset("/plugins/rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js") }}"></script>
  
    <script>
    var tpj = jQuery;
    var revapi1;
    tpj(document).ready(function() {
      if (tpj("#rev_slider_1_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_1_1");
      } else {
        revapi1 = tpj("#rev_slider_1_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
            },
            gridwidth: 1440,
            gridheight: 900,
            lazyType: "none",
            shadow: 0,
            spinner: "sipnner3",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: "off",
            }
        });
      }
    });

   </script>
