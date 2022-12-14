<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$sql = "SELECT * FROM message WHERE sender_id = " . $_SESSION["myID"] . " OR receiver_id = " . $_SESSION["myID"];
$stmt = $pdo->prepare($sql);
$stmt->execute();
$stmtCopy = $stmt;

$secondSql = "SELECT * FROM message WHERE sender_id = " . $_SESSION["myID"] . " OR receiver_id = " . $_SESSION["myID"];
$secondStmt = $pdo->prepare($sql);
$secondStmt->execute();
$stmtCopyTwo = $secondStmt;

$blackList = [];
$conversationContainer = [];
echo("boom baby <br>");
echo($sql);
foreach ($stmtCopy as $messages){
    echo("egg <br>");
    if(!((in_array($messages["sender_id"], $blackList)) or (in_array($messages["receiver_id"], $blackList)))){
        $conversation = [];
        $their_id = "";
        if($messages["sender_id"] ==  $_SESSION["myID"]){
            $their_id = $messages["receiver_id"];
        }
        else{
            $their_id = $messages["sender_id"];
        }
        echo($their_id);
        foreach ($stmtCopyTwo as $singleConvo){
            if(($singleConvo["sender_id"] ==  $_SESSION["myID"] and $singleConvo["receiver_id"] == $their_id) or ($singleConvo["receiver_id"] ==  $_SESSION["myID"] and $singleConvo["sender_id"] == $their_id)){
                $conversation[] = $singleConvo;
            }
        }
        echo("Finished One Iteration");
        if($messages["sender_id"] == $_SESSION["myID"]){
            $blackList[] = $messages["receiver_id"];
        }
        else{
            $blackList[] = $messages["sender_id"];
        }
        $conversationContainer[] = $conversation;
    }
}

$smarty->assign("idUser", $_SESSION["myID"]);
$smarty->assign("accumulator", 0);
$smarty->assign("convo", $conversationContainer);
$smarty->display("Notifications.tpl");

