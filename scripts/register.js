$(document).ready(function(){
	var url="register_user";
	var redirectUrl="dashboard";

	$("#readTerms").click(function(){
		//alert();
	});
	$("#frm_register").submit(function(e){
		e.preventDefault();
		var names=$("#names").val();
		var email=$("#email").val();
		var phone=$("#phone").val();
		var password=$("#password").val();
		var cpassword=$("#cpassword").val();
		if(check_phone(phone)){
		if(password.length>=6){
			if(confirmPassword(password,cpassword)){
				if(names.length>=3){
					if(ValidateEmail(email)){
						$("#loader").show();
						$.post(url,{
							names:names,
							email:email,
							password:password,
							phone:phone
						},function(data){
							$("#loader").hide();
							if(data.match("200")){
								alert("Successfully registered");
								window.location=redirectUrl;
							}else{
								displayErrors(data);
							}
							
						});
					}else{
						displayErrors("Enter valid email !!!");
					}
				}else{
					displayErrors("Names must be above 3 characters");
				}
			}else{
				displayErrors("Password do not match");
			}
		}else{
			displayErrors("password must be 6 characters or above");
		}
		}else{
			displayErrors("Please enter valid phone we can contact");
		}
	});
});

function displayErrors(str){
	$("#errors").show();
	$("#errors").html(str);
}