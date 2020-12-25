    <!-- Footer -->
      <footer>
        <div class="container">
          <div class="content-center contentFooter">
            <p>© Copyright 2011–2018 <span class="colorLogoFirst">Simple</span> <span class="colorLogoSecond">moving</span>  |  All Rights Reserved</p>
          </div>
        </div>
      </footer>
    <!-- Footer -->

    <!-- Fixed header -->
    <script >
      $(window).scroll(function() {
      if ($(this).scrollTop() > 1){
      $('.navbarMain').addClass("sticky");
      }
      else{
      $('.navbarMain').removeClass("sticky");
      }
      });
      </script>

      <script > 
        $(document).ready(function(){
          $("#menu-main-menu").on("click","a", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
              top = $(id).offset().top;
            
            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 500);
          });
        });
      </script>
      <script > 
        $(document).ready(function(){
          $("#mouse").on("click","a", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
              top = $(id).offset().top;
            
            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 500);
          });
        });
      </script>
      <script >
        $('.primary-link a').on('click', function() {
            window.location = $( this ).attr('href');
        });
      </script>

      <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCkTTGPaEkHCPxiNH14iD6cJXXUfA0OeI&libraries=places&language=en"></script>
      <script>
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
           var place = autocomplete.getPlace();
        })
      </script>
      <script>
        var input = document.getElementById('autocomplete_to');
        var autocomplete_to = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
           var place = autocomplete.getPlace();
        })
      </script>
      <script>
        var input = document.getElementById('autocomplete_from_modal');
        var autocomplete_from_modal = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
           var place = autocomplete.getPlace();
        })
      </script>
      <script>
        var input = document.getElementById('autocomplete_to_modal');
        var autocomplete_to_modal = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
           var place = autocomplete.getPlace();
        })
      </script>

      <script>
        $(function(){
          $('#menu-main-menu').slicknav({
            label: '',
          });
        });
      </script>
       <script>
        $(function(){
          $('#menu-page-menu').slicknav({
            label: '',
          });
        });
      </script>
      <script >
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                alert("Submitted!");
            }
        });
      </script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
      </script>
      <script>
      $( function() {
        $( ".datepicker_1" ).datepicker();
      } );
      </script>
      <!-- <p>Date: <input type="text" id="datepicker"></p> -->

      <script >
      (function($) {
      function new_map( $el ) {
        // var
        var $markers = $el.find('.marker');
        // vars
        var args = {
          zoom    : 16,
          center    : new google.maps.LatLng(0, 0),
          mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        // create map           
        var map = new google.maps.Map( $el[0], args);
        // add a markers reference
        map.markers = [];
        // add markers
        $markers.each(function(){
            add_marker( $(this), map );
        });
        
        // center map
        center_map( map );
    
        // return
        return map;
        
      }

      /*
      *  add_marker
      *
      *  This function will add a marker to the selected Google Map
      *
      *  @type  function
      *  @date  8/11/2013
      *  @since 4.3.0
      *
      *  @param $marker (jQuery element)
      *  @param map (Google Map object)
      *  @return  n/a
      */

      function add_marker( $marker, map ) {

        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

        // create marker
        var marker = new google.maps.Marker({
          position  : latlng,
          map     : map,
          // Укажем свою иконку для маркера
                icon: '<?php bloginfo('template_url');?>/img/local.png',
                scaledSize: new google.maps.Size(74, 74)
        });

        // add to array
        map.markers.push( marker );

        // if marker contains HTML, add it to an infoWindow
        if( $marker.html() )
        {
          // create info window
          var infowindow = new google.maps.InfoWindow({
            content   : $marker.html()
          });

          // show info window when marker is clicked
          google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

          });
        }

      }

      /*
      *  center_map
      *
      *  This function will center the map, showing all markers attached to this map
      *
      *  @type  function
      *  @date  8/11/2013
      *  @since 4.3.0
      *
      *  @param map (Google Map object)
      *  @return  n/a
      */

      function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

          var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

          bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
          // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
          // fit to bounds
          map.fitBounds( bounds );
        }

      }

      /*
      *  document ready
      *
      *  This function will render each map when the document is ready (page has loaded)
      *
      *  @type  function
      *  @date  8/11/2013
      *  @since 5.0.0
      *
      *  @param n/a
      *  @return  n/a
      */
      // global var
      var map = null;

      $(document).ready(function(){

        $('.acf-map').each(function(){

          // create map
          map = new_map( $(this) );

        });

      });

      })(jQuery);
      </script>
      <script type='text/javascript'>
    window.__lo_site_id = 118767;

      (function() {
        var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
        wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
        })();
      </script>
      <?php wp_footer(); ?>
  </body>
</html>