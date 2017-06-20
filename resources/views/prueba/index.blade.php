@extends('prueba.layout')

@section('container')
    <div class="row text-center">
      <div class="col l6 s12">
        <select id="chosen" class="chosen">
          <option value="">Selecciona una provincia</option>
          @foreach ($provincias as $provincia)
            <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
          @endforeach
        </select>
       </div>
    </div>
      <div id="map" style="width: 1200px; height: 750px;"></div>
      <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBsgFo8sXjZvncnELRo7HKEHyNY9GElZdA" type="text/javascript"></script>
      <script type="text/javascript">
        $("#chosen").change(function(){
          var id = $('#chosen').val();
          $.get({
            url: '/pruebaTecnica/' + id,
            type: 'GET',
            async: false,
            success: function(result){
              console.log(Object.keys(result[0]).length);
              console.log(result[0].length);
              //console.log(result[0][0].lat);
              console.log(result[0][6823]);
              //console.log(result[0][0].longi);
              var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 9,
                  center: new google.maps.LatLng(result.lat,result.long),
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              });

              var infowindow = new google.maps.InfoWindow();

              var marker, i;
              if (result.start == 1) {
                for (i = result.start-1; i < result[0].length+result.start-1; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(result[0][i].lat, result[0][i].longi),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(result[0][i].nombre);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
              }else{
                for (i = result.start-1; i < Object.keys(result[0]).length+result.start-1; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(result[0][i].lat, result[0][i].longi),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(result[0][i].nombre);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
              }
            }
          });
        });
      </script>
@endsection