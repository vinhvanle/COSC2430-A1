window.addEventListener('load',() =>{
  let email = localStorage.getItem('email');
  document.getElementById('email-display'). innerHTML = email;
})
function check(){
  if(_.isEmpty(localStorage)){
    window.location.href = "../sub/login.html";
  }
  else{
    window.location.href = "../sub/logged.html";
  }
  }
