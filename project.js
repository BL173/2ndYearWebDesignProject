window.onscroll = function() {stickyHeader()};

var header = document.getElementById("headerBar");
var sticky = header.offsetTop;

function stickyHeader(){
	if(window.pageYOffset>sticky){
		console.log("A");
		header.classList.add("stickyHeader");
	}else{
		console.log("B");
		header.classList.remove("stickyHeader");
	}
}