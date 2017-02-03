// JavaScript Document Coded by: 5pyw4r3 3mm4n 54lv4l30n (websprove@gmail.com) / Niknok Boy... */ 
$(document).ready(function(){  

	=
   // Login Function
   $(".login").click(function(){ 
        username=$("#username").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "login.php",
            data: "username="+username+"&password="+password, 
            success: function(html){
              if(html=='true')
              { 
               	$("#add_err").html("<div id='msg_1' class='success_msg_003'><img src='imgs/loading.gif' style='vertical-align:middle;'/> Logging in...</div>");
				top.location.href = 'pages/';
              }else if(html=='empty')
              {
               		$("#add_err").html("<div id='msg_1' class='error_msg_003'><div id='image' class='msg_003_image'></div> Empty username or password</div>");
              }
              else
              {
                    $("#add_err").html("<div id='msg_1' class='error_msg_003'><div id='image' class='msg_003_image'></div> Wrong username or password</div>");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").append('<img src="assets/img/loading.gif">').fadeIn(1000);
            }
        });
         return false;
    });  
	 
	 