'use strict';

function formValidate() {
	let msg = "ERROR: One or more of your input fields is filled in incorrectly:\n";
	let pass = true;

	let pearQuantity = document.getElementById("pear").value;
	let silverQuantity = document.getElementById("silverMaple").value;
	let cottonQuantity = document.getElementById("cottonwood").value;
	let crabQuantity = document.getElementById("crabapple").value;
	
	let shipping = document.getElementsByName("shipping");
	let shipPass = false;

	let username = document.getElementById("username").value;
	//Email validation adapted from a StackOverflow answer
	const emailVal = email => {
		let emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		return emailReg.test(email);
	};
	let pwd = document.getElementById("pwd").value;

	if (pearQuantity == "" || pearQuantity < 0) {
		msg = msg.concat("Pear Tree Quantity\n");
		pass = false;
	}
	if (silverQuantity == "" || silverQuantity < 0) {
		msg = msg.concat("Silver Maple Tree Quantity\n");
		pass = false;
	}
	if (cottonQuantity == "" || cottonQuantity < 0) {
		msg = msg.concat("Cottonwood Tree Quantity\n");
		pass = false;
	}
	if (crabQuantity == "" || crabQuantity < 0) {
		msg = msg.concat("Crabapple Tree Quantity\n");
		pass = false;
	}

	for (let i = 0; i < shipping.length; i++) {
		if (shipping[i].checked) {
			shipPass = true;
			break;
		}
	}
	if (shipPass == false) {
		msg = msg.concat("Shipping Selection\n");
		pass = false;
	}


	if (!emailVal(username) || username == "") {
		msg = msg.concat("Username\n");
		pass = false;
	}
	if (pwd == "") {
		msg = msg.concat("Password\n");
		pass = false;
	}

	if (pass == false) {
		msg = msg.concat("Please go back and correct your order form.");
		window.alert(msg);
	}

	return pass;
}
