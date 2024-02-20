function getScrollbarWidth() {
    // Create a div element with a width larger than its content
    const scrollDiv = document.createElement("div");
    scrollDiv.style.cssText = "width: 100px; height: 100px; overflow: scroll; position: absolute; top: -9999px;";
    document.body.appendChild(scrollDiv);
    
    // Calculate the scrollbar width
    const scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
    
    // Remove the div
    document.body.removeChild(scrollDiv);
    
    return scrollbarWidth;
}

function sidebar_open() {
    const scrollbarWidth = getScrollbarWidth();
    $(".main-content").css("paddingRight", scrollbarWidth + "px"); // Adjust padding for main content dynamically
    $("body").css("overflow", "hidden"); // Prevent scrolling on the body
    $("#mySidebar").addClass("sidebar-open"); // Add class to open the sidebar
  
    // Add item-show class to sidebar items after a delay
    setTimeout(function() {
        $("#ul").children().addClass("item-show");
    }, 2000);
}

  
function sidebar_close() {
	$(".main-content").css("paddingRight", "0px"); 
	document.body.style.overflow = "";
	var element = document.getElementById("mySidebar");
	element.classList.remove("sidebar-open");
	var ulElement = document.getElementById("ul").children

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

