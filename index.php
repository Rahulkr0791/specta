<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>Specta | Dream Big</title>

<!-----------------------------------Import Starts-------------------------------->
<link rel="icon" type="image/png" href="index/favico.png">
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script src="script/main-jquery.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="script/jquery.js" type="text/javascript"></script><!-- -->
<script src="script/scroll.js" type="text/javascript"></script><!-- -->
<script type="text/javascript" src="script/jquery.parallax-1.1.3.js"></script><!-- -->
<script type="text/javascript" src="script/jquery.localscroll-1.2.7-min.js"></script><!-- -->
<script src="script/specta.js" type="text/javascript"></script>
<script type="text/javascript" src="script/formoid-default-skyblue.js"></script>
<link rel="stylesheet" href="css/formcss.css" type="text/css" />

<script type="text/javascript">
$(document).ready(function(){
	$('#menu').localScroll(800);
	$('#work').parallax("50%", 0.1);
	$('#contact').parallax("50%", 0.5);
	//$('.bg').parallax("50%", 0.4);
	//$('#third').parallax("50%", 0.3);
})
</script>
<!-- GOOGLE ANALYTICS Tag -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-50431605-1', 'specta.in');
  ga('send', 'pageview');
</script>
<!-- GOOGLE ANALYTICS Tag END -->
</head>
<body>

<div id="menubar" style="height:80px;width:100%;background-color:#FFF;top:0px; z-index:99;position:fixed;">
<div id="selector" style="background-color:#FFF;">
</div>

<script type="text/javascript">
$(document).ready(function () {
	$("#selector").animate({right:"330px"},"slow");
    var $horizontal = $('#selector');
    $(window).scroll(function () {
        var s = $(this).scrollTop(),
            d = $(document).height(),
            c = $(this).height();
        scrollPercent = (s / (d - c));
        var position = (scrollPercent * ($(document).width() - $horizontal.width()));
        $horizontal.css({
           'left': position/4
        });
    });
});
</script>

<img id="logo" src="images/specta_small.png" width="113" height="80" style="cursor:pointer;"/>
<ul id="menu">
<li id="homemenu" style="cursor:pointer;">Home</li>
<li id="workmenu" style="cursor:pointer;">Products</li>
<li id="aboutmenu" style="cursor:pointer;">About</li>
<li id="contactmenu" style="cursor:pointer;">Contact</li>
</ul>
</div>
<!--------------------------Menubar Div Ends---------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<!------------------------------------------------Home Div starts---------------------------------------- -->
<div align="center" id="home" style="width:100%; background-color:#FFF;">
<!-------------------------SlideShow Div starts---------------->
    <div style="height:110px; width:50px;">
    </div>
    <div id="slideshow" style="position:relative; width:800px; background-color:#FFF;">
              
                 <!--------------------- slide 1 Steve Jobs------------------>
                <div id="a">
                    <div id="colorlegs" class="plot">
                        <img id="sc" src="images/stevecolor_min.png" />
                    </div>
                    <div id="bwlegs" class="plot">
                        <img id="sb" src="images/steveblack.png" />
                    </div>
                </div>

                <!----------------------------------------------------------->
                <!--------------------- slide 2 John Lenon ------------------>
                <!----------------------------------------------------------->
                <div id="b">
                    <div id="colorlegs" class="plot">
                        <img id="jc" src="images/johncolor_min.png" />
                    </div>
                    <div id="bwlegs" class="plot">
                        <img id="jb" src="images/johnblack.png" />
                    </div>
                </div>
                <!--------------------- slide 3 Pablo Picaso------------------>
                <div id="c">
                    <div id="colorlegs" class="plot">
                        <img id="pc" src="images/pablocolor_min.png" />
                    </div>
                    
                    <div id="bwlegs" class="plot">
                        <img id="pb" src="images/pabloblack.png" />
                    </div>
                </div>
                 <!--------------------- slide 4 Bill Gates ------------------>
                <div id="d">
                    <div id="colorlegs" class="plot" style="position:absolute; left:143px; top:5px;">
                        <img id="bc" src="images/bill color_min.png" />
                    </div>
                    <div id="bwlegs" class="plot" style="position:absolute; left:143px; top:5px;">
                        <img id="bb" src="images/bill black.png" />
                    </div>
                </div>



              
    </div>
    <div style="height:600px; width:50px;">
    </div>
