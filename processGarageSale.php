<?php
  require("convertAddress.php");

  $addr = $_POST['address'].", Dryden, Ontario";
  $date = $_POST['saleDate'];
  $desc = $_POST['description'];

  $longLat = convertAddr($addr);



  echo("<html><head>\n");
  echo("<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false'></script>\n");
  echo("<script type='text/javascript'>\n");
  echo("function initialize() {\n");
  echo("  var myLatlng = '".$longLat."';\n");
  echo("  var mapOptions = {zoom: 16, center: myLatlng, mapTypeID: google.maps.MapTypeID.ROADMAP};\n");  
  echo("  var map = new google.maps.Map(document.getElementbyId('map'), mapOptions);\n");  
  echo("  var marker = new google.maps.Marker({position: myLatlng, map: map, title: '".$desc."'});\n");
  echo("}\n");
  echo("google.maps.event.addDomListener(window, 'load', initialize);\n");
  echo("</script>\n");
  echo("<title>Process Garage Sale</title></head><body>\n");
  echo("<p>".$addr."</p>\n");
  echo("<p>".$date."</p>\n");
  echo("<p>".$desc."</p>\n");
  echo("<p>".$longLat."</p>\n");  
  echo("<div id='map'></div>\n");
  echo("</body></html>\n");

?>