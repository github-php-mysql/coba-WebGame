jQuery(document).ready(function($){

	if (typeof dwhs_main !== "undefined") {
		$(dwhs_main.dwhs_selector).mouseover(function(){
			PlaySound("dwhs-audio");
		});
		
		$(dwhs_main.dwhs_selector).mouseout(function(){
			StopSound("dwhs-audio");
		});
	}
	
	function PlaySound(soundobj) {
		var thissound=document.getElementById(soundobj);
		thissound.volume = 0.1;
		thissound.play();
		
	}

	function StopSound(soundobj) {
		var thissound=document.getElementById(soundobj);
		thissound.pause();
		thissound.currentTime = 0;
	}
});