
function sidebar_open() {
	var element = document.getElementById("mySidebar");
	 element.classList.add("sidebar-open");
  
	 var ulElement = document.querySelectorAll("#ul > li");

	setTimeout(() => {
	  for(let item of ulElement){
		item.classList.add("item-show")
	  }
	}, 1500);
	
	
}
  
function sidebar_close() {
	var element = document.getElementById("mySidebar");
	element.classList.remove("sidebar-open");
	var ulElement = document.querySelectorAll("#ul > li");

	setTimeout(() => {
		for(let item of ulElement){
		item.classList.remove("item-show")
		}
	}, 1000);
}


function get_bg_color(bg_color) {
	document.getElementById("slider_box").style.background = bg_color.getAttribute('data-color');
}
  
  function mouseOut() {
	document.getElementById("slider_box").style.background = "#2B3242";
  }


  
 