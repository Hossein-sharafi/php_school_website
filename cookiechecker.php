<!-- PB Hossein Sharafi -->
<?php error_reporting(0);
if(isset($_COOKIE["shbsloginemail"]) and isset($_COOKIE["shbsloginuser"]) and isset($_COOKIE["shbsloginpas"]))
{
    $username = $_COOKIE["shbsloginuser"];
    $pas = $_COOKIE["shbsloginpas"];
    $email = $_COOKIE["shbsloginemail"];
    $sqlcode = "SELECT user FROM logindata WHERE email='$email' AND pas='$pas'";
    include 'sqlconnect.php';
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $username = $row['user'];
        setcookie('shbsloginuser',$username, time() + (3600));}
        else{
            Setcookie ("shbsloginuser",$username, time() - (36000));
            Setcookie ("shbsloginpas",$pas, time() - (36000));
            Setcookie ("shbsloginemail",$email, time() - (36000));

        }
}

?>
<!-- PB Hossein Sharafi -->