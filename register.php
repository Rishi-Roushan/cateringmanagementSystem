<!DOCTYPE html>
<html>

<head>
    <title>

    </title>
    <style>
    body {
        background: rgb(189, 255, 0);
        background: linear-gradient(90deg, rgba(189, 255, 0, 0.33665966386554624) 2%, rgba(46, 51, 28, 1) 6%, rgba(171, 195, 7, 1) 23%, rgba(188, 214, 4, 1) 27%, rgba(211, 241, 0, 1) 43%, rgba(185, 237, 32, 1) 51%, rgba(166, 235, 55, 1) 60%, rgba(122, 252, 0, 1) 76%, rgba(93, 225, 144, 1) 89%, rgba(0, 255, 218, 0) 100%);
    }


    /* Add styles to the form container */
    .form-container {
        margin-top: 150px;
        max-width: 350px;
        padding: 10px;
        background: rgb(93, 225, 144);
        background: linear-gradient(90deg, rgba(93, 225, 144, 1) 0%, rgba(0, 255, 85, 1) 100%);
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 80%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: lightcyan;
        color: black;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 90%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: lightcyan;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }

    a:link {
        color: black;
        text-decoration: none;
    }
    </style>
</head>

<body>

    <center>
        <div class="" id="myForm">
            <form action="/action_page.php" class="form-container">
                <label for="FirstName"><b>FirstName</b></label>
                <input type="text" placeholder="Enter Your FirstName" name="fname" required>

                <label for="LastName"><b>LastName</b></label>
                <input type="text" placeholder="Enter Your lastName" name="lname" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" class="btn"><a href="index.php">Register</button>
                <button type="button" class="btn cancel">Close</button>

            </form>
        </div>


        <script>
        </script>

</body>

</html>