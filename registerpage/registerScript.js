// themes
var color = document.querySelector("#color");
color.addEventListener('change', (e) => {
    document.documentElement.style.setProperty('--main-color', e.target.value);
});

// Validation
var username = document.getElementById("username");
var email = document.getElementById("email");
var password = document.getElementById("password");
var confirmPassword = document.getElementById("cpassword");
var btnSubmit = document.getElementById("btnSubmit");

var errText1 = document.querySelector(".errText-1");
var errText2 = document.querySelector(".errText-2");
var errText3 = document.querySelector(".errText-3");
var errText4 = document.querySelector(".errText-4");
var errText5 = document.querySelector(".errText-5");

function regValidation() {
    let valid = true;

    // Reset error messages
    errText1.textContent = "";
    errText2.textContent = "";
    errText3.textContent = "";
    errText4.textContent = "";
    errText5.textContent = "";

    if (username.value === "") {
        errText1.textContent = "Username is required.";
        valid = false;
    }

    if (email.value === "") {
        errText2.textContent = "Email is required.";
        valid = false;
    }

    if (password.value === "") {
        errText3.textContent = "Password is required.";
        valid = false;
    } else if (password.value !== confirmPassword.value) {
        errText4.textContent = "Passwords do not match.";
        valid = false;
    }

    if (confirmPassword.value === "") {
        errText5.textContent = "Confirm Password is required.";
        valid = false;
    }

    return valid;
}

// Additional validation for password strength (optional)
password.addEventListener("input", function () {
    // Add your password strength validation here if needed
});
