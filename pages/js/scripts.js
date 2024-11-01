

function _get_page(page){
    $('#more-info').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
    action='get_page';
    var dataString ='action='+ action+'&page='+ page;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){
        $('#more-info').html(html);
    }
    });
}

function _alert_close() {
    $('#get-more-div').fadeOut(500);
}



function _next_page(next_id) {
$('.login-div').hide();
$('#'+next_id).fadeIn(1000);
}


function _next_page(next_id) {
    $('.login-div').hide();
    $('#'+next_id).fadeIn(1000);
}  



function _sign_in(){ 
    var email = $('#email').val();
    var password = $('#password').val();
    if((email!='')&&(password!='')){
        user_login(email,password);
    }else{
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> LOGIN ERROR! <br /> <span>Fill all fields to continue</span>').fadeIn(300).delay(5000).fadeOut(100);
    }
};


function myFunction() {
	var x = document.getElementById("password");
	if (x.type === "password") {
	  x.type = "text";
	} else {
	  x.type = "password";
	  $('#hide').addClass("bi bi-eye-slash-fill");
  
	}
}


function _togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const togglePasswordIcon = document.getElementById('togglePassword');
  
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      togglePasswordIcon.innerHTML = '<i class="bi-eye-slash"style="cursor: pointer;" name="Hide"></i>';
    } else {
      passwordInput.type = 'password';
      togglePasswordIcon.innerHTML = '<i class="bi-eye"style="cursor: pointer;" name="Show"></i>';
    }
  }


function sign_up_() {
    var semail = $('#semail').val();
    var password = $('#r_password').val();
    var cpassword = $('#r_password').val();
    var phonenumber = $('#phonenumber').val();
    var fullname = $('#fullname').val();

    // Validate that all required fields are filled
    if (fullname === '' || semail === '' || phonenumber === '' || password === '' || cpassword === '') {
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Fields cant be empty <br /><span>Fill in all the required fields</span>').fadeIn(300).delay(5000).fadeOut(100);
    } else if (!isValidEmail(semail)) {
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Invalid email format').fadeIn(300).delay(5000).fadeOut(100);
    } else if (password !== cpassword) {
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Passwords do not match').fadeIn(300).delay(5000).fadeOut(100);
    } else if (!isValidPhoneNumber(phonenumber)) {
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Invalid phone number format').fadeIn(300).delay(5000).fadeOut(100);
    } else {
        // All validations passed, proceed with sign-up process
        sign_up(semail, password, fullname, phonenumber, cpassword);
    }
}

// Function to validate email format
function isValidEmail(semail) {
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(semail);
}

// Function to validate phone number format (example format: +1234567890)
function isValidPhoneNumber(phoneNumber) {
    var phonePattern = /^\+\d{10,}$/;
    return phonePattern.test(phoneNumber);
}


///////////////////// user login ///////////////////////////////////////////
function user_login(email,password){
    var action='login_check';
    
   //////////////// get btn text ////////////////
   var btn_text=$('#login_btn').html();
   $('#login_btn').html('Authenticating...');
   document.getElementById('login_btn').disabled=true;
   ////////////////////////////////////////////////	
    
    var dataString ='action='+ action+'&email='+ email + '&password='+ password;
   
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   dataType: 'json',
   cache: false,
   success: function(data){
    var scheck = data.check;

   if(scheck==1){
    $('#success-div').html('<div><i class="bi-check"></i></div> LOGIN SUCCESSFUL! <br /><span>Redirecting to the portal</span>').fadeIn(300).delay(5000).fadeOut(100);
    $('#loginform').submit();
   }else if(scheck==2){
           $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>ACCOUNT SUSPENDED<br /><span>Contact the admin for help</span>').fadeIn(300).delay(5000).fadeOut(100);
    }else{
    $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> INVALID LOGIN PARAMETERS!<br /><span>Check login parameters or Sign-up </span>').fadeIn(300).delay(5000).fadeOut(100);

    }
    $('#login_btn').html(btn_text);
    document.getElementById('login_btn').disabled=false;
       $('#login_btn').html('<i class="fa fa-sign-in"></i> Log-In');
   }
   });
}




///////////////////// user sign-up ///////////////////////////////////////////
function sign_up(semail, password, fullname, phonenumber, cpassword) {
    var action = 'sign_up_check';

    // Store the original text of the sign-up button
    var btn_text = $('#sign_up_btn').html();

    // Disable the sign-up button and display a loading message
    $('#sign_up_btn').html('Authenticating...');
    document.getElementById('sign_up_btn').disabled = true;

    var dataString = 'action=' + action + '&semail=' + semail + '&password=' + password + '&fullname=' + fullname + '&phonenumber=' + phonenumber + '&cpassword=' + cpassword;

    $.ajax({
        type: 'POST',
        url: 'config/code.php',
        data: dataString,
        dataType: 'json',
        cache: false,
        success: function(data) {
            var scheck = data.check;

            if (scheck === 1) {
                $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>This Email Account Exists<br /><span>Contact the admin for help</span>')
                                 .fadeIn(300)
                                 .delay(5000)
                                 .fadeOut(100);
            } else if (scheck === 2) {
                $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Account Suspended<br /><span>Contact the admin for help</span>')
                                 .fadeIn(300)
                                 .delay(5000)
                                 .fadeOut(100);
            } else {
                // Submit the sign-up form and display success message
                $('#signupform').submit();
                $('#success-div').html('<div><i class="bi-exclamation-triangle"></i></div> Sign-Up SUCCESSFUL!')
                                 .fadeIn(300)
                                 .delay(5000)
                                 .fadeOut(100);
            }

            // Restore the original sign-up button state
            $('#sign_up_btn').html(btn_text);
            document.getElementById('sign_up_btn').disabled = false;
            $('#sign_up_btn').html('<i class="fa fa-sign-up"></i> Sign-Up');
        }
    });
}



