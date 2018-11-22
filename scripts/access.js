$(document).ready(function(){
	var url="save/user_login.php";
	var redirectUrl="dashboard";
	$("#frm_login").submit(function(e){
		e.preventDefault();
		var email=$("#email").val();
		var password=$("#password").val();
		if(ValidateEmail(email)){
			if(password.length>=6){
				$.post("login_user",{
					email:email,
					password:password
				},function(data){
					if(data.match("200")){
						window.location=redirectUrl;
					}else{
						displayErrors(data);
					}
				});
			}else{
				displayErrors("password must be 6 characters or above");
			}
		}else{
			displayErrors("Enter valid email !!!");
		}
	});
});
function displayErrors(str){
	$("#errors").show();
	$("#errors").html(str);
}