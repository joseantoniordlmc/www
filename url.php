<?php
$search = $_GET [s];
$search_url = "http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=m3vjvm7qf36jn6ebpetnyyvs&q=".$search."&page_limit=4&page=1";
$json = file_get_contents($search_url);
$objs = json_decode($json,true);
//var_dump($objs);
//print_r($obj['movies'][0]);
$arr = array();
foreach ($objs["movies"] as $movie) {
	# code...
	//$obj = (object)$movie;
	//echo $obj->id." - ".$obj->title."; ";
	$arr[$movie["id"]] = $movie["title"];
}
echo json_encode($arr);
//echo $obj['movies'][0]['title'];
?>