function _proceed_reset_password(){
    var email = $('#reset_password_email').val();
    if((email=='')||(email.indexOf('@')<=0)){
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>Email Error! <br /><span>Fill this field to continue</span>').fadeIn(300).delay(5000).fadeOut(100);
    }else{
   //////////////// get btn text ////////////////
   var btn_text=$('#reset_pwd_btn').html();
   $('#reset_pwd_btn').html('Processing...');
   document.getElementById('reset_pwd_btn').disabled=true;
   ////////////////////////////////////////////////	
    
    var action='proceed_reset_password';
    var dataString ='action='+ action+'&email='+ email;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    dataType: 'json',
    cache: false,
    success: function(data){
            var scheck = data.check;
            var staff_id = data.staff_id;
              
            if(scheck==1){ //user Active
                _reset_password(staff_id);
            }else if(scheck==2){ //user suspended
                $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ACCOUNT SUSPENDED <br /><span>Contact the admin for help</span>').fadeIn(300).delay(5000).fadeOut(100);
            }else{
                $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ACCOUNT NOT EXIST <br /><span>Check your email or Sign-up</span>').fadeIn(300).delay(5000).fadeOut(100);

            }
            $('#reset_pwd_btn').html(btn_text);
            document.getElementById('reset_pwd_btn').disabled=false;
   }
   });
   }
}



function _reset_password(staff_id){
    var action='reset_password';
    $('#get-more-div').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(300);
    var dataString ='action='+ action+'&staff_id='+ staff_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){
        $('#get-more-div').html(html);
    }
    });
}





function _check_password(){
	var password = $('#r_password').val();
	if (password==''){
    $('#pswd_info').hide();
    $('.pswd_info').fadeIn(300);
	}else{
    $('.pswd_info').hide();
		if(password.length<8){
			 $('#pswd_info').fadeIn(300);
		}else{
			if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) {
				$('#pswd_info').hide();
			  } else {
				 $('#pswd_info').fadeIn(300);
			  }
		}
	}
}





function _finish_reset_password(staff_id){
    var otp = $('#cotp').val();
    var password = $('#r_password').val();
    var cpassword = $('#r_cpassword').val();
    
    if((otp=='')||(password=='')||(cpassword=='')){
        $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Fill All Fields<br /><span>Fields cannot be empty</span>').fadeIn(300).delay(5000).fadeOut(100);
    }else{
        
            if(password!=cpassword){
                $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> Password NOT Match<br /><span>Check the password and try again</span>').fadeIn(300).delay(5000).fadeOut(100);
            }else{
            if ((password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/))&&(password.length>=8)) {
    //////////////// get btn text ////////////////
            var btn_text=$('#finish-reset-btn').html();
            $('#finish-reset-btn').html('PROCESSING...');
            document.getElementById('finish-reset-btn').disabled=true;
    ////////////////////////////////////////////////	
        var action='finish_reset_password';
        var dataString ='action='+ action+'&staff_id='+ staff_id+'&otp='+ otp+'&password='+ password;
            $.ajax({
            type: "POST",
            url: "config/code.php",
            data: dataString,
            cache: false,
            dataType: 'json',
            cache: false,
            success: function(data){
            var scheck = data.check;
            if(scheck==1){
                _password_reset_completed(staff_id);
            }else{
                $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> INVALID OTP<br /><span>Check the OTP and try again</span>').fadeIn(300).delay(5000).fadeOut(100);
            $('#finish-reset-btn').html(btn_text);
            document.getElementById('finish-reset-btn').disabled=false;
            }
            }
        });
            }else{
            $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Password Error!<br><span>Check your password and try again</span>').fadeIn(300).delay(5000).fadeOut(100);
              }
        
            }
    }
}



function _password_reset_completed(staff_id){
    var action='password_reset_completed';
    $('#next_2').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(300);
    var dataString ='action='+ action+'&staff_id='+ staff_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){$('#next_2').html(html);}
    });
}



 
function _resend_otp(ids,staff_id){
    var btn_text=$('#'+ids).html();
    $('#'+ids).html('SENDING...');
    var action='resend_otp';
    var dataString ='action='+ action+'&staff_id='+ staff_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){
            $('#success-div').html('<div><i class="bi-check"></i></div> OTP SENT<br /><span>Check your email inbox or spam</span>').fadeIn(300).delay(5000).fadeOut(100);
        $('#'+ids).html(btn_text);
    }
});
}



