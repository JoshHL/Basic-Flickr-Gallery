<?php

/* ================================================
EXAMPLE REQUESTS TO FLICKR API TO GET ALL PHOTOSETS, 
INFORMATION OF THAT PHOTOSET, AND THE PHOTOS 
WITHIN THAT PHOTOSET USING PHP/REST/JSON
================================================ */


/*
$apiKey = "";
$userID = "";

//Get photosets and their thumbnails from Flickr
$cl = curl_init();
curl_setopt ($cl , CURLOPT_URL,
'https://api.flickr.com/services/rest/?&method=flickr.photosets.getList&api_key='.$apiKey.'&user_id='.$userID.'&format=json&nojsoncallback=1');
curl_setopt ($cl , CURLOPT_RETURNTRANSFER, true);
curl_setopt ($cl , CURLOPT_CONNECTTIMEOUT, 5);
$contents = curl_exec($cl);
curl_close($cl);
 
$photosetsData = json_decode($contents, true);
 
if ($photosetsData['stat'] == 'ok') {
        //print_r($photosetsData);

        foreach ($photosetsData['photosets']['photoset'] as $photoset){
                //build array with the data we want
                $album[] = array(
                        "album" => $photoset['id'],
                        "title" => $photoset['title']['_content'],
                        "thumbnail" => "https://farm".$photoset['farm'].".static.flickr.com/".$photoset['server']."/".$photoset['primary']."_".$photoset['secret']."_n.jpg",
                );

        }

        foreach($album as $album){
                echo "<h2>".$album['title']."</h2>";
                echo "<img src='".$album['thumbnail']."'>";
        }

}*/
 

 
//get individual photos for a photoset
/*$cl = curl_init();
curl_setopt ($cl , CURLOPT_URL,
'https://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key='.$apiKey.'&photoset_id='.$photosetID.'&format=json&nojsoncallback=1');
curl_setopt ($cl , CURLOPT_RETURNTRANSFER, true);
curl_setopt ($cl , CURLOPT_CONNECTTIMEOUT, 5);
$contents = curl_exec($cl);
curl_close($cl);
//print_r($contents);
 
$photodata = json_decode($contents, true);
 
if ($photodata['stat'] == 'ok') {
               
        foreach ($photodata['photoset']['photo'] as $photodata){
                        //build array with the data we want
                        $photo[] = array(
                                "thumbnail" => "https://farm".$photodata['farm'].".static.flickr.com/".$photodata['server']."/".$photodata['id']."_".$photodata['secret']."_n.jpg",
                                "lightbox" => "https://farm".$photodata['farm'].".static.flickr.com/".$photodata['server']."/".$photodata['id']."_".$photodata['secret']."_c.jpg",
                        );
                       
        }
       
        foreach($photo as $photo){
                echo "<a href='".$photo['lightbox']."'><img src='".$photo['thumbnail']."'></a>";
        }
 
}*/


//get flickr photoset info
/*$cl = curl_init();
curl_setopt ($cl , CURLOPT_URL,
'https://api.flickr.com/services/rest/?&method=flickr.photosets.getInfo&api_key='.$flickrAPIKey.'&photoset_id='.$photosetID.'&format=json&nojsoncallback=1');
curl_setopt ($cl , CURLOPT_RETURNTRANSFER, true);
curl_setopt ($cl , CURLOPT_CONNECTTIMEOUT, 5);
$contents = curl_exec($cl);
curl_close($cl);
 
$photosetsData = json_decode($contents, true);
 
if ($photosetsData['stat'] == 'ok') {
        $photosetTitle = $photosetsData['photoset']['title']['_content'];
        $photosetDescription = $photosetsData['photoset']['description']['_content'];
}*/