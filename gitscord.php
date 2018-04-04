<?php
date_default_timezone_set('UTC');
 
$szBotName = "";
$szGitHubSecret = "";
$szDiscordWebhookURL = "";

$LOG_FILE = dirname(__FILE__).'/hook.log';

$fPayload = file_get_contents("php://input");

if($_SERVER['HTTP_X_HUB_SIGNATURE'] === "sha1=".hash_hmac('sha1', $fPayload, $szGitHubSecret)) {
	$fPayload = json_decode($fPayload, true);
    $aData = array("content" => "New push at " . date('D jS \of F Y H:i:s') . " \n " . "```" . $fPayload['head_commit']['message'] . "```", "username" => $szBotName);
    $curl = curl_init($szDiscordWebhookURL); 
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($aData));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_exec($curl);
}
?> 
 