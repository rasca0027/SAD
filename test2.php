<?php
    
    set_include_path("C:\AppServ\www\SAD\google-api-php-client\src" . PATH_SEPARATOR . get_include_path());
    include_once "C:/AppServ/www/SAD/google-api-php-client/examples/templates/base.php";
    require_once 'Google/Client.php';
	require_once 'Google/Http/MediaFileUpload.php';
	require_once 'Google/Service/Books.php';


	$client = new Google_Client();
	$client->setApplicationName("My Application");
	$client->setDeveloperKey(AIzaSyAWFO4-Kfq36k60UQfUTtUppYX0JYVzGJU);

	$service = new Google_Service_Books($client);


$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);


foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br /> \n";
}

?>