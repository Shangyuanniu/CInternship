<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>CIntern Companies-CIntern</title>
    <link rel="stylesheet" href="css/main.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<!--dody-->
<body>
	<!--doc-->
    <div class="g-doc">
		<?php include 'includes/header.php';?>
		<!--content-->
        <div class="g-ct">
        
			<!--title-->
            <div class="ind-title">
            	<h1>Opportunites</h1>
            </div>
			<!--title end-->
			<!--main-->
            <div class="ind-main">
                <ul class="inpic-ul">
                    <?php
                        $json = file_get_contents('opportunity.json');
                        $data = json_decode($json, true);

                        foreach ($data as $value) {
                            if($value["id"]%2 == 1){
                                echo "<li>";
                            }
                            echo "<div class='pc-blc' style='background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) )
                            ,url(\"img/".$value["id"].".jpg\")'>
                            <div class = 'job-title'>".$value["jobname"]."</div>
                            <div class = 'job-discription'> With ".$value["company"]."<br>
                            Between 6 and 10 weeks<br>
                            In Shenzhen, China</div>
                        </div> ";
                            if($value["id"]%2 == 0){
                                echo "</li>";
                            }
                        }
                    ?>
                </ul>
            </div>
			<!--main end-->
        </div>
		<!--content end-->
    </div>
	<!--doc end-->
	<?php include 'includes/footer.php';?>
</body>
<!--dody end-->
</html>