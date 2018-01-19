<?php 
$consumer_key ='nqMya5esI9es0HrWJtEP8T4No';
$consumer_secret = '8121Y6SXWUijjkHir41kfLEM2YNBSgAhhaz1gHonSHNpdJykdl
';
$access_token = '954251761887281152-EajTEJx7uMjsoyhhoAkB2apEJBwhubN
';
$access_token_secret = 'JFDEzSK6NaooIA1PAuFDv781eOiLlv1KJfbdDRE3LKy3F
';
 
 require ("twitterapi/autoload.php");
 use Abraham\TwitterOAuth\TwitterOAuth;
//Connect to API
 $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
 //Content tweet
 $content = $connection->get("account/verify_credentials");

 //Create tweet

 $new_starus = $connection->post("statuses/update", ["status" => "Helloo..."]);

 $statuses = $connection->get("statuses/home_timeline",["count" => 25, "exclude_replies" => true]);
 print_r($statuses);

 ?>