<style type="text/css">
	body
	{
		background-color:#87CEFA;
	}
	
</style>

<?php
include_once("../../db/db.php");
if(isset($_POST['id']))
{
	$id=$_POST['id'];
	$size=$_FILES["photo"]["size"];
	$error=$_FILES["photo"]["error"];
	$file_name=$_FILES["photo"]["name"];


	/*Deleting Old images Starts*/
	if($file_name!="")
	{
		
		$file_name=time()."_"."_".'KhushiInfotech_'.$file_name;
		$temp_name=$_FILES["photo"]["tmp_name"];
		$folder="../../img/projects/".$file_name;
		move_uploaded_file($temp_name, $folder);
		

		$sel="SELECT * FROM `projects` WHERE id=$id";
		$exe=mysqli_query($conn,$sel);
		if(mysqli_num_rows($exe)==0)
		{
			echo "Error while fetching Short Desc. Image";
		}
		else
		{
			$data=mysqli_fetch_assoc($exe);
			

		}

		

		unlink("../../img/projects/".$data['shortPath']);
		$query="UPDATE `projects` SET `shortPath`='$file_name',longPath='$file_name' WHERE id=$id";



		if(!$obj->insertQuery($query))
		{
			echo "<center>

			<h2>Error while uploading Iamge</h2>

			</center>";
			echo mysqli_error($conn);

		}

	}

	/*Deleting old Images Ends*/


	$title=$_POST["title"];
	$alt=$_POST["alt"];
	$shortDesc=$_POST["shortDesc"];
	$projectLink=$_POST["projectLink"];

	$date=date("d-m-Y");
 	date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
 	$time=date("h:i a");
 	$status=$_POST['status'];

	 $query="UPDATE `projects` SET
	 `date`='$date',
	 `time`='$time',
	 `title`='$title',
	 `shortDescription`='$shortDesc',
	 `projectLink`='$projectLink',
	 `status`='$status' WHERE id='$id'";

	 $exe=mysqli_query($conn,$query);
 if(!$exe)
 {
 	echo "Not updated <br>";
 	echo mysqli_error($conn);
 }
 else
 {
 		

 	?>
 	

 	<center>
 		<br><br>
 		<a title="Click Image to go Back" href="../projectList.php">
 			<img src="../../gif/success_celebration_800x600.gif">
 		</a> 


 	</center>



 	<?php  
 }
}else
{
	header('Location:../404/index.php');
}


?>



