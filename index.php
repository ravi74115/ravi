<!-- index.php or header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Login</title>
    <style>
        body
        {
            background-image: url('car.jpg');
            background-repeat: no-repeat; /* Optional: prevents tiling */
            background-size: cover;       /* Optional: scales image to cover the entire element */
            background-position: center;
            background-color: rgba(0, 0, 0,2);
        }
        .login-selection {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 100px;
        }

        .login-selection img {
            width: 150px;
            height: 150px;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 10px;
            transition: 0.3s;
        }

        .login-selection img:hover {
            border-color: #007bff;
            transform: scale(1.05);
        }

        .login-selection div {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;font-size:30px;">Choose Login Type</h2>
<div class="login-selection">
    <div>
    <a  href="admin">
            <img src="adminn.jpg" alt="Admin Login">
        </a>
        <p style="color:white;font-size:30px;">ADMIN</p>
    </div>

    <div>
        <a href="user">
            <img src="user.png" alt="User Login">
        </a>
        <p style="color:white;font-size:30px;">USER</p>
        </div>
    </div>
  
</div>

</body>
</html>
