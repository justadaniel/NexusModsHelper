<?php



function GetSiteInfo() {
    $siteInfo = array(
        'name'=>'NexusMods Helper',
        'domain'=>'http://localhost/nexusmods-helper/'
    );
    
    return $siteInfo;
}




function GetSiteRootURI($url) {
    return $url;
}


function GetSiteName() {
    return GetSiteInfo()['name'];
}


function GetGravatar($email, $s = 80, $d = 'mm', $r = 'g') {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";
    return $url;
}


function GetAvatar() {
    return GetGravatar('dacheezypuffs@gmail.com');
}


function GetJSON($url) {
    $json = file_get_contents($url);
    return json_decode($json);
}





function GetVersionFile() {
    $versionFile = file_get_contents(GetSiteRootURI('.version'));
    $fileExploded = explode(' ', $versionFile);
    return $fileExploded;
}



function GetBuildNumber() {
    $versionFile = GetVersionFile();
    return $versionFile[1];
}

function GetVersion() {
    $versionFile = GetVersionFile();
    return $versionFile[0];
}

























include(GetSiteRootURI('lib/UI.php'));


?>