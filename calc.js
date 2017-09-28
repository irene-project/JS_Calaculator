// var box = document.getElementById('display');
   var box = document.getElementById("display");


function addtoscreen(x){
	box.value += x;
	if(x === 'c'){
		box.value = ' ';
		// make -- to zero
	}
}
// addtoscreen()
function answer(){
	x = box.value;
	x = eval(x);
	box.value = x;
}

function power(){
	x = box.value;
	x = eval(x*x);
	box.value = x;
}

function backspace(){
	var number = box.value;
	var length = number.length-1;
	var newNum = number.substring(0, length);
	box.value = newNum;
}