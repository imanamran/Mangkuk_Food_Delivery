"use strict";
/*get variables from form and check rules*/
function validate(){
var errMsg = ""; /* stores the error message */
var result = true; /* assumes no errors */
if(result){
alert("Booking Successfully");
}else{
alert("Booking Failed");
}
return result; //if false the information will not be sent to the server
}
function getBooking(){
//if sessionStorage for username is not empty
if(sessionStorage.firstname != undefined){
//confirmation text
document.getElementById("confirm_fname").textContent = sessionStorage.firstname;
document.getElementById("confirm_lname").textContent =sessionStorage.lastname;
document.getElementById("confirm_email").textContent =sessionStorage.email;
document.getElementById("confirm_address").textContent =sessionStorage.address;
document.getElementById("confirm_city_town").textContent =sessionStorage.city_town;
document.getElementById("confirm_state").textContent =sessionStorage.state;
document.getElementById("confirm_postcode").textContent =sessionStorage.postcode;
document.getElementById("confirm_phonenum").textContent =sessionStorage.phonenum;
document.getElementById("confirm_subject").textContent =sessionStorage.subject;
document.getElementById("confirm_desc").textContent =sessionStorage.desc;
}
}
function cancelBooking(){
window.location = "enquiry.php";
}
function init () {
//call the getBooking() function.
getBooking();
// link the variable to the HTML element
var bookForm = document.getElementById("bookform");
var cancelBooking = document.getElementById("cancelButton");
//check which button is being click.
if(bookForm){
bookForm.onsubmit = validate;
}else{
cancelBooking.onclick = cancelBooking();
}
}
window.onload = init;