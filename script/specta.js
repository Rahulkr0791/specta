// JavaScript Document
var count= 1;
$('document').ready(function (){
	
	
	$("#b,#c,#d").hide();
	
	
	
	
	timer = setInterval(function()
	{	
	
	 if (count == 0)
	 {
		 $("#b,#c,#d").fadeOut(500);
		 $("#a").fadeIn(1000);
		 
		
		 
	 }
		
	 if (count == 1)
	 {
		 $("#a,#c,#d").fadeOut(500);
		 $("#b").fadeIn(1000);
		
		
		
	 }
	
	 if (count == 2)
	 {
		 $("#a,#b,#d").fadeOut(500);
		 $("#c").fadeIn(1000);
		 
	 }
	
	 if (count == 3)
	 {
		 $("#a,#b,#c").fadeOut(500);
		 $("#d").fadeIn(1000);
		 
	 }
		if (count <3)
		 count = count+1;
		else
		count =0;
		
	//alert(count);
		
		
		
		
	},3000);
	
	









var mkacount= 1;

$('document').ready(function (){
	
	
	$("#mkalaptop2,#mkalaptop3").hide();
	
	
	
	
	timer = setInterval(function()
	{	
	
	 if (mkacount == 0)
	 {
		 $("#mkalaptop2,#mkalaptop3").fadeOut(500);
		 $("#mkalaptop1").fadeIn(0);
		 
		
		 
	 }
		
	 if (mkacount == 1)
	 {
		 $("#mkalaptop1,#mkalaptop3").fadeOut(500);
		 $("#mkalaptop2").fadeIn(0);
		
		
		
	 }
	
	 if (mkacount == 2)
	 {
		 $("#mkalaptop1,#mkalaptop2").fadeOut(500);
		 $("#mkalaptop3").fadeIn(0);
		 
	 }
	
	if (mkacount <2)
		 mkacount = mkacount+1;
		else
		mkacount =0;
		
	//alert(count);
		
		
		
		
	},3000);
	


});

	/*
	
	$("#logo").click(function(){
		
		$("#selector").animate({right:"330px"},"slow");
	});

	
	
	$("#homemenu").click(function(){
		
		$("#selector").animate({right:"330px"},"slow");
	});
	
	
	$("#workmenu").click(function(){
		
		$("#selector").animate({right:"235px"},"slow");
	});
	
	$("#aboutmenu").click(function(){
		
		$("#selector").animate({right:"142px"},"slow");
	});
	
	$("#contactmenu").click(function(){
		
		$("#selector").animate({right:"30px"},"slow");
	});
	
	*/
	
	
	
	
	
	
	
	});
	
	///////////////fade in fade out 
	
	$(document).ready(function()
{
	$('#bb').hide();	
	$('#bc').mouseenter(function()
	{
	$(this).fadeOut();
	$('#bb').fadeIn('slow');
	});
	$('#bb').mouseleave(function()
	{
	$(this).fadeOut();
	$('#bc').fadeIn('slow');
	});


	$('#jb').hide();	
	$('#jc').mouseenter(function()
	{
	$(this).fadeOut();
	$('#jb').fadeIn('slow');
	});
	$('#jb').mouseleave(function()
	{
	$(this).fadeOut();
	$('#jc').fadeIn('slow');
	});


	$('#sb').hide();	
	$('#sc').mouseenter(function()
	{
	$(this).fadeOut();
	$('#sb').fadeIn('slow');
	});
	$('#sb').mouseleave(function()
	{
	$(this).fadeOut();
	$('#sc').fadeIn('slow');
	});


	$('#pb').hide();	
	$('#pc').mouseenter(function()
	{
	$(this).fadeOut();
	$('#pb').fadeIn('slow');
	});
	$('#pb').mouseleave(function()
	{
	$(this).fadeOut();
	$('#pc').fadeIn('slow');
	});




    $('#vcont').hide();
	$("#vishal").hover(function(){
		//alert('csacasc');
		  $('#vpic').stop(true, true).hide();
		  $('#vcont').stop(true, true).show();
		}
	,
	function(){
		$('#vcont').stop(true, true).hide();
	    $('#vpic').stop(true, true).show();
		});

	 
	  $('#scont').hide(); 
   	$("#sankalp").hover(function(){
		//alert('csacasc');
		  $('#spic').stop(true, true).hide();
		  $('#scont').stop(true, true).show();
		}
	,
	function(){
		$('#scont').stop(true, true).hide();
	    $('#spic').stop(true, true).show();
		});

	 $('#acont').hide();
	$("#abhishek").hover(function(){
		//alert('csacasc');
		  $('#apic').stop(true, true).hide();
		  $('#acont').stop(true, true).show();
		}
	,
	function(){
		$('#acont').stop(true, true).hide();
	    $('#apic').stop(true, true).show();
		});

	
	  $('#adycont').hide();
	$("#ady").hover(function(){
		//alert('csacasc');
		  $('#adypic').stop(true, true).hide();
		  $('#adycont').stop(true, true).show();
		}
	,
	function(){
		$('#adycont').stop(true, true).hide();
	    $('#adypic').stop(true, true).show();
		});

	
	
	  $('#rcont').hide();
	$("#rahul").hover(function(){
		//alert('csacasc');
		  $('#rpic').stop(true, true).hide();
		  $('#rcont').stop(true, true).show();
		}
	,
	function(){
		$('#rcont').stop(true, true).hide();
	    $('#rpic').stop(true, true).show();
		});
	
	
	


var ur = document.URL;

//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////////// work ////////////

$(document).ready(function()
	{

$('#logo').click(function (){
	$('#home').ScrollTo({
								duration: 1000,
								easing: 'linear'
							});
	});






		
$('#homemenu').click(function (){
	$('#home').ScrollTo({
								duration: 1000,
								easing: 'linear'
							});
	});


$('#workmenu').click(function (){
	$('#work').ScrollTo({
								duration: 1000,
								easing: 'linear'
							});
	});



$('#aboutmenu').click(function (){
	$('#about').ScrollTo({
								duration: 1000,
								easing: 'linear'
							});
	});


$('#contactmenu').click(function (){
	$('#contact').ScrollTo({
								duration: 1000,
								easing: 'linear'
							});
	});

$('#up_arrow').click(function(){
	$('#home').ScrollTo({
								duration: 1000,
								easing: 'linear'
							});
	
	});

	
	});	
});

//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
//////////////////////////////// Up_arrow ////////////

$(document).ready(function ()
{
		
		 
			var docElem = document.documentElement,
				header = document.querySelector( '#up_arrow' ),
				didScroll = false,
				changeHeaderOn = 100;
		 
			function init() {
				
				window.addEventListener( 'scroll', function( event ) {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( scrollPage, 0 );
					}
				}, false );
			}
		 
			function scrollPage() {
				var sy = scrollY();
				
			
				if ( sy >= changeHeaderOn ) {
					$('#up_arrow').fadeIn();
							}
				else {
					$('#up_arrow').fadeOut();
				}
				didScroll = false;
			}
		 
			function scrollY() {
				return window.pageYOffset || docElem.scrollTop;
			}
		 
			init();
		 
	
		
});