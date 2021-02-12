$(document).ready(function(){

loadMenu();

	$('#Menu_BreakFast').click(function(){
		$("#breakfast").removeClass('active');
		$("#lunch").addClass('active');
		$("#dinner").addClass('active');
	});
	$('#Menu_Lunch').click(function(){
		$("#breakfast").addClass('active');
		$("#lunch").removeClass('active');
		$("#dinner").addClass('active');
	});
	$('#Menu_Dinner').click(function(){
		$("#breakfast").addClass('active');
		$("#lunch").addClass('active');
		$("#dinner").removeClass('active');
	});
	$('#Menu_All').click(function(){
		$("#breakfast").removeClass('active');
		$("#lunch").removeClass('active');
		$("#dinner").removeClass('active');
	});
	
	$('nav a').click(function(){
		event.preventDefault();
	});

	$("#intro_Link").click(function(){
		scroll_To_View("intro");
		return false;
	});
	$("#event_Link").click(function(){
		scroll_To_View("event");
		return false;
	});
	$("#Menu_Link").click(function(){
		scroll_To_View("Menu");
		return false;
	});
	$("#contact_Link").click(function(){
		scroll_To_View("contact");
		return false;
	});
	$("#About_Link").click(function(){
		scroll_To_View("About");
		return false;
	});
	$(".logo").click(function(){
		scroll_To_View("banner");
		return false;
	});

});

function scroll_To_View(viewname){
	var view = "#"+viewname;
	//alert(view);
	$('html , body').animate({
		scrollTop: $(view).offset().top
	},2000);
}

function loadMenu(){
  $("#Menu_list").load("front/menu.php");
}