<?php
include("../config.php");
$aiForum = mysqli_query($link, "SELECT users.first_name, users.last_name, ai_profile.sector, ai_profile.employer, ai_profile.title, ai_profile.investment
FROM users
RIGHT JOIN ai_profile ON users.id = ai_profile.id
ORDER BY users.first_name;");
$aiStart = mysqli_query($link, "SELECT startup_profile.name, startup_profile.sector, startup_profile.service, startup_profile.experience, startup_profile.earnings
FROM users
RIGHT JOIN startup_profile ON users.id = startup_profile.id
ORDER BY users.first_name;");


$aiForumRows = array();
$aiStartRows = array();


while($i = mysqli_fetch_array($aiForum) ) {
    $aiForumRows[] = $i ;
}
while($j = mysqli_fetch_array($aiStart) ) {
    $aiStartRows[] = $j ;
}

$aiForum_data = array(
    "data"            => $aiForumRows   // total data array
);
$aiStart_data = array(
    "data"            => $aiStartRows   // total data array
);

$fp = fopen('aiForum.json', "w");
fwrite($fp, json_encode($aiForum_data));
fclose($fp);
$fp = fopen('aiStart.json', "w");
fwrite($fp, json_encode($aiStart_data));
fclose($fp);
?>