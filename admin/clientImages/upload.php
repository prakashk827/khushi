<?php 

error_reporting(0);
include_once("../../db/db.php");


$date=date("d-m-Y");  

if(is_array($_FILES))   
{  
  foreach ($_FILES['files']['name'] as $name => $value)  
  {  
    $file_name = explode(".", $_FILES['files']['name'][$name]);  
    $allowed_ext = array("jpg","JPG","JPEG", "jpeg", "png", "gif","PNG");
    if($file_name[1]=="")
    {
      echo "Please upload atleat one image";
    }  
    else if(in_array($file_name[1], $allowed_ext))  
    { 
     

        $new_name = "KhushiInfotech-"."-".md5(rand()) . '.' . $file_name[1];  
        $sourcePath = $_FILES['files']['tmp_name'][$name];  
        $targetPath = "../../images/client/".$new_name;  

        if($result=move_uploaded_file($sourcePath, $targetPath))  
        {  

          $query="INSERT INTO `clientImages`(`date`, `name`, `path`) VALUES
          ('$date','$new_name','$targetPath')";
          if(mysqli_query($conn,$query))
          {

            $success=1;

          } 
          else
          {

            $error="Error:".mysqli_error($conn);
          }


        }

      
    }
    else
    {
      echo 'File format not supported..!';
    }

  }  

  echo $success;
  echo $error;

}

?>  