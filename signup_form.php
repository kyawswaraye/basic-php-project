<?php 
        include_once("../partials/header.php");
?>
    <div class="container">
        <form action="login.php" method="POST">
            <input type="text" class="form-control" name="name" placeholder="YourName">
            <input type="text" class="form-control" name="email" placeholder="YourEmail" >
            <input type="text" class="form-control" name="password" placeholder="Your Password">
            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number">
            <input type="text" class="form-control" name="dob" placeholder="Your Date Of Birth">
            <input type="text" class="form-control" name="nrc" placeholder="Your NRC">
            <input type="text" class="form-control" name="nationality" placeholder="Your Nationality">
            <input type="text" class="form-control" name="gender" placeholder="Your Gender">
            <input class="btn btn-primary" type="submit">
        </form>
    </div>

<?php include_once("../partials/footer.php"); ?>