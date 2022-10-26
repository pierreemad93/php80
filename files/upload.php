<?php  
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>"; 

   $avatar = $_FILES['image']['name'];
   $avatarTemp =$_FILES['image']['tmp_name'];
   $avatarType = $_FILES['image']['type'];
   $allowedExtension = ["image/jpeg" ,"image/png" , "image/jpg" , "image/gif" ];
    if(in_array( $avatarType ,$allowedExtension )){
        $newImagename= rand(0,1000)."_".$avatar; 
       move_uploaded_file($avatarTemp , 'images/'. $newImagename);
    }else{
        echo "Sorry";
    }