<!-------------------------SlideShow Div ends---------------->
</div>
<!-------------------------Home Div ends--------------------------->
<!-------------------------Woek Div starts------------------------->
<!---------------work div starts------------>
<div align="center" id="work">
  <!-----------mka div starts ---->	
    <div style="height:90px;">
    </div>
  	<table style="position:relative; left:50px;" border="0" bordercolor="#003333">
    	<tr>
       	  <td>
            <div id="macbook" style=" position:relative; width:779px; height:420px; background-image:url(images/Macbook.png); 
            top:10px; left:-15px;">
                    <!--------------------- slide 1 ------------------>
                    <div id="mkalaptop1">
                        <div id="colorlegs" class="mkawork">
                            <img src="images/walkscreen.png" style="position:absolute; z-index:1; width:534px; height:328px; left:122px; top:27px;" />    
                        </div>
                    </div>
                    <!--------------------- slide 2 ------------------>
                    <div id="mkalaptop2">
                        <div id="colorlegs" class="mkawork">
                            <img src="images/water screen.png" style="position:absolute; z-index:1; width:534px; height:328px;left:122px; top:27px;" />    
                        </div>
                    </div>
                    <!-------------------Slide 3-------------------------->
                    <div id="mkalaptop3">
                        <div id="colorlegs" class="mkawork">
                            <img src="images/eye screen.png" style="position:absolute; z-index:1; width:534px; height:328px;left:122px; top:27px;" />    
                        </div>
                    </div>
            </div>
          </td>
          <td style="left:-80px; top:-10px; position:relative;" width="310px">
            <div id="mkatext" style="position:relative; background-color:#F7F7F7; ">
                    <img src="images/mkalogo.png" width="180px" style="position:relative;" />
                    <div style="height:15px; width:30px;">
                    </div>
                    <div style="position:relative; text-align:left; line-height:23px; font-family: 'Open Sans Regular';">
                    MKA (Ma-Ki-Aankh) is an application aiming to improve your health 
                    related issues caused by sitting in front of computers for long hours via reminders.
                    </div>
                    <div style="height:10px; width:30px;">
                    </div>
                    <table>
                    	<tr>
                        	<td>
                    <div id="readmore">
                       <a id="readmore" href="http://www.getmka.in" target="_blank">Read more</a>
                    </div>
                            </td>
                            <td>
                    <div id="download">
                       <a id="download" href="http://www.specta.in/mka/index.html#download" target="_blank">Download</a>
                    </div>
                            </td>
                        </tr>
                    </table>
             </div> 
          </td>
        </tr>
    </table>
      <!-----------mka div ends ---->
    <div style="height:90px; width:50px;">
    </div>
  </div>
<!---------------work div ends------------>
<!------about div starts---------------------------->
<div align="center" id="about">
    <div style="height:90px; width:50px;">
    </div>
       <table cellpadding="5px">
          <tr>
            <td>
            <div style="height:2px; background-color:#000; width:200px;"></div>
            </td>
            <td>
            <div align="center" style="font-size:62px; font-family:'Open Sans Regular';">SPECTA</div>
            </td>
            <td>
            <div style="height:2px; background-color:#000; width:200px;"></div>
            </td>
          </tr>
       </table>
    <div style="height:10px; width:50px;">
    </div>
    <div style="width:50%;">
        <div style="line-height: 25px; font-size: 17px; text-align:center; font-family:'Open Sans Regular'; ">
Jobs, Gates, Lennon, Picasso and others dared to see the world differently. They became the difference to bring the change. They inspired the world and the way we live our lives. And, people like them are our role models.<br />
    <div style="height:20px; width:50px;">
    </div>
We are a Delhi based startup but we don’t intend to be just another start up. We are young, crazy, and determined to make this world a more beautiful and better place to live in by contributing the difference through technology.<br />
    <div style="height:20px; width:50px;">
    </div>
