<?php

/*
echo
file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAt78Pwzum9EtyC57EhxuOnOPwhtCL1EJU");
*/

?>

<html>
  <hrad>
    <title>Geocoding An Address</title>
  </hrad>
  <body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
   <script type="text/javascript">
     
     var position = {};
     
     $.ajax({
       url: "https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAt78Pwzum9EtyC57EhxuOnOPwhtCL1EJU",
       type: "GET",
       success: function(data){
         //console.log(data);
         $.each(data['results'][0]['address_components'], function(key, value){
           if(value['types'][0] == "country"){
             alert(value['long_name']);
           }
         })
       }
     })
     
    </script>
    
  </body>
</html>