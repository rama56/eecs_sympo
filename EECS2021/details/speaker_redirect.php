<?php
$talkId=$_GET['id'];
if($talkId == "" || !is_numeric($talkId)) {
        echo "Content not found.";
        die;
}
$file_to_read = "";
$base_file = "talk_files/july10/";
if(!file_exists($base_file . $talkId . ".json")) {
        echo file_get_contents("404.html");
        die;
}
/*
switch($talkId) {
        case "2":
                $file_to_read = "july10/venkat.json";
                break;
        case "3":
                $file_to_read = "july10/3.json";
                break;
        default:
                $file_to_read = "404";
}
if($file_to_read == "404") {
        echo "Content not found";
        die;
}

$data = file_get_contents($base_file . $file_to_read);
*/
$data = file_get_contents($base_file . $talkId . ".json");
$data = json_decode($data , true);
if($data['speaker_link'] != "") {
	header("Location: " . $data['speaker_link']);
}
//$base_path_url = "https://eecs.iisc.ac.in/EECS2020/";
