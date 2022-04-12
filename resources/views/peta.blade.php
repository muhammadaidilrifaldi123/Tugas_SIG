<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Tugas SIG</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    
    <!-- elemen untuk menampilkan peta -->
    <div id="map"></div>
    
    
    <script>

      function initMap() {
        
        // membuat objek untuk titik koordinat
        var untan = {lat:-0.027881 , lng: 109.343725};
        
        // membuat objek peta
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: untan
        });

        // mebuat konten untuk info window
        var contentString = '<h2>Universitas Tanjungpura!</h2>';

        // membuat objek info window
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: {lat:-0.027881 , lng: 109.343725}
        });
        
        // membuat marker
        var marker = new google.maps.Marker({
          position: untan,
          map: map,
          title: 'untan'
        });
        
        // event saat marker diklik
        marker.addListener('click', function() {
          // tampilkan info window di atas marker
          infowindow.open(map, marker);
        });
        
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>
  </body>
</html>