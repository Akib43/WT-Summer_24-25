<!doctype html>
<html>
    <style>
        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="email"],
        input[type="password"], select
        {
            width: 90%;
            padding: 10px;
            margin: 1px;
            border: 1px solid black;
            border-radius: 4px;
        }

        
        input[type="file"]
        {
            width: 50%;
            padding: 10px;
            margin: 1px;
            border-radius: 4px;
        }

        div {
            width: 25%;
            padding: 20px;
            background-color: #f2f2f2ff;
            border-radius: 10px;
        }

        .flow{
            width: 150px;
            height: 80px;
            overflow: auto;
            background-color: #f2f2f2ff;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
            outline: 1px solid red;
        }

        #clr{
            background-color: white;
        }

        body{
            background-color: #b8dde9ff;
            font-family: Arial, sans-serif;
            color: #333;
        }

        input[type="submit"],
        input[type="reset"]
        {
            width: 100px;
            padding: 10px;
            margin: 5px;
            border: 1px ;
            background-color: blue;
            color: white;
        }

    </style>

    <body>

        <Center>
            <h1 style =" color: darkblue" >Bank Managment system</h1>
            <h2 style =" color: darkblue">Your trusted Finalcial Partner</h2>
        </Center>
        <h3 style =" color: darkblue">Customer Resgistration Form</h3>
        <div id="clr">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type ="text"></td>
            </tr>

            <tr>
                <td>Date of birth:</td>
                <td><input type ="date"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="des">Male
                    <input type="radio" name="des">Female
                    <input type="radio" name="des">Other
                </td>    
            </tr>

            <tr>
                <td>Marital Status:</td>
                <td>
                    <select>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Account Type:</td>
                <td>
                    <select>
                        <option value="savings">Savings</option>
                        <option value="current">Current</option>
                        <option value="fixed">Fixed Deposit</option>
                        <option value="joint">Joint Account</option>
                    </select>
                </td>
            </tr>


            <tr>
                <td>Initial Deposit Ammount</td>
                <td><input type="number"></td>
            </tr>

            <tr>
                <td>Mobile Number:</td>
                <td><input type="number"></td>
            </tr>

            <tr>
                <td>Email Adress:</td>
                <td><input type="email"></td>
            </tr>

            <tr>
                <td>Address:</td>
                <td><input type="text"></textarea></td> 
            </tr>
            
            <tr>
                <td>Occupation:</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>National ID (NID):</td>
                <td><input type="number"></td>
            </tr>

            <tr>
                <td>Set Password:</td>
                <td><input type="password"></td>
            </tr>

            <tr>
                <td>Upload ID proof:</td>
                <td><input type="file"></td>
            </tr>

        </table>
            <input type="checkbox" name="terms"> I agree to the terms and conditions<br>
            <br>
            <center>
                <input type="submit" value="Register">
                <input type="reset" value="Clear">
            </center>

        </div>

        <div class = "flow">This is a demo text to show how the overflow 
                            works in a small container ..................
                            ..............................................
                            ........ end </div>
        
    </body>

</html>