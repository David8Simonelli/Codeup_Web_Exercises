	var oper = document.getElementById("operator");
	var middle = oper.getAttribute("placeholder");
	var leftSide = document.getElementById("leftOperand");
	var variable = leftSide.getAttribute("placeholder");
	var rightSide = document.getElementById("rightOperand");
	var variable2 = leftSide.getAttribute("placeholder")

	// Start of Button 1
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 1;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 1;
	    rightSide.setAttribute("placeholder", variable2)
	    }
	    //add 1 to first or second input
	}
	document.getElementById('button1').addEventListener('click', listener, false)
	// End of Button 1

	// Start of Button 2
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 2;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 2;
	    rightSide.setAttribute("placeholder", variable2)
	    }
	    //add 2 to first or second input
	}
	document.getElementById('button2').addEventListener('click', listener, false)
	// End of Button 2

	// Start of Button 3
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 3;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 3;
	    rightSide.setAttribute("placeholder", variable2)
	    }
	    //add 3 to first or second input
	}
	document.getElementById('button3').addEventListener('click', listener, false)
	// End of Button 3

	// Start of Button +
	var listener = function () {
	    oper.setAttribute("placeholder", "+");
	    // add * to the operator input
	}
	document.getElementById('button+').addEventListener('click', listener, false)
	// End of Button +

	// Start of Button 4
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 4;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 4;
	    rightSide.setAttribute("placeholder", variable2)
	    //add 4 to first or second input
	    }
	}
	document.getElementById('button4').addEventListener('click', listener, false)
	// End of Button 4

	// Start of Button 5
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 5;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 5;
	    rightSide.setAttribute("placeholder", variable2)
	    //add 5 to first or second input
	    }
	}
	document.getElementById('button5').addEventListener('click', listener, false)
	// End of Button 5

	// Start of Button 6
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 6;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 6;
	    rightSide.setAttribute("placeholder", variable2)
	    //add 6 to first or second input
	    }
	    
	}
	document.getElementById('button6').addEventListener('click', listener, false)
	// End of Button 6

	// Start of Button -
	var listener = function () {
	    oper.setAttribute("placeholder", "-");
	    // add - to the operator input
	}
	document.getElementById('button-').addEventListener('click', listener, false)
	// End of Button -

	// Start of Button 7
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 7;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 7;
	    rightSide.setAttribute("placeholder", variable2)
	    }
	    //add 7 to first or second input
	}
	document.getElementById('button7').addEventListener('click', listener, false)
	// End of Button 7

	// Start of Button 8
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 8;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 8;
	    rightSide.setAttribute("placeholder", variable2)
	    }
	    //add 8 to first or second input
	}
	document.getElementById('button8').addEventListener('click', listener, false)
	// End of Button 8

	// Start of Button 9
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 9;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 9;
	    rightSide.setAttribute("placeholder", variable2)
	    }
	    //add 9 to first or second input
	}
	document.getElementById('button9').addEventListener('click', listener, false)
	// End of Button 9

	// Start of Button *
	var listener = function () {
	    oper.setAttribute("placeholder", "*");
	    // add * to the operator input
	}
	document.getElementById('button*').addEventListener('click', listener, false)
	// End of Button *

	// Start of Button 0
	var listener = function () {
		if(oper.getAttribute("placeholder") == false) {
	    variable = variable + 0;
	    leftSide.setAttribute("placeholder", variable)
		}
	    else {
	    variable2 = variable2 + 0;
	    rightSide.setAttribute("placeholder", variable2)
	    }
		// add 0 to first or second input
	}
	document.getElementById('button0').addEventListener('click', listener, false)
	// End of Button 0

	// Start of Button /
	var listener = function () {
		var slash = ("/")
	    oper.setAttribute("placeholder", slash);
	    // add / to the operator input
	}
	document.getElementById('button/').addEventListener('click', listener, false)
	// End of Button /

	// Start of Button C
	var clear = function () {
		variable = [];
		variable2 = [];
	    leftSide.setAttribute("placeholder", "")
	    rightSide.setAttribute("placeholder", "")
	    oper.setAttribute("placeholder", "");
	    // Clear all inputs
	}
	document.getElementById('buttonC').addEventListener('click', clear, false)
	// End of Button C

	//Start of Button =
	var listener = function () {
		leftSide.setAttribute("placeholder", "")
	    rightSide.setAttribute("placeholder", "")
		if(oper.getAttribute("placeholder") == "+") {
			var answer = parseFloat(variable) + parseFloat(variable2);
			clear();
			variable = answer;
			leftSide.setAttribute("placeholder", variable);
			//if the placeholder is a plus add the variables
			}

		else if(oper.getAttribute("placeholder") == "-") {
			var answer = parseFloat(variable) - parseFloat(variable2);
			clear();
			variable = answer;
			leftSide.setAttribute("placeholder", variable);
			//if the placeholder is a minus subtract the variables
		}
		else if(oper.getAttribute("placeholder") == "*") {
			var answer = parseFloat(variable) * parseFloat(variable2);
			clear();
			variable = answer;
			leftSide.setAttribute("placeholder", variable);
			//if the placeholder is a star multiply the variables
		}
		else if(oper.getAttribute("placeholder") == "/") {
			var answer = parseFloat(variable) / parseFloat(variable2);
			clear();
			variable = answer;
			leftSide.setAttribute("placeholder", variable);
			//if the placeholder is a slash divide the variables
		}
		else {
			leftSide.setAttribute("placeholder", variable)
			//if there is no placeholder for the operator put the answer back where it is
		}
	}
		document.getElementById('button=').addEventListener('click', listener, false)
	//End of Button =
	console.log(variable);