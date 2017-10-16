(function($){
	$(".map").gMap({
      maptype: 'ROADMAP',
      scrollwheel: false,
      zoom: 16,
      //latitude: -1.235445,
      //longitude: 36.671668,-1.236335, 36.672803
      markers: [
      {
      latitude: -1.236496,
      longitude: 36.672953,
      html: "Marimo Constrution Ltd"
      }
      ],
      controls: {
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false
      }
    });
 })(window.jQuery);