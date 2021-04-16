<?php
$talkId=$_GET['id'];
if($talkId == "" || !is_numeric($talkId)) {
        echo "Content not found.";
}
$file_to_read = "";
$base_file = "resources/talk_files/";
if(!file_exists($base_file . $talkId . ".json")) {
        echo file_get_contents("404.html");
        die;
}

$data = file_get_contents($base_file . $talkId . ".json");
$data = json_decode($data , true);
if($data['speaker_link'] != "") {
	header("Location: " . $data['speaker_link']);
}
