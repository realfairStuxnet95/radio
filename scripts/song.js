$(document).ready(function(){
	$("#song_to_upload").change(function(){
		var file=document.getElementById("song_to_upload").files[0];
		var name = document.getElementById("song_to_upload").files[0].name;
		var ext = name.split('.').pop().toLowerCase();
		var output_name=removeExtension(name);
		  if(jQuery.inArray(ext, ['mp3','wav','ogg']) == -1) 
		  {
	      $("#song_to_upload").val("");
		   alert("Invalid Audio  File");
		   hideDom();
		  }else{
		  	//fill the file information into input areas
		  	$("#song_name").val(output_name);
		  	showDom();
		  }
	});
	$("#acceptTerms").click(function(){
		acceptTerms();
	});
	function acceptTerms(){
		$("#termsDiv").slideUp();
		$("#frm_upload").show();
	}

	function hideDom(){
		$("#btnDiv").hide();
		$("#others").hide();
	}
	function showDom(){
		$("#btnDiv").show();
		$("#others").show();
	}
	$("#frm_upload").submit(function(e){
		e.preventDefault();
		var song_name=$("#song_name").val();
		var description=$("#description").val();
		var category=$("#category").val();
		var user=$("#user").val();
		if(song_name.length>=5 && category.length>0 && user.length>0){
			form_data = new FormData();
			form_data.append("file", document.getElementById("song_to_upload").files[0]);
			form_data.append("song_name",song_name);
			form_data.append("description",description);
			form_data.append("category",category);
			form_data.append("user",user);
		   $.ajax({
		    url:"upload_song",
		    method:"POST",
		    data: form_data,
		    contentType: false,
		    cache: false,
		    processData: false,
		    beforeSend:function(){
		    	showLoader();
		    },   
		    success:function(data)
		    {
		     hideLoader();
		     if(data.match("200")){
		     	alert("Your song successfully Uploaded");
		     	window.location="dashboard?action=my_songs";
		     }else{
		     	alert(data);
		     }
		    }
		   });
		}else{
			alert("Please enter valid data");
		}
	});
});
function removeExtension(filename){
    var lastDotPosition = filename.lastIndexOf(".");
    if (lastDotPosition === -1) return filename;
    else return filename.substr(0, lastDotPosition);
}
function showLoader(){
	$("#loader").show();
	$("#upload_btn").hide();
}
function hideLoader(){
	$("#loader").hide();
	$("#upload_btn").show();
}