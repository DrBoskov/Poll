function checkEmail() {
  var email = document.getElementById("email"),
      regexEmail = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;

  if(email.value){
    document.getElementById("checkemail").textContent = (regexEmail.test(email.value)) ? "" : "Invalid email address";
    document.getElementById("submit").textContent = "";
  }
}

function comparePasswords() {
  var password = document.getElementById("password");
  var valuePassword = password.value, 
      valueConfirm = document.getElementById("confirm").value;

  if (valuePassword && valueConfirm) { // Si les deux champs contiennent quelque chose
      document.getElementById("confirmpassword").textContent = (valuePassword === valueConfirm) ? "" : "Not the same passwords";
      document.getElementById("submit").textContent = "";
  } 
}
    
var password = document.getElementById("password"),
    confirm = document.getElementById("confirm"),
    email = document.getElementById("email");
  
if(email){
  email.addEventListener("blur", checkEmail, false);
}

if (password && confirm) {
  password.addEventListener("keyup", comparePasswords, false);
  confirm.addEventListener("keyup", comparePasswords, false);  
  password.addEventListener("blur", comparePasswords, false);  
  confirm.addEventListener("blur", comparePasswords, false);  
}

document.querySelector("form").addEventListener("submit", function (e) {
  if(document.getElementById("confirmpassword").textContent !== document.getElementById("checkemail").textContent){
    e.preventDefault(); // pour empecher l'envoi si erreur dans le formulaire
    document.getElementById("submit").textContent = "Invalid email or different passwords, please check your informations.";
  }
});