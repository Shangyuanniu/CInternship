<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home-CIntern</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<!--dody-->
<body>
	<!--doc-->
    <div class="g-doc">
        <?php include 'includes/header.php';?>
		<!--content-->
        <div class="g-ct">
<?php
     if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $internship = $_POST['internship'];
        $duration = $_POST['duration'];
        $accommodation = $_POST['accommodation'];
        $chinese = $_POST['chinese'];
        $essay = $_POST['essay'];
        
        $delimeter="|";
        // echo $delimeter;

        $myfile = fopen("submitted/".$firstname." ".$lastname.".txt", "w") or die("Unable to open file!");
        $txt = $firstname.$delimeter;
        // echo $txt;
        // echo $firstname."|";
        fwrite($myfile, $txt);
        $txt = $lastname.$delimeter;
        fwrite($myfile, $txt);
        $txt = $phone.$delimeter;
        fwrite($myfile, $txt);
        $txt = $email.$delimeter;
        fwrite($myfile, $txt);
        $txt = $internship.$delimeter;
        fwrite($myfile, $txt);
        $txt = $duration.$delimeter;
        fwrite($myfile, $txt);
        $txt = $chinese.$delimeter;
        fwrite($myfile, $txt);
        $txt = $accommodation.$delimeter;
        fwrite($myfile, $txt);
        $txt = $essay.$delimeter;
        fwrite($myfile, $txt);
        fclose($myfile);




        $target_dir = "resume/";
        $target_file = $target_dir.$firstname." ".$lastname.".pdf";
        $uploadOk = 1;
        $type = pathinfo($target_file,PATHINFO_EXTENSION);
        
        // Check if it's a pdf resume
        
        if($type != "pdf") {
            echo "Sorry, only PDF files are allowed.";
            $uploadOk = 0;
        }
        if ($_FILES["resume"]["size"] > 10000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } 
        else {
            if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
                echo "The file ".$_FILES["resume"]["name"]. " has been uploaded. Your form has successfully be submitted.";
                echo "<br><a href='index.php' style ='color:blue; text-decoration:underline'>Back</a>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }   


?>
			
        </div>
		<!--content end-->
        </div>
	<!--doc end-->
        <?php include 'includes/footer.php';?>
</body>
<!--dody end-->
</html>