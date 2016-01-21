<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>APPLY NOW-CIntern</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="shortcut icon" href=""/>
    <link rel="apple-touch-icon" href=""/>
    <link rel="stylesheet" href="./css/main.css"/>
    <link rel="stylesheet" href="./css/uploadify.css"/>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery.uploadify.min.js"></script>
<!--     <script type="text/javascript" src="js/main.js"></script> -->
	<!-应用LeanCloud必须include下面的js文件->
    <script src="https://cdn1.lncld.net/static/js/av-mini-0.6.4.js"></script>
    
    <script>
	    function checkbox(){
		    var check1 = document.getElementById('check1').checked;
		    var check2 = document.getElementById('check2').checked;
		    var check3 = document.getElementById('check3').checked;
		    
		    if(check1&&check2&&check3){
			    var submit = document.getElementById('submit-button');
			    submit.removeAttribute('disabled');
		    }
		    else{
			    var submit = document.getElementById('submit-button');
			    submit.setAttribute('disabled', 'true');

		    }
	    }
    </script>

	
	 <script>
	    $(document).ready(function(){
		    $("#phone").blur(function(){
			    var parent = $(this).parent();
			    parent.find('#tip').remove();
			    
			    var phone = $(this).val();
			    phone_length = phone.length;
			    
			    if(phone_length != 10){
				    parent.append("<p class = 'color-red' id = 'tip'>"+ "Please enter a ten digit US number"+"</p>");
				    $(this).css('border-color', '#C03');
			    }
			    else{
				    $(this).css('border-color', '');
			    }
			    
		    });
		    
		    $("#email").blur(function(){
			    var parent = $(this).parent();
			    parent.find('#tip').remove();
			    
			    var email = $(this).val();
			    var mail_regx = new RegExp('^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+');
				var mail_validate = mail_regx.test(email);
				if (mail_validate){
					$(this).css('border-color', "")
				}
				else{
					parent.append('<p class="color-red" id="formtip"> Please enter the correct email address</p>')
					$(this).css('border-color', '#C03');
				}
			});  
	    });
    
    </script>
	
    
    <!- Operation for link Leancloud ->
    <script>
	//AV.initialize('oovP05hC2Ca7baiw74LMeATz-gzGzoHsz', '20zyiPkEeM9G0eVa2X5I8TOE');
	//创立链接，
	AV.initialize('BxvLALRhoXpIFEVj44BSeOoj-gzGzoHsz', 'xlg6UXmK39qSMg67qsvDx3Rc');
	// AV.Object 的稍复杂一点的子类
	
	// 声明对象
	var Profile = AV.Object.extend('Profile');

	//子类
	$(document).ready(function(){
		$("#submit-button").click(function(){
			
			var fullname = $('#fullname').val();
		    var gender = $('#gender').val();
		    var nationality = $('#nationality').val();
		    var dob = $('#dob').val();
		    var phone = $('#phone').val();
			var email = $('#email').val();
			var internship = $('#internship').val();		    
		    var location = $('#location').val();
		    var duration = $('#duration').val();
		    var accommodation = $('#accommodation').val();
		    var chinese_level = $('#chinese_level').val();
		    var resume = $('#resume').val();
		    var essay = $('#essay').val();
			
		    
		    
			// 创建对象实例
			var profile = new Profile();
			// Set Value
			profile.set('Name',fullname);
		    profile.set('Gender',gender);
		    profile.set('Nationality',nationality);
		    profile.set('Birthday',dob);
		    profile.set('Phone_Number',phone);
		    profile.set('Email',email);
		    profile.set('Internship_Choice',internship);
		    profile.set('Location',location);
		    profile.set('Duration',duration);
		    profile.set('Accommodation',accommodation);
		    profile.set('Chinese_Level',chinese_level);
		    profile.set('Resume',resume);
		    profile.set('Application_Essay',essay);
		    
		    
			
			// 传输数据到后台
			profile.save(null, {
				success: function(profile){
					//实例保存成功
					alert("Submit success.");
					self.location="index.html";
				},
				error: function(profile, error){
					alert("Submit failed.");
				}
			});
			
		});
		
		});
	</script>
