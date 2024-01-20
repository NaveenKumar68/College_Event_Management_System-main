
 <?php
$conn=mysqli_connect('localhost','root','','project') or die('unable to connect');

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pw = $_POST['pw'];

    $select = mysqli_query($conn, "SELECT * FROM login WHERE name = '$name' AND pw = '$pw'");
    $row = mysqli_fetch_array($select);

    if (is_array($row)) {
        $_SESSION["name"] = $row["name"];
        $_SESSION["pw"] = $row["pw"];
        header("Location: home.php"); // Redirect to the desired page upon successful login.
        exit;
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
        echo '<script>togglePopup();</script>';

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra&family=EB+Garamond&family=Poppins:wght@100&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            /* background-color: black; */
            background-size: cover;
            background-image: url(https://img.freepik.com/premium-photo/office-desk-table-with-computer-top-view-with-copy-space_146377-54.jpg);
            /* text-align: center; */
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-image: linear-gradient(rgba(255, 142, 142, 0.80), rgba(0, 0, 0, 0.50));
            display: flex;
            flex-direction: column;
            /* text-align: center; */
            width: 400px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .options {
            display: flex;
            /* border: 1px solid #ccc; */
            justify-content: center;
            text-align: center;
            /* margin-bottom: 20px; */
        }

        .options div {
            flex: 1;
            padding: 20px 12px;
            /* border: 1px solid #ccc; */
            background-color: white;

        }

        a {
            color: black;
            text-decoration: none;
            /* optional: removes underline */
        }

        .user-entry {
            padding: 30px 50px;

        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 10px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            font-size: 15px;
            width: 100%;
            background-color: black;
            color: white;
            justify-content: center;
            padding: 10px 15px;
            margin: auto;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            height: 40px;
        }

        h2 {
            text-align: center;
            padding: 0%;
            margin-bottom: 10px;
            margin-top: 0;
        }

        #login {
            border-radius: 10px 0px 10px 0px;
        }

        #signup {
            border-radius: 0px 10px 0px 10px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $(".registerForm").hide();
            $("#login").css("background", "none");

            $("#signup").click(function () {
                $(".loginForm").hide();
                $(".registerForm").slideDown("slow");
                $("#signup").css("background", "none");
                $("#login").css("background", "#fff");

            });
            $("#login").click(function () {
                $(".loginForm").slideDown("slow");
                $(".registerForm").hide();
                $("#login").css("background", "none");
                $("#signup").css("background", "#fff");
            });
        });
    </script>
    <script>
        function validateRegisterForm() {
            var newUsername = document.getElementById("new-username").value;
            var newPassword = document.getElementById("new-password").value;
            var newemail = document.getElementById("new-Email").value;
            var errorSpan = document.getElementById("register-error");

            if (newUsername === "" || newPassword === "" || newemail === "") {
                errorSpan.innerHTML = "Please fill in all fields.";
                return false;
            } else {
                errorSpan.innerHTML = "";
                return true;
            }
        }

        function validateLoginForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var errorSpan = document.getElementById("login-error");

            if (username === "" || password === "") {
                errorSpan.innerHTML = "Please fill in all fields.";
                return false;
            } else {
                errorSpan.innerHTML = "";
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="container">

        <div class="options">
            <div id="login">Sign In</div>
            <div id="signup">Sign Up</div>
        </div>
        <div class="user-entry">

            <div class="loginForm" id="loginform">
                <form action="userlogin.php" method="post">
                    <h2>Sign In</h2>
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="name" placeholder="Email or Username"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="pw" placeholder="Password">
                    
                    <span id="login-error" style="color: red;"></span><br><br>
                    <input type="submit" value="Login" name="login">
                </form>
            </div>

            <div class="registerForm" id="registerform">
                <form method="post" action="login.php" onsubmit="return validateRegisterForm();">
                    <h2>Sign Up</h2>
                    <label for="new-username">Username:</label><br>
                    <input type="text" id="new-username" name="name" placeholder="Enter the username"><br>
                    <label for="new-Email">Email:</label><br>
                    <input type="email" id="new-Email" name="email" placeholder="Enter the email"><br>
                    <label for="new-password">Password:</label><br>
                    <input type="password" id="new-password" name="pw" placeholder="Create the password">
                    <span id="register-error" style="color: red;"></span><br><br>
                    <input type="hidden" name="usertype" value="admin">
                    <input type="submit" value="Register" name="registerBtn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>