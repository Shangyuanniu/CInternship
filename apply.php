<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>APPLY NOW</title>
    <link rel="stylesheet" href="./css/main.css"/>
    <link rel="stylesheet" href="./css/button.css"/>
    <script type="text/javascript" src="./js/jquery.js"></script>
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
	    $(document).ready(function(){
            $("#firstname").blur(function(){
                var parent = $(this).parent();
                parent.find('#tip').remove();
                var firstname = $(this).val();
                var name_regx = new RegExp('^[A-z]+$');
                var name_validate = name_regx.test(firstname);
                if (!name_validate){
                    parent.append('<p class="color-red" id="tip">Please enter a valid firstname</p>')
                    $(this).css('border-color', '#C03');
                }
                else{
                    $(this).css('border-color', "")
                }
            });
            $("#lastname").blur(function(){
                var parent = $(this).parent();
                parent.find('#tip').remove();
                var lastname = $(this).val();
                var name_regx = new RegExp('^[A-z]+$');
                var name_validate = name_regx.test(lastname);
                if (!name_validate){
                    parent.append('<p class="color-red" id="tip">Please enter a valid lastname</p>')
                    $(this).css('border-color', '#C03');
                }
                else{
                    $(this).css('border-color', "")
                }
                
            });
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
				if (!mail_validate){
                    parent.append('<p class="color-red" id="tip"> Please enter the correct email address</p>')
					$(this).css('border-color', '#C03');
				}
				else{
					$(this).css('border-color', "")
				}
			});  
	    });
    </script>
</head>

<!--body-->
<body>

	<!--doc-->
    <div class="g-doc">
    
		<?php include 'includes/header.php';?>
        
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
                    	<form class="ct-af-content" method="post" enctype="multipart/form-data" action ="upload.php">
                        	<ul>
                            
                            	<li>
                                	<h4>First Name<span class="color-red">*</span></h4>
                                    <div class="af-func" >
                                    	<input type="text" id="firstname" name="firstname" required/>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                                <li>
                                    <h4>Last Name<span class="color-red">*</span></h4>
                                    <div class="af-func" >
                                        <input type="text" id="lastname" name="lastname" required/>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Phone Number<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<input id ='phone' name="phone" type="text" required/>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Email Address<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<input type="email" name="email" id="email" required/>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                                                
                            	
                                
                            	<li>
                                	<h4>I am applying for internship at<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="internship" name="internship">
                                        	<option value="syncapital">Syncapital</option>
                                            <option value="LonghuaSchool">Longhua Experimental Chinese-English School</option>
                                            <option value="FTApps">FTApps</option>
                                            <option value="Foothill">Foothill Education Club</option>
                                            <option value="AOKTechCustomer">AOK Technoloiges:Costomer Relation</option>
                                            <option value="AOKTechProduct">AOK Technoloiges:Product R&D</option>
                                        </select>

                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                                <li>
                                	<h4>Duration<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                    	<select id="duration" name="duration">
                                        	<option value="one-month">4 weeks</option>
                                        	<option value="two-month">8 weeks</option>
                                            <option value="two-month">10 weeks</option>
                                       
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Accommodation<span class="color-red">*</span></h4>
                                    <div class="af-func">
                                         <p>*Note that if you are applying for internship at Longhua Experimental School, you are provided with free housing.</p>
                                    	<select id="accommodation" name="accommodation">
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
                                    	<select id="chinese-level" name = "chinese">
                                        	<option value = "zero">Zero</option>
                                        	<option value="elementary">Elementary</option>
                                        	<option value="intermediate">Intermediate</option>
                                        	<option value="advanced">Advanced</option>
                                        </select>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            
                                
                            	<li>
                                	<h4>Resume</h4>
                                    <div class="af-func">
                                        <p>The document must be in <span style="font-weight:bold;text-decoration:underline;color:red">PDF</span> format:</p>
                                    	<input id='resume' type="file" name="resume" accept=".pdf" />
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	<li>
                                	<h4>Why China and Why intern in the Business of your choice (Up to 150 words)<span class="color-red"></span></h4>
                                    <div class="af-func">
                                    	<textarea id="essay" name="essay" required></textarea>
                                        <p>Consider including how you think experience in china will help your personal development, what professional exposure you are looking to gain, and how this program will contribute to your overall career goals.</p>
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                            	                                
                            	<li>
                                	<h4>Confirmation</h4>
                                    <div class="af-func">
                                    	<p><label><input type="checkbox" id = 'check1' onclick="checkbox()" />I have checked that my passport has six months validity<span class="color-red">*</span></label></p>
                                    	<p><label><input type="checkbox" id = 'check2' onclick="checkbox()" />I understand that there is a charge for Cinternship accommodation services<span class="color-red">*</span></label></p>
                                    	<p><label><input type="checkbox" id = 'check3' onclick="checkbox()" />I agree to the <a href = "Cinternship Terms and Conditions.pdf" target = "_blank"><span style = "color:blue; text-decoration:underline;">Terms and Conditions</span></a><span class="color-red">*</span></label></p>
                                    	
                                    </div>
                                    <p class="color-red"></p>
                                </li>
                                
                                <li class="af-btn"><input type="submit" name ="submit" value="submit" class='btn' id='submit-button' disabled="true"/></li>
                                
                            </ul>
                        </form>
                        <!--form content end-->
                        
                </div>
                <!--left side end-->
                
                <!--right side-->
                <div class="ct-af-r">
                    
                    <div class="af-faq-block">
                        <h2>Why are we requesting this information?</h2>
                        <p>Applicants must fully complete all the required field to be considered for admission. We need those information to know you better and to help us match the company that fits you the best.</p>
                        <p>Need more help?Visit our<br>
                        <a class="link-org" href="faq.html">Frequently Asked Questions.</a></p>
                    </div>
                    
                    
                    <div class="af-faq-block af-nline">
                        <h2>Application Deadline</h2>
                        <p>The application deadline for our 2016 program is 6/15/2016.<br><br><!-- <b>Please note that there is a fee for our program.</b> This year in order to make sure that we have the most talented participants and meet the need of our cooperating companies, we are only accepting <b>10 students</b> for our 2015 program and those who are accepted will only need to pay <b>$1990(1 month) or $3350(2 months)</b> instead of our regular price of $2990(1 month) and $4950(2 months). -->
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
    <?php include 'includes/footer.php';?>
	

</body>
<!--dody end-->
</html>