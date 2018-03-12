<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/46d9c791bb749525/geolookup/conditions/q/UK/London.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $city = $parsed_json->{'location'}->{'city'};
  $wind_string = $parsed_json->{'current_observation'}->{'wind_string'};
  $zipcode = $parsed_json->{'location'}->{'zip'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  $pws = $parsed_json->{'location'}->{'state'};
  $observation_time = $parsed_json->{'current_observation'}->{'observation_time'};
  $local_time_rfc822 = $parsed_json->{'current_observation'}->{'local_time_rfc822'};
  $wind_degrees = $parsed_json->{'current_observation'}->{'wind_degrees'};
  $wind_dir = $parsed_json->{'current_observation'}->{'wind_dir'};


?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});
</script>

<button>click here to hid and show London weather </button>

<?php
  echo "<p><table>";
  echo"<tr>";
  echo "<td> Current temperature in ${location} </td> <th> ${temp_f}\n</th> ";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td>  wind string in ${location} </td> <th> ${wind_string}\n</th> ";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td> city </td><th>${city}\n</th> ";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td>zipcode:</td> <th> ${zipcode}\n</td>";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td>state: </td><th>${pws}\n</th>";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td> observation_time:</td><th> ${observation_time}\n</td>";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td> local time:</td><th> ${local_time_rfc822}\n</td>";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td>wind dir:</td><th> ${wind_dir}\n</td>";
  echo"</tr>";
  
  echo"<tr>";
  echo "<td> wind degrees:</td><th> ${wind_degrees}\n</td>";
  echo"</tr>";
echo"</table></p>";
?>

<style>
table, th, td {
    border: 1px solid black;
    padding: 5px;
}
table {
    border-spacing: 15px;
}
</style>