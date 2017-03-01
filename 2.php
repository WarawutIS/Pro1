<?php
    require_once 'library.php';
    ////เปลี่ยนเป็นหน้าแรก
  ///  if(chkLogin()){
      //  header("Location: home.php");
//    }
?>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">เข้าสู่ระบบ</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" id="inputuname3" name="uname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="pass" name="pass" type="password" placeholder="Password" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" class="btn btn-primary">เข้าสู่ระบบ</button>
                                <a href="register.php" button type="button" class="btn btn-link">ลงทะเบียนเกษตรกร</a>
                                <a href="forgotpassword.php" button type="button" class="btn btn-link">ลืมรหัสผ่าน</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>
