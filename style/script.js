//--------------------Transfer Data within page-------------------------------------------------------------------------------------------------------

function validateForm() {
	var product = document.getElementById("product").value;
	sessionStorage.product = product;

	return result;
}

function storeSub() {
	document.getElementById("product").selectedIndex = sessionStorage.productIndex;

	var product = document.getElementById("product").value;

	sessionStorage.subject = product;
	document.getElementById("subject").value = sessionStorage.subject;
}

function productlist1() {
	var select = document.getElementById("product");

	var options = ["Food Delivery", "Recipes", "Booking", "Jobs"];

	for (var i = 0; i < options.length; i++) {
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

function change() {
	var product = document.getElementById("product").value;
	sessionStorage.product = product;
	var service = document.getElementById("ddl2").value;
	sessionStorage.service = service;
	document.getElementById("subject").value = "RE: Enquiry on " +
		sessionStorage.product + ", " + sessionStorage.service;
}

var myNestedVals = {
	'Food Delivery': {
		'Breakfast': [],
		'Lunch': [],
		'Dinner': [],
		'Special': []
	},
	'Recipes': {
		'Ingridients': [],
		'Videos': [],
		'Tips & Tricks': [],
		'Did you know?': []
	},
	'Booking': {
		'Whole restaurant': [],
		'Rooms': [],
		'Catering': [],
		'Kitchen appliances': []
	},
	'Jobs': {
		'Manager': [],
		'Chef': [],
		'Cashier': [],
		'Janitor': []
	}
}

function createOption(ddl, text, value) {
	var opt = document.createElement('option');
	opt.value = value;
	opt.text = text;
	ddl.options.add(opt);
}

function createOptions(optionsArray, ddl) {
	for (i = 0; i < optionsArray.length; i++) {
		createOption(ddl, optionsArray[i], optionsArray[i]);
	}
}

function configureDDL2(product, ddl2) {
	ddl2.options.length = 0;
	var ddl2keys = Object.keys(myNestedVals[product.value]);
	createOptions(ddl2keys, ddl2)
}


//--------------------Transfer Data-between pages-------------------------------------------------------------------------------------------------------
function storeitem(item_id) {
	sessionStorage.setItem("item_id", item_id);
	window.location.replace("enquiry.php");
}
function displayitem() {
	document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.getItem("item_id")
}


function initalise() {
	var formElement = document.getElementById("f");

	displayitem()

}

window.onload = initalise;

//--------------------Array-------------------------------------------------------------------------------------------------------

//States
function statelist() {
	var select = document.getElementById("state");

	var options = ["Johor", "Kedah", "Kelantan", "Malacca", "Negeri Sembilan", "Pahang", "Penang",
		"Perak", "Perlis", "Sabah", "Sarawak", "Selangor", "Terengganu", "Penang", "Perak"];

	for (var i = 0; i < options.length; i++) {
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

//Federal Territories
function fedterlist() {
	var select = document.getElementById("fedter");

	var options = ["Kuala Lumpur", "Labuan", "Putrajaya"];

	for (var i = 0; i < options.length; i++) {
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

//--------------------Alert-------------------------------------------------------------------------------------------------------
var gErrorMsg = "";

function init() {
	var regForm = document.getElementById("f");
	regForm.onsubmit = validateForm;
}

window.onload = init;

function validateForm() {
	"use strict";
	var isAllOK = false;
	gErrorMsg = "";
	var name1 = firstname();
	var name2 = secondname();
	var emailOK = email();
	var addressOK = address();
	var townOK = town();
	var stateOK = state();
	var postcodeOK = postcode();
	var phoneOK = phonenum();
	var servicecatOK = servicecat();
	var serviceOK = service();
	var descOK = chkDescription();
	if (name1 && name2 && emailOK && addressOK && townOK && stateOK && postcodeOK && phoneOK && servicecatOK && serviceOK && descOK) {
		isAllOK = true;
	}
	else {
		alert(gErrorMsg);
		gErrorMsg = "";
		isAllOK = false;
	}
	return isAllOK;
}

function firstname() {
	var owner = document.getElementById("first_name").value;
	var pattern = /^[a-zA-Z ]+$/
	var nameOk = true;
	if ((owner.length == 0)) {
		gErrorMsg = gErrorMsg + "First name cannot be blank\n"
		nameOk = false;
	}
	else {
		if (!pattern.test(owner)) {
			gErrorMsg = gErrorMsg + "First name must only contain alpha characters\n"
			nameOk = false;
		}
	}
	return nameOk;
}

function secondname() {
	var owner = document.getElementById("second_name").value;
	var pattern = /^[a-zA-Z ]+$/
	var nameOk = true;
	if ((owner.length == 0)) {
		gErrorMsg = gErrorMsg + "Last name cannot be blank\n"
		nameOk = false;
	}
	else {
		if (!pattern.test(owner)) {
			gErrorMsg = gErrorMsg + "Last name must only contain alpha characters\n"
			nameOk = false;
		}
	}
	return nameOk;
}

function email() {
	var email = document.getElementById("email").value;
	var emailOK = true;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
	if (email.length == 0) {
		gErrorMsg = gErrorMsg + "Email address cannot be blank\n"
		emailOK = false;
	}

	else {
		if (!pattern.test(email)) {
			gErrorMsg = gErrorMsg + "Enter a valid email address\n"
			emailOK = false;
		}
	}
	return emailOK;
}

function address() {
	var address = true;
	var desc = document.getElementById("address").value;

	if (desc.length == 0) {
		gErrorMsg = gErrorMsg + "Address cannot be blank\n"
		address = false;
	}
	return address
}

function town() {
	var town = true;
	var description = document.getElementById("town").value;

	if (description.length == 0) {
		gErrorMsg = gErrorMsg + "City/town cannot be blank\n"
		town = false;
	}
	return town
}

function state() {
	var state = false;
	var tutor = document.getElementById("statefedter").value;

	if (tutor != "none") {
		state = true;
	}

	else {
		tutor = false;
		gErrorMsg += "Select a state or federal territory\n"
	}
	return state;
}

function postcode() {
	var owner = document.getElementById("postcode").value;
	var pattern = /^[0-9]+$/
	var postcodeOk = true;
	if ((owner.length == 0)) {
		gErrorMsg = gErrorMsg + "Postcode cannot be blank\n"
		postcodeOk = false;
	}
	else {
		if (!pattern.test(owner)) {
			gErrorMsg = gErrorMsg + "Your postcode must only contain number\n"
			postcodeOk = false;
		}
	}
	return postcodeOk;
}

function phonenum() {
	var owner = document.getElementById("phone").value;
	var pattern = /^[0-9]+$/
	var phoneOk = true;
	if ((owner.length == 0)) {
		gErrorMsg = gErrorMsg + "Phone number cannot be blank\n"
		phoneOk = false;
	}
	else {
		if (!pattern.test(owner)) {
			gErrorMsg = gErrorMsg + "Your phone number must only contain number\n"
			phoneOk = false;
		}
	}
	return phoneOk;
}

function servicecat() {
	var servicecast = false;
	var tutor = document.getElementById("product").value;

	if (tutor != "none") {
		servicecast = true;
	}

	else {
		tutor = false;
		gErrorMsg += "Select a category\n"
	}
	return servicecast;
}

function service() {
	var service = false;
	var tutor = document.getElementById("ddl2").value;

	if (tutor != "none") {
		service = true;
	}

	else {
		tutor = false;
		gErrorMsg += "Select a service\n"
	}
	return service;
}

function chkDescription() {
	var chkDescription = true;
	var desc = document.getElementById("Issue-comment").value;

	if (desc.length == 0) {
		gErrorMsg = gErrorMsg + "Description cannot be blank\n"
		chkDescription = false;
	}
	return chkDescription
}



