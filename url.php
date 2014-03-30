<?php
$search = $_GET [s];
$search_url = "http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=m3vjvm7qf36jn6ebpetnyyvs&q=".$search."&page_limit=4&page=1";
$json = file_get_contents($search_url);
$objs = json_decode($json, true);
//print_r($obj['movies'][0]);
foreach ($objs['movies'] as $movie) {
	# code...
	$obj = (object)$movie;
	echo $obj->id." - ".$obj->title."; ";
}
//echo $obj['movies'][0]['title'];
?>