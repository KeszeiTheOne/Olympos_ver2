<?php
$_POST[DBData::$contestDate] = date('Y-m-d H:i:s',strtotime($_POST[DBData::$contestDate]));
//$id =$DBTasks->createContest($_POST);
$id = null;
if(false){
	$error = true;
	$_POST[DBData::$contestDate] = strftime('%Y-%m-%dT%H:%M:%S',strtotime($_POST[DBData::$contestDate]));
	$values = $_POST;

	$raceName= DBData::$contestName;
	$raceOrgID= DBData::$contestOrgID;
	$raceDesc = DBData::$contestDesc;
	$racePCode = DBData::$postalAddPCode;
	$raceTown = DBData::$postalAddTown;
	$raceStreet = DBData::$postalAddStreet;
	$raceDate = DBData::$contestDate;
	$raceFee = DBData::$contestEntryFee;

	$form = "View/Races/view_raceCreateForm.php";
}
else {
	echo $id;
	$valami =json_encode(DBLoad::loadOrgCompTypes($_SESSION["User"]->getId()));
	//$test = $_SESSION["User"]->getId();
	$form = "View/Races/view_raceCreateForm2.php";
}