Apart from our own projects, we love ideas and love working with people from various disciplines and cultures. Be it code, design or electronics - we are game for anything and everything that excites us. We are not here to just work. We are here to imagine, innovate and invent.<br />
        </div>
	</div>  
    <div style="height:50px;">
    </div>
       <table cellpadding="5px">
          <tr>
            <td>
            <div style="height:2px; background-color:#000; width:280px;"></div>
            </td>
            <td>
            <div align="center" style="font-size:62px; font-family:'Open Sans Regular';">TEAM</div>
            </td>
            <td>
            <div style="height:2px; background-color:#000; width:280px;"></div>
            </td>
          </tr>
       </table>
    <div style="height:10px; width:50px;">
    </div>
      <table style="width:800px;">
        <tr>
            <td id="ady" width="160px" align="center">
                    <img id="adypic" height="100px" src="images/ady.png" style="display:inline; cursor:pointer;"/>
				<a href="https://www.facebook.com/divya.aditya91" target="_blank">
                    <img id="adycont" src="images/ady fb.png" style="cursor:pointer;"/>
                </a>
                <p>
                    <strong style="text-align:center;">Aditya</strong><br /> 
                    Web developer
                </p>
            </td>
            <td id="sankalp" width="160px" align="center">
                    <img id="spic" height="100px" src="images/sankalp.png" style="display:inline; cursor:pointer;"/>
                <a href="http://www.sankalpsinha.com/" target="_blank">
                    <img id="scont" src="images/sankalp website.png" style="cursor:pointer;"/>
                </a>
                <p>
                    <strong style="text-align:center;">Sankalp</strong><br /> 
                    UI/UX Designer
                </p>
             </td>
            <td id="vishal" width="180px" align="center">
                    <img id="vpic" height="100px" src="images/vishal.png" style="display:inline; cursor:pointer;"/>
                <a href="mailto:vishal@specta.in?subject=Hello" target="_blank" style="color:white;">  
                    <img id="vcont" src="images/vishal email.png" style="cursor:pointer;"/>
                </a>
                <p>
                    <strong style="text-align:center;">Vishal</strong><br /> 
                    Application Developer
                </p>
             </td>
            <td id="rahul" width="160px" align="center">
                    <img id="rpic" height="100px" src="images/rahul.png" style="display:inline; cursor:pointer;"/>
                <a href="https://www.facebook.com/goodrahstar" target="_blank"> 
                    <img id="rcont" src="images/rahul fb.png" style="cursor:pointer;"/>
                </a>
                <p>
                    <strong style="text-align:center;">Rahul</strong><br /> 
                    Researcher
                </p>
             </td>
            <td id="abhishek" width="160px" align="center">
                   <img id="apic" height="100px" src ="images/apic.png" style="display:inline; cursor:pointer;"/>
               <a href="mailto:abhishek@specta.in?subject=Hello" target="_blank"> 
                   <img id="acont" src="images/apic email.png" style="cursor:pointer;"/>
               </a>
                <p>
                    <strong style="text-align:center;">Abhishek</strong><br /> 
                    Hardware Developer
                </p>
             </td>
        </tr>
     </table>
    <div style="height:90px;">
    </div>
    </div>
