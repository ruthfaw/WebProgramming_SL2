<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body> 

    <style>

        body{
            background-color: #FBFDAC;
            display: flex;
            justify-content: center;
        }

        form{
            background-color: #ace6fd;
            padding: 0px 0px 10px 0px;
        }

        tr, td{
            padding: 10px;
        }

        caption{
            padding: 20px;
            background-color: #FBFDAC;
        }

        .button{
           margin-left: 90px;
           margin-top: 10px;
           gap: 17px;
           display: flex;
        }

        .button>a{
            background-color: #fdd7ac;
            padding: 4px 14px 4px 14px;
            border: 2px solid black;
            text-decoration: none;
            color: black;
        }
        
        input[type=submit]{
            background-color: #adf59f;
            padding: 4px 20px 4px 20px;
            border: 2px solid black;
        }

    </style>

    <form action="loginProcess.php" method="post">
            
            <table>

                <caption>Login</caption>
                
                <tr></tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="userName" /></td>
                </tr>

                <tr></tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr></tr>

            </table>

            <div class="button">
                <input type ="submit" name="submit" value="Login">
                <a href="index.php">Kembali</a>
            </div>
            
        </form>
</body>
</html>