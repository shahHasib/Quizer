// Theme selection functionality
var color = document.querySelector("#color");
color.addEventListener('change', (e) => {
    document.documentElement.style.setProperty('--main-color', e.target.value);
});

// Validation variables
var email = document.getElementById("email");
var pass = document.getElementById("password");
var btnSubmit = document.getElementById("btnSubmit");
var validationSection = document.querySelector('.password-validation');

var validationChecks = {
    lowercase: document.getElementById("lowercase-check"),
    uppercase: document.getElementById("uppercase-check"),
    digit: document.getElementById("digit-check"),
    special: document.getElementById("special-check"),
    length: document.getElementById("length-check"),
};

// Hide validation hints initially
validationSection.style.display = "none";

// Show validation hints when user focuses on the password input
pass.addEventListener("focus", function () {
    validationSection.style.display = "block";
});

// Hide validation hints if password field is unfocused and empty
pass.addEventListener("blur", function () {
    if (pass.value === "") {
        validationSection.style.display = "none";
    }
});

// Password validation on input
pass.addEventListener("input", function () {
    var value = pass.value;

    // Lowercase letter
    if (/(?=.*[a-z])/.test(value)) {
        validationChecks.lowercase.parentElement.classList.add("valid");
    } else {
        validationChecks.lowercase.parentElement.classList.remove("valid");
    }

    // Uppercase letter
    if (/(?=.*[A-Z])/.test(value)) {
        validationChecks.uppercase.parentElement.classList.add("valid");
    } else {
        validationChecks.uppercase.parentElement.classList.remove("valid");
    }

    // Digit
    if (/(?=.*\d)/.test(value)) {
        validationChecks.digit.parentElement.classList.add("valid");
    } else {
        validationChecks.digit.parentElement.classList.remove("valid");
    }

    // Special character
    if (/(?=.*[@$!%*?&])/.test(value)) {
        validationChecks.special.parentElement.classList.add("valid");
    } else {
        validationChecks.special.parentElement.classList.remove("valid");
    }

    // Length check
    if (/.{8,}/.test(value)) {
        validationChecks.length.parentElement.classList.add("valid");
    } else {
        validationChecks.length.parentElement.classList.remove("valid");
    }
});

// Form validation function
function regValidation() {
    var emailValue = email.value;
    var passwordValue = pass.value;

    // Email validation
    if (emailValue === "") {
        alert("Please enter an email.");
        return false;
    }
    if (!/\S+@\S+\.\S+/.test(emailValue)) {
        alert("Please enter a valid email.");
        return false;
    }

    // Password validation
    if (passwordValue === "") {
        alert("Please enter a password.");
        return false;
    }
    if (!/.{8,}/.test(passwordValue) || !/(?=.*[a-z])/.test(passwordValue) ||
        !/(?=.*[A-Z])/.test(passwordValue) || !/(?=.*\d)/.test(passwordValue) ||
        !/(?=.*[@$!%*?&])/.test(passwordValue)) {
        alert("Password does not meet the required criteria.");
        return false;
    }

    return true;
}
