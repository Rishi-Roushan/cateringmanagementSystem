<!DOCTYPE html>
<html>

<head>
    <title>

    </title>
    <style>
    body {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(222, 0, 241, 1) 52%, rgba(0, 212, 255, 1) 100%);
    }


    /* Add styles to the form container */
    .form-container {
        margin-top: 200px;
        max-width: 300px;
        padding: 10px;
        background: rgb(16, 8, 160);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(167, 241, 0, 1) 52%, rgba(0, 212, 255, 1) 100%);

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
        background-color: lightgreen;
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
        background-color: hotpink;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }

    #aforget:hover {
        color: orange;

    }

    #forget {
        margin-left: 120px;
        color: rgb(239, 8, 8);
    }

    #aregister {
        text-decoration: none;
        color: #000;
    }

    #container2 {
        height: 200px;
        color: red;
        width: 200px;
    }

    div.a {
        width: 250px;
        height: 280px;
        background-color: yellow;
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
        z-index: -1;
        position: relative;
        margin-top: -228px;
        opacity: 0.9;
    }
    </style>
</head>

<body>

    <center>
        <div class="" id="myForm">
            <form action="authentication.php" method="post" class="form-container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" class="btn">Login</button>
                <h5 id="forget">
                    <a href="forget.php" id="aforget" style="text-decoration:none; "> Forget id or password?
                    </a>
                </h5>
                <button
                    style="margin-left:200px;margin-bottom:10px; background-color:lightblue;border:none;font-size:14px;"><a
                        href="register.php" id="aregister">Register</a></button>
            </form>
        </div>

    </center>
    <center>
        <div class="a"></div>
    </center>
    <script>
    </script>

</body>

</html>