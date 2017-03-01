<?php
    require_once 'library.php';
    ////เปลี่ยนเป็นหน้าแรก
  ///  if(chkLogin()){
      //  header("Location: home.php");
//    }
?>




  <form class="form-inline" method="login" action="login_action.php">

  <div class="form-group">
    <label class="sr-only" for="inputuname3">Username</label>
    <input type="text" class="form-control" id="inputuname3" name="uname" placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="inputPassword3">Password</label>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary" name="login" >เข้าสู่ระบบ</button>
  <div class="form-group">
    <U><h6><a href="register.php">ลงทะเบียน</a></h6>

  </div>

</form>
