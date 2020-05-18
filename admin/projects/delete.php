<?php

include_once("../../db/db.php");


if(isset($_POST['id']))
{

$id=$_POST["id"];


$sel="SELECT * FROM `projects` WHERE id=$id;";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)==0)
{
	echo "false";
	exit();
}
else
{
	$data=mysqli_fetch_assoc($exe);
	unlink("../../img/projects/".$data['shortPath']);
}

}else
{
	header('Location:../404/index.php');
}





$query="DELETE FROM `projects` WHERE id='$id'";

$exe=mysqli_query($conn,$query);
if($exe)
{

	echo 'true';
}
else
{
	echo 'false';
}



?>




