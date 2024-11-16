function validateForm() {
    let emailErr = document.getElementById("emailErr");
    let passwordErr = document.getElementById("passwordErr");

    let email = document.getElementById("email");
    let password = document.getElementById("password");

    let emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    let valid = true;

    if (email.value.trim() == "") {
        emailErr.textContent = "Le E-mail ne peut pas etre vide.";
        emailErr.style.color = "#ff0000";
        valid = false;
    } else if (emailReg.test(email.value) == false) {
        emailErr.textContent = "La format de cet E-mail est invalide.";
        emailErr.style.color = "#ff0000";
        valid = false;
    } else {
        emailErr.textContent = "";
    }

    if (password.value.trim() == "") {
        passwordErr.textContent = "Inserer le mot de passe.";
        passwordErr.style.color = "#ff0000";
        valid = false;
    } else {
        passwordErr.textContent = "";
    }

    if (valid) {
        return true;
    }
    else {
        return false;
    }
};
