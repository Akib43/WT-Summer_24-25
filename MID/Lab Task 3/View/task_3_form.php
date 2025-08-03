<!DOCTYPE html>
<html>
    <head>
        <title>Donation form</title>
        <link rel="stylesheet" href="..\CSS\task_3_style.css">
        <script src="..\JS\task_3_valid.js"></script>
    </head>

    <body>
        
        <div class="maindiv">
            <form onsubmit="return validating()">
                <h2>Donation Form</h2>
                
                <h4>First Name</h4>
                <input type="text" id="Fname">

                <h4>Last Name</h4>
                <input type="text" id="Lname">

                <h4>Address</h4>
                <input type="text" id="address">

                <h4>City</h4>
                <input type="text" id="city">

                <h4>State</h4>
                <select id="ste" display="block">
                    <option value="">--Select--</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                </select>

                <h4>Phone</h4>
                <input type="text" id="Phon">

                <h4>Email</h4>
                <input type="email" id="email">

                

                <h4>Create Password (min 8 character)</h4>
                <input type="password" id="pass">

                <h4>Confirm Password</h4>
                <input type="password" id="cpass">

                <h4>Donation Amount</h4>
                <input type="radio" id="amount" value="0" name = "des"> None
                <input type="radio" id="amount" value="500" name = "des"> 500
                <input type="radio" id="amount" value="1000" name = "des"> 1000
                <input type="radio" id="amount" value="2000" name = "des"> 2000
                <input type="radio" id="amount" value="5000" name = "des"> 5000
                <input type="radio" id="amount" name = "des"> Other

                <h4>Other amount</h4>
                <input type="number" id="amount">
                <br>

                <input type="checkbox" id="Rterms"> I agree to the terms and conditions
                <br>

                <h2>Additional Options</h2>

                <input type="checkbox" id="A1terms"> I would like my gift to remain anonymous
                <br>
                <input type="checkbox" id="A2terms"> my employee offers a matching gift program
                <br>
                <input type="checkbox" id="A3terms"> Please dont send a thank you letter
                <br>

                <h4>comment</h4>
                <textarea id="comment"></textarea>
                
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
                
            </form>
        </div>
        

    </body>
</html>