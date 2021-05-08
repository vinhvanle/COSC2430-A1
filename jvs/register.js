function emailIsValid(email){
  return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)
}
function phoneIsValid(phone){
  return /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im.test(phone)
}
function save(){
  let fname = document.getElementById('fname').value;
  let lname = document.getElementById('lname').value;
  let email = document.getElementById('email').value;
  let phone = document.getElementById('phone').value;
  let address = document.getElementById('address').value;
  let city = document.getElementById('city').value;
  let zip = document.getElementById('zip').value;
  let password = document.getElementById('password-field').value;
  let password_confirm = document.getElementById('password_confirm').value;


if (_.isEmpty(fname)) {
  document.getElementById('fname-error'). innerHTML = "First Name cannot be blank";
}else if(fname.trim().length <3){
  document.getElementById('fname-error'). innerHTML = "First Name cannot be less than 3 letters";
  fname = ' ';
}else{
  document.getElementById('fname-error'). innerHTML = ' ';
}

if (_.isEmpty(lname)) {
  document.getElementById('lname-error'). innerHTML = "Last Name cannot be blank";
}else if(lname.trim().length <3){
  document.getElementById('lname-error'). innerHTML = "Last Name cannot be less than 3 letters";
  lname = ' ';
}else{
  document.getElementById('lname-error'). innerHTML = ' ';
}

if (_.isEmpty(email)) {
  document.getElementById('email-error'). innerHTML = "Email cannot be blank";
}else if(!emailIsValid(email)){
  document.getElementById('email-error'). innerHTML = "Invalid Email";
  email = ' ';
}else{
  document.getElementById('email-error'). innerHTML = ' ';
}

if (_.isEmpty(phone)) {
  document.getElementById('phone-error'). innerHTML = "Phone cannot be blank";
}else if(!phoneIsValid(phone)){
  document.getElementById('phone-error'). innerHTML = "Phone number must contain 9-11 digits";
  phone = ' ';
}else{
  document.getElementById('phone-error'). innerHTML = ' ';
}

if (_.isEmpty(password)) {
  document.getElementById('password-error'). innerHTML = "Password cannot be blank";
}else{
  document.getElementById('password-error'). innerHTML = ' ';
}

if (password!=password_confirm) {
  document.getElementById('passwordconfirm-error'). innerHTML = "Password does not match";
}else{
  document.getElementById('passwordconfirm-error'). innerHTML = ' ';
}

if (_.isEmpty(address)) {
  document.getElementById('address-error'). innerHTML = "Address cannot be blank";
}else if(address.length <3){
  document.getElementById('address-error'). innerHTML = "Address cannot be less than 3 letters";
  address =  ' ';
}else{
  document.getElementById('address-error'). innerHTML = ' ';
}

if (_.isEmpty(city)) {
  document.getElementById('city-error'). innerHTML = "City cannot be blank";
}else if(city.trim().length <3){
  document.getElementById('city-error'). innerHTML = "City cannot be less than 3 letters";
  city = ' ';
}else{
  document.getElementById('city-error'). innerHTML = ' ';
}

if (_.isEmpty(zip)) {
  document.getElementById('zip-error'). innerHTML = "Zip cannot be blank";
}else if(zip.trim().length < 4 || zip.trim().length >6 ){
  document.getElementById('zip-error'). innerHTML = "Zip code must contain 4-6 digits";
  zip = ' ';
}else{
  document.getElementById('zip-error'). innerHTML = ' ';
}
}

function _id(name){
  return document.getElementById(name);
}
function _class(name){
  return document.getElementsByClassName(name);
}
_class("toggle-password")[0].addEventListener("click",function(){
  _class("toggle-password")[0].classList.toggle("active");
  if(_id("password-field").getAttribute("type") == "password"){
    _id("password-field").setAttribute("type","text");
  } else {
    _id("password-field").setAttribute("type","password");
  }
});

_id("password-field").addEventListener("focus",function(){
  _class("password-policies")[0].classList.add("active");
});
_id("password-field").addEventListener("blur",function(){
  _class("password-policies")[0].classList.remove("active");
});

_id("password-field").addEventListener("keyup",function(){
  let password = _id("password-field").value;


  if(/[A-Z]/.test(password)){
    _class("policy-uppercase")[0].classList.add("active");
  } else {
    _class("policy-uppercase")[0].classList.remove("active");
  }

  if(/[a-z]/.test(password)){
    _class("policy-lowercase")[0].classList.add("active");
  } else {
    _class("policy-lowercase")[0].classList.remove("active");
  }

  if(/[0-9]/.test(password)){
    _class("policy-number")[0].classList.add("active");
  } else {
    _class("policy-number")[0].classList.remove("active");
  }

  if(/[^A-Za-z0-9]/.test(password)){
    _class("policy-special")[0].classList.add("active");
  } else {
    _class("policy-special")[0].classList.remove("active");
  }

  if(password.length > 7 && password.length <21){
    _class("policy-length")[0].classList.add("active");
  } else {
    _class("policy-length")[0].classList.remove("active");
  }
});