</div>
<!------about div ends------------------------------------>
<!-------contact div starts------------------------------>
<div align="center" id="contact">
	<div style="height:120px; width:50px;">
    </div>
     <table style="width:1000px;">
    	<tr>
       	  <td align="center"  style="font-size:58px; color:#FFF;">
          Dreaming something big? Let's talk.
          </td>
        </tr>
     </table>	 
	<div style="height:40px;  width:50px;">
    </div>
    <table style="width:1000px;">
    	<tr>
       	    <td align="center" width="500px" height="300px"  style="font-size:62px; color:#FFF;">
          	  <div style="height:100px;  width:50px;">
			  </div>
              <img src="images/email.png" style="position:relative;left:-120px; top:35px;" height="50" width="70" />
              <img src="images/phone.png" style="position:relative;left:-200px; top:-50px;" height="100" width="60" / >
              <div style="font-size:30px; position:relative;top:-165px; left:20px;">(+91)&nbsp;880-068-9759</br>(+91)&nbsp;808-721-4508</div>
              <a href="mailto:hello@specta.in?subject=Hello" target="_blank" style="color:white; font-size:30px; position:relative; top:-112px;">hello@specta.in</a>
              
              
             <table style="top: -80px;position: relative;left: -117px;" cellspacing="5px">
                <tr>
                    <td>
                    <a href="https://www.facebook.com/Specta.dream.big" target="_blank">
                    <img width="60px" src="images/facebook.png" />
                    </a>
                    </td>
                    <td>
                    <a href="https://plus.google.com/116178587030720708753"  target="_blank">
                    <img width="60px" src="images/google.png" />
                    </a>
                    </td>
                </tr>
             </table>

            </td>
            <td align="center" >
            <div id="message">
         <?php
		 /*
                if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                echo $message;
                $con=mysqli_connect("localhost","spectam","spectadb","spectadb");
                // Check connection
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $sql="INSERT INTO dropmessage(name,email,message) VALUES ('$name','$email','$message')";
                if (!mysqli_query($con,$sql))
                {
                  die('Error: ' . mysqli_error($con));
                }

                mysqli_close($con);
                } else { */?>
                   <form class="formoid-default-skyblue" method="post" action="">
                   <table>
                   		<tr>
                        	<td>
                            <div style="height:1px; background-color:#FFF; width:60px;"></div>
                            </td>
                            <td style="padding-left:10px; padding-right:10px;">
                            <div style="font-size:30px; color:#FFF;" class="title">Drop a message</div>                            
                            </td>
                        	<td>
                            <div style="height:1px; background-color:#FFF; width:60px;"></div>
                            </td>
                        </tr>
                   </table>
			   <div class="element-input" ><label class="title"></label><input class="large" type="text" placeholder="Your name" name="name"  /></div>
			   <div class="element-email" ><label class="title"></label><input class="large" type="email" placeholder="Email-id" name="email" /></div>
			   <div class="element-textarea" ><label class="title"></label><textarea style="height: 130px;" class="medium" name="message" placeholder="Enter your Message" ></textarea>
                           
			   <div class="submit"><input style="width:365px; height:40px; font-family:Open Sans Regular; left:0px; top:7px;" type="submit" value="Submit" name="submit" onclick="myFunction()"/></div>
       </form>
       <div style="height:50px; width:10px;"></div>
       <script type="text/javascript">
		function myFunction()
		{
		alert('Thank you! We will contact you soon. ');
		}
		</script>
                  
            <?php /*} */?>
            </div>
            </td>
        </tr>
     </table>
	<div style="height:10px; width:50px;">
    </div>
</div>
<!-------contact div ends------------------------------>
<!-------footer div starts------------------------------>
<!-----------------------------------LAST BAR DIV-------------------------->
     <div id="lastbarback"> 
          <div align="center">
                 <div style="height:20px; width:50px;">
                 </div>
                 <font style="font-family:'Open Sans Light'; font-size:24px;">
                   <table cellpadding="2px">
                      <tr>
                        <td>
                        <div style="height:1px; background-color:#333; width:110px;"></div>
                        </td>
                        <td>
                        In association with
                        </td>
                        <td>
                        <div style="height:1px; background-color:#333; width:110px;"></div>
                        </td>
                      </tr>
                   </table>
                 </font>
                 <table cellpadding="10px">
                    <tr>
                      <td>
                      <a href="http://www.getmka.in" class="linkall" target="_blank">
                      <img width="75px" src="images/logo1-mka.png" />
                      </a>
                      </td>
                      <td>
                      <a href="http://www.sankalpsinha.com" class="linkall" target="_blank">
                      <img width="140px" src="images/logo2-sankalpsinha.png" />
                      </a>
                      </td>
                      <td>
                      <a href="http://www.bakecss.com" class="linkall" target="_blank">
                      <img width="100px" src="images/logo3-bakecss.png" />
                      </a>
                      </td>
                      <td>
                      <a href="http://www.letwallinspire.com" class="linkall" target="_blank">
                      <img width="70px" src="images/logo4-letwallinspire.png" />
                      </a>
                      </td>
                    </tr>
                 </table>
                 <font style="font-family:'Open Sans Regular'; font-size:12.5px; line-height:17px;">
                 All rights reserved | &#169; Specta 2014 | Don't produce any of the works without written consent.
                 </font>
                 <div style="height:20px; width:50px;">
                 </div>
          </div>  
     </div>  
<!-----------------------------------LAST BAR DIV CLOSE-------------------->
<!-------footer div ends------------------------------>
</body>
</html>