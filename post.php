<?php
include("config.php");
$result = mysqli_query($link, "SELECT users.first_name, users.last_name, ai_profile.sector, ai_profile.employer, ai_profile.title, ai_profile.investment
FROM users
RIGHT JOIN ai_profile ON users.id = ai_profile.id
ORDER BY users.first_name;");
$rows = array();
while($i = mysqli_fetch_array($result) ) {
    $rows[] = $i ;
}
$data = $rows;
$json_data = array(
    "data"            => $rows   // total data array
);

$fp = fopen('test.json', "w");
fwrite($fp, json_encode($json_data));
fclose($fp);
?>