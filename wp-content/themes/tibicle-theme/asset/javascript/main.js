function sidebar_open() {
	var element = document.getElementById("mySidebar");
	 element.classList.add("sidebar-open");
  
	var ulElement = document.getElementById("ul").children
	setTimeout(() => {
	  for(let item of ulElement){
		item.classList.add("item-show")
	  }
	}, 2000);
	
	
}
  
function sidebar_close() {
	var element = document.getElementById("mySidebar");
	element.classList.remove("sidebar-open");
	var ulElement = document.getElementById("ul").children

	setTimeout(() => {
		for(let item of ulElement){
		item.classList.remove("item-show")
		}
	}, 1000);
}


  function mouseOver() {
	document.getElementById("demo").style.background = "#B4B0FF";
  }
  
  function mouseOut() {
	document.getElementById("demo").style.background = "#2B3242";
  }
