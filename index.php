<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  
    </head>


    <body>
   		test123
          

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="./js/bootstrap.min.js"></script>

      <?php
      	set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\AppServ\www\SAD\google-api-php-client\src');


		  require_once 'Google/Client.php';
		  require_once 'Google/Service/Books.php';
		  $client = new Google_Client();
		  $client->setApplicationName("SAD project");
		  $client->setDeveloperKey("63809015305");
		  $service = new Google_Service_Books($client);
		  $optParams = array('filter' => 'free-ebooks');
		  $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

		  foreach ($results as $item) {
		    echo $item['volumeInfo']['title'], "<br /> \n";
		  }


      ?>





    </body>
</html>