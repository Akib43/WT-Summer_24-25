function validating() {
    var fname = document.getElementById("Fname").value;
    var lname = document.getElementById("Lname").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("cpass").value;
    var donetamount = document.getElementById("amount").value;
    var terms = document.getElementById("Rterms").checked;
    var term1= document.getElementById("A1term").checked;
    var term2= document.getElementById("A2term").checked;
    var term3= document.getElementById("A3term").checked;
    var comments = document.getElementById("comment").value;

    if (fname === "" || lname === "" || address === "" || 
        city === "" || state === "" || phone === "" || 
        email === "" || password === "" || 
        confirmPassword === "" || donetamount === "" 
        || terms === false) {
        alert("Please fill out all fields.");
        return false;
    }else{
        alert("All fields are filled out."+ 
            " First name: " + fname + 
              ", Last name: " + lname + 
              ", Address: " + address + 
              ", City: " + city + 
              ", State: " + state + 
              ", Phone: " + phone + 
              ", Email: " + email + 
              ", Donation Amount: " + donetamount +
              ", Comments: " + comments);         
    }


    if(preg_match(/^[a-zA-Z]+$/, fname) === false && preg_match(/^[a-zA-Z]+$/, lname) === false) {
        alert("First name and last name must contain only alphabets.");
        return false;
    }
    else{
        alert("First name and last name are valid.");
    }

    if(preg_match(/^\d{11}$/, phone) === false) {
        alert("Phone number must be exactly 11 digits.");
    }
    else{
        alert("Phone number is valid.");
    }

    if(password.length < 8 && preg_match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/, password) === false) {
        alert("Password must be at least 8 characters long and contain at least one uppercase letter")
        return false;}
    else{
        alert("Password is valid.");
    }

    if(confirmPassword !== password) {
        alert("Confirm password does not match the password.");
        return false;
    }
    else{
        alert("Confirm password matches the password.");
    }

    if(terms === false) {
        alert("You must agree to the terms and conditions.");
    }
    else{
        alert("You have agreed to the terms and conditions.");
    }

    alert("All validations passed successfully.");

    return true;
}
