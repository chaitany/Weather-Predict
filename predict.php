
<?php

$city = $_GET['city'];

$city = str_replace(" ", "", $city);

$data = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</i', $data, $matches);

echo($matches[1]);

?>