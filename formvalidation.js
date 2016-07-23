/*  JavaScript Document                           
/*  Written by Ade Olumofin for SyntaxNinjas.com   */
//Validation For The Name Input Field!
$(document).ready(function() {
var nameInputError= document.getElementById('ErrorMessage');
var nameInput= document.myform.Name;
nameInput.onchange = function (){				
var myPattern= new RegExp ("[\w^0-9!@#$%^&*()<>]", "i"); 
var isValid = this.value.search(myPattern) < 0; //if true, isValid gives a value of 1.
if (!(isValid)){
	nameInputError.innerText = "Please Enter A Valid First And Last Name!";
	forminput = document.getElementsByClassName("forminput");
       document.myform.onsubmit = function(){
	   alert('submission interrupted please fill out required fields');
       return false;
        }
}
else{
nameInputError.innerText = "";
return true;
}
};})//ready

//Validation For The Email Input Field!
/*
$(document).ready(function() {
var EmailInputError= document.getElementById('ErrorMessage');
var EmailInput= document.myform.Email;
EmailInput.onchange = function (){				
var myPattern= new RegExp ("[0-9A-Za-z.@^!~`#$%^&*()<>]", "i"); 
var isValid = this.value.search(myPattern) < 0; //if true, isValid gives a value of 1.
if (!(isValid)){
	EmailInputError.innerText = "Please Enter A Valid Email Address!";
	forminput = document.getElementsByClassName("forminput");
       document.myform.onsubmit = function(){
	   alert('submission interrupted please fill out required fields');
       return false;
        }
}
else{
nameInputError.innerText = "";
return true;
}
};})//ready

*/
//Disallow Submission if both fields are empty.
forminput = document.getElementsByClassName("forminput");
document.myform.onsubmit = function(){
	for (var i = 0; i < forminput.length; i++) {
    if (forminput[i].value === "" || forminput[i].value ==="null"){    
	alert('submission interrupted please fill out required fields');
	return false;}	    
	};
}
//Using Modernizr To Validate The Name Field In Older Browsers!
var inputFields = document.myform.getElementsByTagName("input");
var validationInfo = {
"Name":{"pattern" : "[\w^0-9!@#$%^&*()<>]","placeholder" :"Full Name","required" : true},
"Email":{"required": true}/*Using Modernizr To Validate The Email Field In Older Browsers!*/
};//End of ValidationInfo Object.
if (modernizr.input.pattern){
	var pattern= this.pattern;
	var placeholder = this.placeholder;	
	}else{
	var pattern= validationInfo[this.name].pattern;
	var placeholder = validationInfo[this.name].placeholder;
};


