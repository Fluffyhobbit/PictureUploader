<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/image.css">
    <title>Computer Science Images Gallery</title>
</head>
<body>
     
    <h1>Computer Science Images Gallery</h1>

    <h2><a href="/">Go back to main page</a></h2>


    <header>
    <?php
    $folder_path = 'science/'; //image's folder path

    $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
   
    $folder = opendir($folder_path);
    
    if($num_files > 0)
   
    {
    while(false !== ($file = readdir($folder))) 
    {
     $file_path = $folder_path.$file;
     $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
     if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
        {
      ?>
               <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
               <?php
            }
        }
    }
    else
    {
        echo "the folder was empty !";
    }
    closedir($folder);
    ?>    


    </header>

    <h1><a href="/"></a></h1>

</body>
</html>