</head>


    
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
                        <li><a href="industries.html">Industries</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="apply.html">Apply</a></li>
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
            <div class="ct-title">
            	<h1>APPLY NOW</h1>
            </div>
			<!--title end-->
            
			<!--Application Form-->
            <div class="ct-af">
            	
                <!--left side-->
                <div class="ct-af-l">
                    	
                        <!--form title-->
                    	<div class="ct-af-title">
                        	<h2>Application Form</h2>
                        </div>
                        <!--form title end-->
                        
                        <!--form content-->
                    	<form class="ct-af-content">
                        	<ul>
                            
                            	<li>
                                	<h4>Full Name<span class="color-red">*</span></h4>
                                    <div class="af-func" >
                                    	<input type="text" id="fullname"/>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Gender<span class="color-red">*</span></h4>
                                    <div class="af-func" >
                                    	<label><input id="gender" name="Gender" type="radio" value="male">Male</label>
                                    	<label><input id="gender" name="Gender" type="radio" value = "female" checked>Female</label>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Nationality<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="nationality">
                                        	<option value="germany">Germany</option>
                                        	<option value="united-states">United States</option>
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Date of Birth<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<input id="dob" type="date" value="1994-11-06" />
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Phone Number<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<input id = 'phone' type="text"/>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Email Address<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<input type="email" id= "email" placeholder="We will email official correspondence to this address" />
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                                                
                            	
                                
                            	<li>
                                	<h4>I am applying for<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="internship">
                                        	<option value="syncapital">SYNCAPITAL</option>
                                        	<option value="yuanhengjia-education-group">YUANHENGJIA EDUCATION GROUP</option>
                                        </select>

                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Location<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="location">
                                        	<option value="Shenzhen">Shenzhen</option>
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                                <li>
                                	<h4>Duration<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="duration">
                                        	<option value="one-month">One Month</option>
                                        	<option value="two-month">Two Month</option>
                                       
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Accommodation<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="accommodation">
                                        	<option value="cintern">Cinternship Accommodation Service</option>
                                        	<option value="business">Your internship provides accommodation</option>
                                        	<option value="self">Arrange by yourself</option>
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                                
                                
                            	<li>
                                	<h4>Chinese Level<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="chinese-level">
                                        	<option value = "zero"> Zero</option>
                                        	<option value="elementary">Elementary</option>
                                        	<option value="intermediate">Intermediate</option>
                                        	<option value="Advanced">advanced</option>
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            
                                
                            	<li>
                                	<h4>Resume</h4>
                                    <div class="af-func">
                                    	
                                        <p>The document must be in the following formats:<br> doc, pdf, jpg, png</p>
                                    	<input id = 'resume' type="file" />
                                    	<script>
	                                    	$(function() {							
														$('#resume').uploadify({
															'formData'     : {
																'timestamp' : '<?php echo $timestamp;?>',
																'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
															},
															'swf'      : 'uploadify.swf',
															'uploader' : 'uploadify.php'
														});
											});	
												</script>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Why China and Why intern in the Business of your choice (Up to 150 words)<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<textarea id="essay"></textarea>
                                        <p>Consider including how you think experience in china will help your personal development, what professional exposure you are looking to gain, and how this program will contribute to your overall career goals.</p>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	                                
                            	<li>
                                	<h4>Confirmation</h4>
                                    <div class="af-func">
                                    	<p><label><input type="checkbox" id = 'check1' onclick="checkbox()" />I have checked that my passport has six months validity<span class="color-red">*</span></label></p>
                                    	<p><label><input type="checkbox" id = 'check2' onclick="checkbox()" />I understand that there is a charge for Cinternship accommodation services<span class="color-red">*</span></label></p>
                                    	<p><label><input type="checkbox" id = 'check3' onclick="checkbox()" />I agree to the Terms and Conditions<span class="color-red">*</span></label></p>
                                    	
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                                <li class="af-btn"><input class= 'btn' id = 'submit-button' type="button" value="submit" disabled="true" /></li>
                                
                            </ul>
                        </form>
                        <!--form content end-->
                        
                </div>
                <!--left side end-->
                
                <!--right side-->
                <div class="ct-af-r">
                    
                    <div class="af-faq-block">
                        <h2>Why are we requesting this information?</h2>
                        <p>Applicants must fully complete all the required field to be considered for admission. We need those information to know you better and to help us  match the company that fits you the best.</p>
                        <p>Need more help?Visit our<br>
                        <a class="link-org" href="faq.html">Frequently Asked Questions.</a></p>
                    </div>
                    
                    
                    <div class="af-faq-block af-nline">
                        <h2>Application Deadline</h2>
                        <p>The application deadline for our 2016 program is 6/15/2016.<br><br><b>Please note that there is a fee for our program.</b> This year in order to make sure that we have the most talented participants and meet the need of our cooperating companies, we are only accepting <b>10 students</b> for our 2015 program and those who are accepted will only need to pay <b>$1990(1 month) or $3350(2 months)</b> instead of our regular price of $2990(1 month) and $4950(2 months).
</p>
                    </div>
                    
                    
                </div>
                <!--right side end-->
                
            </div>
			<!--Application Form end-->
        
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