
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        const offsetTop = targetElement.offsetTop - 120; // Subtracting 100px
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    });
});

document.getElementById("login").onclick = function () {
    location.href = "login.html";
};

document.getElementById("signup").onclick = function () {
    location.href = "signup.html";
};
