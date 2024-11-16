let formulaire = document.getElementById("signupF");

formulaire.addEventListener("reset", function (event) {
    let nomErr = document.getElementById("nomErr");
    let emailErr = document.getElementById("emailErr");
    let dateErr = document.getElementById("dateErr");
    let genreErr = document.getElementById("genreErr");
    let passwordErr = document.getElementById("passwordErr");
    let password2Err = document.getElementById("password2Err");
    let motSecretErr = document.getElementById("motSecretErr");
    let TmotSecretErr = document.getElementById("TmotSecretErr");

    nomErr.textContent = "";
    emailErr.textContent = "";
    dateErr.textContent = "";
    genreErr.textContent = "";
    passwordErr.textContent = "";
    password2Err.textContent = "";
    motSecretErr.textContent = "";
    TmotSecretErr.textContent = "";
})

function validateForm() {
    let nomErr = document.getElementById("nomErr");
    let emailErr = document.getElementById("emailErr");
    let dateErr = document.getElementById("dateErr");
    let genreErr = document.getElementById("genreErr");
    let passwordErr = document.getElementById("passwordErr");
    let password2Err = document.getElementById("password2Err");
    let motSecretErr = document.getElementById("motSecretErr");
    let TmotSecretErr = document.getElementById("TmotSecretErr");

    let nom = document.getElementById("nom");
    let email = document.getElementById("email");
    let birth = document.getElementById("birth");
    let homme = document.getElementById("homme");
    let femme = document.getElementById("femme");
    let password = document.getElementById("password");
    let password2 = document.getElementById("password2");
    let TmotSecret = document.getElementById("TmotSecret");
    let motSecret = document.getElementById("motSecret");

    let nomReg = /^[a-zA-Z\s]+$/;
    let emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let passwordReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

    let valid = true;

    let minDate = new Date();
    minDate.setFullYear(minDate.getFullYear() - 13);
    let dob = new Date(birth.value);


    if (nom.value.trim() == "") {
        nomErr.textContent = "Le nom ne peut pas etre vide.";
        nomErr.style.color = "#ff0000";
        valid = false;
    } else if (nomReg.test(nom.value) == false) {
        nomErr.textContent = "Le nom ne peut contenir que des lettres alphabetiaues et des espaces.";
        nomErr.style.color = "#ff0000";
        valid = false;
    } else {
        nomErr.textContent = "";
    }

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

    if (birth.value === "") {
        dateErr.textContent = "La date de naissance ne peut pas etre vide.";
        dateErr.style.color = "#ff0000";
        valid = false;
    } else if (dob >= minDate) {
        dateErr.textContent = "Il faut etre au moins 13 ans.";
        dateErr.style.color = "#ff0000";
        valid = false;
    } else {
        dateErr.textContent = "";
    }

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

    if (!homme.checked && !femme.checked) {
        genreErr.textContent = "Il faut choisir le genre.";
        genreErr.style.color = "#ff0000";
        valid = false;
    } else {
        genreErr.textContent = "";
    }

    if (TmotSecret.value == "Aucun") {
        TmotSecretErr.textContent = "Il faut choisir une categorie.";
        TmotSecretErr.style.color = "#ff0000";
        valid = false;
    } else {
        TmotSecretErr.textContent = "";
    }

    if (motSecret.value.trim() == "") {
        motSecretErr.textContent = "Le mot secret ne peut pas etre vide.";
        motSecretErr.style.color = "#ff0000";
        valid = false;
    } else if (nomReg.test(motSecret.value) == false) {
        motSecretErr.textContent = "Le nom ne peut contenir que des lettres alphabetiaues et des espaces.";
        motSecretErr.style.color = "#ff0000";
        valid = false;
    } else {
        motSecretErr.textContent = "";
    }

    if (valid) {
        return true;
    }
    else {
        return false
    }

}
