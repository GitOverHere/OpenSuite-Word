<?php 

include "../core/twitch.php";


$db = new DB("supportlabs_tools");

$db->Update("donation-goal","title",$_POST['title']);
$db->Update("donation-goal","goal-amount",$_POST['goal-amount']);
$db->Update("donation-goal","starting-amount",$_POST['starting-amount']);
$db->Update("donation-goal","end-after",$_POST['end-after']);
$db->Update("donation-goal","layout",$_POST["layout"]);
$db->Update("donation-goal","bg-color",$_POST["bg-color"]);
$db->Update("donation-goal","bar-text-color",$_POST{"bar-text-color"});
$db->Update("donation-goal","bar-bg-color",$_POST["bar-bg-color"]);
$db->Update("donation-goal","bar-thickness",$_POST["bar-thickness"]);
$db->Update("donation-goal","font",$_POST["font"]);