
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h3 class="text-center">You Need To Signup!</h3>
    <div class="container p-5">
        <form action="user_formdata.php" method="post" align="center">
            <input class="form-control" type="text" name="name" placeholder="Your Name">
            <input class="form-control" type="text" name="email" placeholder="Your Email">
            <input class="form-control" type="password" name="password" placeholder="Your password">
            <input class="form-control" type="date" name="dob" placeholder="Your Date Of Birth">
            <input class="form-control" type="text" name="nrc" placeholder="Your NRC">
            <input class="form-control" type="text" name="phone" placeholder="Your Phone">
            <input class="form-control" type="text" name="nationality" placeholder="Your Nationality">
            <input class="form-control" type="text" name="gender" placeholder="Your Gender">
            <input class="text-right" type="submit">
        </form>
    </div>
    <h4 class="text-center">Already Have An Account.Sign In Here</h4>
    <div align="center"><a href="user_login.php">Login</a></div>
</body>
</html>


