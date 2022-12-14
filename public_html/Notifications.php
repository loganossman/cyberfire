<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$sql = "SELECT * FROM message WHERE sender_id = " . $_SESSION["myID"] . " OR receiver_id = " . $_SESSION["myID"] . ";";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$messageTable = $stmt->fetch();

$blackList = [];
$conversationContainer = [];
echo("boom baby <br>" . $_SESSION["myID"]);
foreach ($messageTable as $stmt){
    echo("boom baby <br>");
    if(!((in_array($messages["sender_id"], $blackList)) or (in_array($messages["receiver_id"], $blackList)))){
        echo("boom baby <br>");
        $conversation = [];
        $their_id = "";
        if($messages["sender_id"] ==  $_SESSION["myID"]){
            $their_id = $messages["receiver_id"];
        }
        else{
            $their_id = $messages["sender_id"];
        }
        foreach ($messageTable as $singleConvo){
            echo("somethin's cookin' <br>");
            if(($singleConvo["sender_id"] ==  $_SESSION["myID"] and $singleConvo["receiver_id"] == $their_id) or ($singleConvo["receiver_id"] ==  $_SESSION["myID"] and $singleConvo["sender_id"] == $their_id)){
                $conversation[] = $singleConvo;
            }
        }
        if($messages["sender_id"] == $_SESSION["myID"]){
            $blackList[] = $messages["sender_id"];
        }
        else{
            $blackList[] = $messages["receiver_id"];
        }
        $conversationContainer[] = $conversation;
    }
}


$smarty->assign("accumulator", 0);
$smarty->assign("convo", $conversationContainer);
$smarty->display("Notifications.tpl");

