function validateForm() {
    let passwordErr = document.getElementById("passwordErr");
    let password2Err = document.getElementById("password2Err");

    let password = document.getElementById("password");
    let password2 = document.getElementById("password2");

    let passwordReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

    let valid = true;

    if (passwordReg.test(password.value) == false) {
        passwordErr.textContent = "Le mot de passe doit contenir au moins 8 characteres avec au moins une lettre au majiscule, une lettre au miniscule et un numero.";
        passwordErr.style.color = "#ff0000";
        valid = false;
    } else {
        passwordErr.textContent = "";
    }
    
    if (password.value != password2.value) {
        password2Err.textContent = "Le mot de passe est incorrecte.";
        password2Err.style.color = "#ff0000";
        valid = false;
    } else {
        password2Err.textContent = "";
    }

    if (valid) {
        return true;
    }
    else {
        return false
    }

}
