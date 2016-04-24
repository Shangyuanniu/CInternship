<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>CIntern Companies-CIntern</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="shortcut icon" href=""/>
    <link rel="apple-touch-icon" href=""/>
    <link rel="stylesheet" href="css/main.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<!--dody-->
<body>

	<!--doc-->
    <div class="g-doc">
    
		<!--header-->
        <div class="g-hd">
			<!--container-->
        	<div class="g-hd-c">
            
                <!--logo-->
                <a href="index.html" class="m-logo"><img src="images/logo.png" alt="CIntern" /></a>
                <!--logo end-->
                
                <!--navigation-->
                <div class="g-hd-nav">
                	<ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>                       
                        <li class="dropdown"><a href="#">Our Program</a>
                          <div class="dropdown-content">
                            <a href="Shenzhen.html">City</a>
                            <a href="Package.html">Living</a>
                            <a href="#">Social</a>
                          </div>
                        </li>
                        <li><a href="opportunity.php">Opportunity</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="apply.php">Apply</a></li>
                    </ul>
                </div>
                <!--navigation end-->
                
            </div>
			<!--container end-->
        </div>
		<!--header end-->
        
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
    
	<!--footer-->
    <div class="g-ft">
    
		<!--main-->
    	<div class="g-ft-m">
        
			<!--About Us-->
        	<div class="ft-about">
            	<div class="ft-ab-c">
                    <h3 class="ft-h3">About Us</h3>
                    <p class="ft-h3-p">CIntern Program offers talented students currently studying in colleges and graduate students a chance to work inside innovative Chinese startups, logistic firms, and financial institutions. Through the programs students may get to know the brilliant people, magnificent culture, and amazing cuisine of real China. They can also gain first handed entrepreneurial experience and greatly improve their language skills working with brilliant Chinese peers and one to one local advisors.</p>
                </div>
            </div>
			<!--About Us end-->
            
			<!--connect-->
        	<div class="ft-connect">
            	<h3 class="ft-h3">Or Connect With Us!</h3>
                <ul class="ft-lk">
                	<li><a class="ft-lk-f" href="#"></a></li>
                	<li><a class="ft-lk-t" href="#"></a></li>
                	<li><a class="ft-lk-d" href="#"></a></li>
                	<li><a class="ft-lk-p" href="#"></a></li>
                	<li><a class="ft-lk-g" href="#"></a></li>
                	<li><a class="ft-lk-r" href="#"></a></li>
                </ul>
				<p class="ft-h3-p">Or send us an email at <a class="color-blue" href="mailto:Cinternship@hotmail.com">Cinternship@hotmail.com</a></p>
            </div>
			<!--connect end-->
            
        </div>
		<!--main end-->
        
		<!--Copyright-->
    	<div class="g-ft-cb">
        	<div class="g-ft-ct">Copyright 2014-2015@CIntern Co,.Ltd, All rights reserved</div>
        </div>
		<!--Copyright end-->
        
	</div>
	<!--footer end-->

</body>
<!--dody end-->
</html>