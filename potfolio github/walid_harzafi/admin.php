<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>

<body>
    <div class="containe">


        <!-- Start Heading ************-->
        <div class="heading">
            <span class="span1" style="color:#fff;">
                - Harzafi Walid -
            </span>

            <br />

            <span class="span2" style="color:#fff;">
                Admin panel
            </span>
            <hr />
        </div>
        <form action="" method="POST">
            <?php
       // Create connection
        $conn = new mysqli("localhost", "root", "", "portfolio");
        if (isset($_POST['submit'])){
       $sql = "SELECT * FROM admin where id=1";
       $x = $conn->query($sql);
       $fetchos = mysqli_fetch_array($x, MYSQLI_ASSOC);
       if($_POST['pass']==$fetchos['password']){
        header('Location:work.php');
        session_start();
        $_SESSION['pass'] = $fetchos['password'];
       }
       echo'<center><p style="color:red">mot de passe incorrect</p></center>';
        }
      ?>
            <input class="pass" type="password" lang="en" name="pass" maxlength="16" placeholder="Password" />
            <div class="remdiv">
                <span class="forgot">
                </span>
            </div>
            <input style="color:#fff;" class="submit" type="submit" name="submit" value="login" />
        </form>

    </div>
</body>

</html>