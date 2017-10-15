
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

        var revapi2;
        jQuery(document).ready(function() {
            revapi2 = jQuery("#rev_slider").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                delay: 4000,
                navigation: {
                    arrows: {
                        enable: true
                    }
                },
                gridwidth: 1440,
                gridheight:900
            });
        }); /*ready*/
    </script>
    <script>

        var revapi3;
        jQuery(document).ready(function() {
            revapi3 = jQuery("#construction").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                delay: 4000,
                gridwidth: 1440,
                gridheight:900,
                disableProgressBar: "on",
            });
        }); /*ready*/
    </script>
    <script>

        var revapi4;
        jQuery(document).ready(function() {
            revapi4 = jQuery("#plumbing").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                delay: 4500,
                gridwidth: 1440,
                gridheight:900,
                disableProgressBar: "on",
            });
        }); /*ready*/
    </script>
    <script>

        var revapi5;
        jQuery(document).ready(function() {
            revapi5 = jQuery("#furniture").revolution({
                sliderType: "standard",
                sliderLayout: "auto",
                delay: 5000,
                gridwidth: 1440,
                gridheight:900,
                disableProgressBar: "on",
            });
        }); /*ready*/
    </script>
  
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

   <script>
        function google_maps_58feedaf52c82() {
            var latlng = new google.maps.LatLng(-1.236113, 36.672730);
            var draggable = true;
            var myOptions = {
                zoom: 15,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    featureType: "all",
                    elementType: "labels",
                    stylers: [{
                        visibility: "on"
                }]
               }, {
                    featureType: "administrative",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                }]
               }, {
                    featureType: "landscape",
                    elementType: "all",
                    stylers: [{
                        color: "#000000"
                }, {
                        visibility: "simplified"
                }]
               }, {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                }]
               }, {
                    featureType: "road",
                    elementType: "all",
                    stylers: [{
                        visibility: "on"
                }]
               }, {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                }, {
                        lightness: "30"
                }, {
                        saturation: "-10"
                }]
               }, {
                    featureType: "road",
                    elementType: "labels.text",
                    stylers: [{
                        visibility: "on"
                }]
               }, {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#000000"
                }, {
                        lightness: "80"
                }]
               }, {
                    featureType: "road",
                    elementType: "labels.text.stroke",
                    stylers: [{
                        color: "#000000"
                }, {
                        lightness: "0"
                }]
               }, {
                    featureType: "road",
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                }]
               }, {
                    featureType: "transit",
                    elementType: "all",
                    stylers: [{
                        visibility: "simplified"
                }, {
                        color: "#000000"
                }, {
                        lightness: "50"
                }]
               }, {
                    featureType: "transit.station",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                }]
               }, {
                    featureType: "water",
                    elementType: "all",
                    stylers: [{
                        color: "#000000"
                }, {
                        lightness: "-20"
                }]
               }],
                draggable: draggable,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-58feedaf52c82"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "images/home_productions_pin.png",
                map: map
            });
        }
        jQuery(document).ready(function ($) {
            google_maps_58feedaf52c82();
        });
    </script>
