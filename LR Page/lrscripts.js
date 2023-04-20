function togglePasswordFields(field) {
    const passwordField = field.parentNode.querySelector('input[type="password"]');
    if (passwordField.type === "password") {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  }
  
  function validateLoginForm() {
    const username = document.forms["login-form"]["username"].value;
    const password = document.forms["login-form"]["password"].value;
    if (username === "" || password === "") {
      const errorField = document.querySelector(".login-page .form .error");
      errorField.innerHTML = "Please fill in all fields";
      errorField.style.display = "block";
      return false;
    }
  }
  
  function validateRegisterForm() {
    const username = document.forms["register-form"]["username"].value;
    const password = document.forms["register-form"]["password"].value;
    const email = document.forms["register-form"]["email"].value;
    if (username === "" || password === "" || email === "") {
      const errorField = document.querySelector(".login-page .form .error");
      errorField.innerHTML = "Please fill in all fields";
      errorField.style.display = "block";
      return false;
    }
  }