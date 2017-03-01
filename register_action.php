<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>

<?php
///กรอกข้อมูลอะไรบ้าง
   if(isset($_POST['reg'])){
        $uname = $_POST['uname'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['Email'];
        $temp  = $_POST['pass'];
        $Idnum = $_POST['Idnum'];
        $Address = $_POST['Address'];
        $Province = $_POST['Province'];
        $Zcode = $_POST['Zcode'];
        $Utype = $_POST['Utype'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);

        $arrays = array(
            "Username"      => $uname,
            "First Name"    => $fname,
            "Last Name"     => $lname,
            "Email Address" => $email,
            "Password"      => $pass,
            "ID Number"     => $Idnum,
            "Address"       => $Address,
            "Province"      => $Province,
            "Zip Code"      => $Zcode,
            "Usertype"      => $Utype,
        );

        $query = chkemail($email);
        if($query){
            register($arrays);
            header("Location: index.php");
            }
       else{

        echo "Email already registered!";
           echo"<br>";
        echo "Please <a href='register.php'>Register</a> with another email ID";
       }
}

?>
