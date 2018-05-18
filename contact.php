
      <script>
   function validate()
				{
							var x = document.forms["myform"]["firstname"].value;
							var reg = /^[A-Za-z]+[A-Za-z\s]+[A-Za-z]$/;
							if(!reg.test(x))
							{
							document.forms["myform"]["firstname"].foucs;
							alert("Name cant be blank or numbers,Please provide your name correctly");
							return false;
							
							}
							
							var x = document.forms["myform"]["lastname"].value;
							var reg = /^[A-Za-z]+[A-Za-z\s]+[A-Za-z]$/;
							if(!reg.test(x))
							{
							document.forms["myform"]["lastname"].foucs;
							alert("Name cant be blank or numbers,Please provide your name correctly");
							return false;
							
							}
							
							var x = document.forms["myform"]["email"].value;
    						var atpos = x.indexOf("@");
							var dotpos = x.lastIndexOf(".");
   						    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
      					  alert("Not a valid e-mail address");
      						  return false;
							}
							var x = document.forms["myform"]["phone"].value;
								var reg = /^[0-9]{10,10}$/;
							if(!reg.test(x))
							{
							document.forms["myform"]["phone"].foucs;
							alert("Phone No Should Be 10 Digit Long");
							return false;
							
							}
				}
				</script>
        


         
         
              <?php
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$body="FirstName:".$firstname."\n"."LatName:".$lastname."\n"."Email:".$email."\n"."Phone Number:".$phone."\n"."Message: \n".$message;
if(mail("berginsrussel@me.ajce.in","Query through Website",$body,"From:".$email))
echo "<p align='center' style='color:green'>Your message has reached destination. We will contact you Shortly</p>";
else
echo "<p align='center' style='color:red'>Damn server!Apologies, but something went wrong.Please try again</p>";
}
?>
        <form method="post" name="myform" onsubmit = "return validate()">
        
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required data-error="Please enter your Firstname">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required data-error="Please enter your Lastname">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Your Message" name="message" rows="4" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>  
                       <div class="submit-button left">
                        <button class="butalen" id="submit" name="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>

        
        </form>

    