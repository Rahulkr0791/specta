	var email = '';
	var feedback = '';
	
	$('#submit_feed').click(function()
	{
		email = $('#email1').val();
		feedback = $('#feedback').val();

                if(email == '')
                {
                      $('#email1').css({"background":"#afafaf"});
                }
                else if(!checkEmail(email))
                {
                      $('#email1').css({"background":"#afafaf"});
                }
                else if(feedback == '')
                {
                      $('#feedback').css({"background":"#afafaf"});
                }
                else
                {
		    $.ajax({
				url: 'store.php',
				type: 'post',
				data: {'email':email,'feedback':feedback},
				success: function(data)
				{
					alert(data);
				}
		    });
               }
	});


$('#download').click(function()
{
          email = $('#email2').val();

                if(email == '')
                {
                      $('#email2').css({"background":"#afafaf"});
					   
                }
                else if(!checkEmail(email))
                {
                      $('#email2').css({"background":"#afafaf"});
					   
                }
                else
                {
		
               	//	$.ajax({
 				//url:'store.php',
 				//type:'post',
				//data:{'down':email},
				//success: function(data)
				///{
					 window.location = "http://www.specta.in/mka/download/MKA-Setup.exe";
					 self.toggle();
					 
				 
				}
	          	});
               
	
	

$('#email1,#email2').click(function()
{
       $(this).css({"background":"#ffffff"});
});	

$('#feedback').click(function()
{
       $(this).css({"background":"#ffffff"});
});	

$('#more_about').click(function(){
		$('#slide1').ScrollTo({
						duration: 1000,
						easing: 'linear'
			});	
});

$('#mainbox').click(function(){
		$('#slide1').ScrollTo({
						duration: 1000,
						easing: 'linear'
			});	
});


function checkEmail(email) 
{
            var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(!email.match(reEmail))
  {
      return false;
  }

  return true;

 }
	