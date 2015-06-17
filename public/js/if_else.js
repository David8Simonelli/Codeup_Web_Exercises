var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];
var favorite = 'green';
switch (color) {
	case "green":
		console.log("Green is my favorite color.");
		break;
	case "red":
		console.log("Red is the color of an apple.");
		break;
	case "blue":
		console.log("Blue is the color of the sea.");
		break;
	case "yellow":
		console.log("Yellow is the color of the sun.");
		break;
	case "orange":
		console.log("Orange is the color of an orange.");
		break;
	default:
		console.log("That's not a primary color.")
}