

function validate()
{

const name=document.getElementById("name");
const errorname=document.getElementById("errorname");
const pattern=/^[a-zA-Z\s]+$/;
var check=pattern.test(name.value);
if(name.value==""){
	errorname.innerText="enter your name";
	return false;
}
else if(check!=true){
	errorname.innerText="contains only alphabets" ;
	return false;
}
else{
	errorname.innerText=" " ;
}

const email=document.getElementById("email");
const erroremail=document.getElementById("erroremail");
const pattern1=/^[r/R][0-9]{6}[@][A-Za-z\s]+[.][a-z]{2}[.][a-z]{2}$/;
let check1=pattern1.test(email.value);
if(email.value==""){
	erroremail.innerText="email required";
	return false;
}else if(check1!=true){
	erroremail.innerText="should contain alphabets only";
	return false;
}
else{
	erroremail.innerText=" " ;
}
return true;
}
