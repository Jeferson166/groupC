const email = document.getElementById("email");
const password = document.getElementById("password");
const button = document.getElementById("bttn");

email.addEventListener("focus", function(){
    email.value = "abc";
});

password.addEventListener("focus", function(){
    password.value = "abcd";
});

button.addEventListener("click", function(){
    event.preventDefault();
    if (email.value == "abc" && password.value == "abcd") {
        document.getElementById("greetings").innerHTML = "Welcome!";
        setTimeout(function() {
            window.location.href = "dashboard.php";
        }, 800);
    }
});