
<style type="text/css">
	body
	{
		background-color:#87CEFA;
	}
	.btn
	{
		background-color:green;
		border:none;
		padding:0.5%;
		font-weight:bold;
		color:white;
		outline: none;
	}
</style>
<?php
if(isset($_POST['save']))
{


	include_once("../../db/db.php");
	$projectLink=$_POST["projectLink"];
	$title=$_POST["title"];
	$alt=$_POST["alt"];
	$shortDesc=$_POST["shortDesc"];
	$editor1='';

	$size=$_FILES["photo"]["size"];
	$error=$_FILES["photo"]["error"];
	$file_name=$_FILES["photo"]["name"];
	$file_name=time()."_"."_".'khushiinfotech_'.$file_name;
	$temp_name=$_FILES["photo"]["tmp_name"];
	$folder="../../img/projects/".$file_name;
	move_uploaded_file($temp_name, $folder);


	$date=date("d-m-Y");
 	date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
 	$time=date("h:i a");
 	$status=1;

 	



 $query="INSERT INTO `projects`(`date`, `time`, `title`,`projectLink`,`shortDescription`, `shortPath`, `longDescription`, `longPath`, `status`)VALUES ('$date','$time','$title','$projectLink','$shortDesc','$file_name','$editor1','$file_name','$status')";

 $exe=mysqli_query($conn,$query);
 if($exe)
 {

 	?>


 	<center>
 		<br><br>
 		<a title="Click Image to go Back" href="../projects.php">
 			<img src="../../gif/success_celebration_800x600.gif">
 		</a> 


 	</center>



 	<?php
 }
 else
 {
 	echo "Error".mysqli_error($conn);
 }
}else
{
	header('Location:../404/index.php');
}

?>


