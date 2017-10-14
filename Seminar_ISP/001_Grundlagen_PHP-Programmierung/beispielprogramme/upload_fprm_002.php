<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
     <input type="file" name="datei" /><br />
     <input type="submit" value="Upload" /><br />
 </form>
 <br />

 <?php
     if (is_array($_FILES["datei"])) {
         if ($_FILES["datei"]["error"] == 0) {
             $file_temp = $_FILES["datei"]["tmp_name"];
             $file_name = $_FILES["datei"]["name"];
             $file_size = $_FILES["datei"]["size"];
              $info = @getimagesize($file_temp);
             $file_type = $info["mime"];
             $file = file($file_temp);
             echo $file_type."<br />";
             if ($file_type == "image/jpg") {
                  move_uploaded_file($file_temp, "./upload/$file_name");
                 printf("Die Datei %s wurde in Upload gestellt.<br />", $file_name);
                 printf("Die Datei ist %s Bytes groß und vom Typ %s.<br />", $file_size, $file_type);
             } else {
                 echo "Falscher Dateityp";
         } 
     }}
 ?>