<?php
include("config.php");
$bpForum = mysqli_query($link, "SELECT users.first_name, users.last_name, bp_profile.sector, bp_profile.employer, bp_profile.title, bp_profile.service, bp_profile.payment
FROM users
RIGHT JOIN bp_profile ON users.id = bp_profile.id
ORDER BY users.first_name;");
$bpStart = mysqli_query($link, "SELECT startup_profile.name, startup_profile.sector, startup_profile.service, startup_profile.experience
FROM users
RIGHT JOIN startup_profile ON users.id = startup_profile.id
ORDER BY users.first_name;");


$bpForumRows = array();
$bpStartRows = array();


while($j = mysqli_fetch_array($bpForum) ) {
    $bpForumRows[] = $j ;
}
while($k = mysqli_fetch_array($bpStart) ) {
    $bpStartRows[] = $k ;
}

$bpForum_data = array(
    "data"            => $bpForumRows   // total data array
);
$bpStart_data = array(
    "data"            => $bpStartRows   // total data array
);

$fp = fopen('bpForum.json', "w");
fwrite($fp, json_encode($bpForum_data));
fclose($fp);
$fp = fopen('bpStart.json', "w");
fwrite($fp, json_encode($bpStart_data));
fclose($fp);
?>