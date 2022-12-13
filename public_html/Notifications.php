<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";

$sql = "SELECT * FROM message WHERE sender_id = " . $_SESSION["myID"] . " OR receiver_id = " . $_SESSION["myID"] . ";";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$messageTable = $stmt->fetch();

$blackList = [];

foreach ($messageTable as $messages){
    if(!((in_array($messages["sender_id"], $blackList)) or (in_array($messages["receiver_id"], $blackList)))){
        $conversation = [];
        foreach ($messageTable as $singleConvo){
            if(1){

            }
        }
        if($messages["sender_id"] == $_SESSION["myID"]){
            $blackList[] = $messages["sender_id"];
        }
        else{
            $blackList[] = $messages["receiver_id"];
        }
    }
}



$smarty->display("Notifications.tpl");

