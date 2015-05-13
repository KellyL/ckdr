<?php
  function convertAddr($addr)
  {   
  	$address = urlencode($addr);
  	$request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$address."&sensor=true";
  	$xml = simplexml_load_file($request_url) or die("url not loading");
  	$status = $xml->status;
  	if($status=="OK")
  	{
  		$Lat = $xml->result->geometry->location->lat;
  		$Lon = $xml->result->geometry->location->lng;
  		$LatLng = "$Lat,$Lon";
  	}

  	return $LatLng;
  }
?>