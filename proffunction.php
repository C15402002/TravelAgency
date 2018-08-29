<?php
session_start();

	function getUsersData($custid)
{
	$db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());

	$array = array();
	$query = mysqli_query($db, "SELECT * FROM `customer` WHERE `custid`=".$custid);
	while($r = mysqli_result($query))
	{
		$array['custid'] = $r['custid'];
		$array['username'] = $r['username'];
		$array['password'] = $r['password'];
		$array['fname'] = $r['fname'];
		$array['sname'] = $r['sname'];
		$array['email'] = $r['email'];
		$array['telephone'] = $r['telephone'];
		$array['profileext'] = $r['profileext'];
	}
	return $array;
}

	
	function getId($username)
{
	$query = mysqli_query("SELECT `custid` FROM `customer` WHERE `username`='".$username."'");
	while($r = mysqli_fetch_assoc($query))
	{
		return $r['custid'];
	}
}

function userExists($custid)
{
	$numrows = mysqli_num_rows(mysqli_query( "SELECT `custid` FROM `customer` WHERE `custid`=".$custid));
	if($numrows==1)
		return true;
	else
		return false;
}

function updateFirstLastName($custid,$fname,$sname)
{
	if(mysqli_query("UPDATE `customer` SET `fname`='".$fname."', `sname`='".$sname."' WHERE `custid`=".$custid))
		return true;
	else
		return false;
}



function updateProfilePicture($custid,$tmpName,$ext)
{
	if(move_uploaded_file($tmpName,"images/userimages/".$custid.".".$ext) && mysqli_query("UPDATE `customer` SET `profileext`='".$ext."' WHERE `custid`=".$custid))
		return true;
	else
		return false;
}

function resetProfilePicture($custid,$ext)
{
	if(unlink("images/userimages/".$custid.".".$ext) && mysqli_query("UPDATE `customer` SET `profileext`='n/a' WHERE `custid`=".$custid))
		return true;
	else
		return false;
}


?>