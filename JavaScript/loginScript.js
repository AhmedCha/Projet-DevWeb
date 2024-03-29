let formulaire = document.getElementById("loginF");

formulaire.addEventListener("submit", function (event) {
    event.preventDefault();
    let emailErr = document.getElementById("emailErr");
    let passwordErr = document.getElementById("passwordErr");

    let email = document.getElementById("email");
    let password = document.getElementById("password");

    let emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    let emailB = false;
    let passwordB = false;

    if (email.value.trim() == "") {
        emailErr.textContent = "Le E-mail ne peut pas etre vide.";
        emailErr.style.color = "#ff0000";
    } else if (emailReg.test(email.value) == false) {
        emailErr.textContent = "La format de cet E-mail est invalide.";
        emailErr.style.color = "#ff0000";
    } else {
        emailB = true;
        emailErr.textContent = "";
    }

    if (password.value.trim() == "") {
        passwordErr.textContent = "Inserer le mot de passe.";
        passwordErr.style.color = "#ff0000";
    } else {
        passwordB = true;
        passwordErr.textContent = "";
    }

    if (passwordB && emailB) {
        alert("Log in avec succes!");
    }

})
formulaire.addEventListener("mdpo", function (event) {
    event.preventDefault();
    alert("Cette fonctionnalite n'est pas disponnible maintenant :(");
})
