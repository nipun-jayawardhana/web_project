// validation.js
function validateForm() {
    let isValid = true;

    let name = document.forms["myForm"]["name"].value;
    let email = document.forms["myForm"]["email"].value;
    let age = document.forms["myForm"]["age"].value;
    let password = document.forms["myForm"]["password"].value;
    let confirmPassword = document.forms["myForm"]["confirm_password"].value;
    let nameErr = document.getElementById("nameErr");
    let emailErr = document.getElementById("emailErr");
    let ageErr = document.getElementById("ageErr");
    let passwordErr = document.getElementById("passwordErr");
    let confirmPasswordErr = document.getElementById("confirmPasswordErr");

    // Clear previous error messages
    nameErr.innerHTML = "*";
    emailErr.innerHTML = "*";
    ageErr.innerHTML = "*";
    passwordErr.innerHTML = "*";
    confirmPasswordErr.innerHTML = "*";

    // Name validation
    if (name == "") {
        nameErr.innerHTML = "Name is required";
        isValid = false;
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email == "") {
        emailErr.innerHTML = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        emailErr.innerHTML = "Invalid email format";
        isValid = false;
    }

    // Age validation
    if (age == "") {
        ageErr.innerHTML = "Age is required";
        isValid = false;
    } else if (isNaN(age) || age < 1 || age > 120) {
        ageErr.innerHTML = "Invalid age";
        isValid = false;
    }

    // Password validation
    if (password == "") {
        passwordErr.innerHTML = "Password is required";
        isValid = false;
    } else if (password.length < 8) {
        passwordErr.innerHTML = "Password must be at least 8 characters long";
        isValid = false;
    } else if (!/[A-Z]/.test(password)) {
        passwordErr.innerHTML = "Password must contain at least one uppercase letter";
        isValid = false;
    } else if (!/[a-z]/.test(password)) {
        passwordErr.innerHTML = "Password must contain at least one lowercase letter";
        isValid = false;
    } else if (!/[0-9]/.test(password)) {
        passwordErr.innerHTML = "Password must contain at least one number";
        isValid = false;
    } else if (!/[!@#$%^&*]/.test(password)) {
        passwordErr.innerHTML = "Password must contain at least one special character";
        isValid = false;
    }

    // Confirm password validation
    if (confirmPassword == "") {
        confirmPasswordErr.innerHTML = "Confirm password is required";
        isValid = false;
    } else if (confirmPassword !== password) {
        confirmPasswordErr.innerHTML = "Passwords do not match";
        isValid = false;
    }

    return isValid;
}
