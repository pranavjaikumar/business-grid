<?php
include("config.php");
$sAI = mysqli_query($link, "SELECT users.first_name, users.last_name, ai_profile.sector, ai_profile.employer, ai_profile.title, ai_profile.investment
FROM users
RIGHT JOIN ai_profile ON users.id = ai_profile.id
ORDER BY users.first_name;");
$sBP = mysqli_query($link, "SELECT users.first_name, users.last_name, bp_profile.sector, bp_profile.employer, bp_profile.title, bp_profile.service, bp_profile.payment
FROM users
RIGHT JOIN bp_profile ON users.id = bp_profile.id
ORDER BY users.first_name;");
$sCO = mysqli_query($link, "SELECT startup_profile.name, startup_profile.sector, startup_profile.service, startup_profile.experience
FROM users
RIGHT JOIN startup_profile ON users.id = startup_profile.id
ORDER BY users.first_name;");


$sAIrows = array();
$sBProws = array();
$sCOrows = array();


while($i = mysqli_fetch_array($sAI) ) {
    $sAIrows[] = $i ;
}
while($j = mysqli_fetch_array($sBP) ) {
    $sBProws[] = $j ;
}
while($k = mysqli_fetch_array($sCO) ) {
    $sCOrows[] = $k ;
}

$sAI_data = array(
    "data"            => $sAIrows   // total data array
);
$sBP_data = array(
    "data"            => $sBProws   // total data array
);
$sCO_data = array(
    "data"            => $sCOrows   // total data array
);

$fp = fopen('sAI.json', "w");
fwrite($fp, json_encode($sAI_data));
fclose($fp);
$fp = fopen('sBP.json', "w");
fwrite($fp, json_encode($sBP_data));
fclose($fp);
$fp = fopen('sCO.json', "w");
fwrite($fp, json_encode($sCO_data));
fclose($fp);
?>