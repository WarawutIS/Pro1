<?php
    require_once 'library.php';

?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<?php include 'header.php';?>
<div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="register_action.php">

                    <legend class="text-center">ลงทะเบียน</legend>

                    <fieldset>

                        <div class="form-group col-md-6">
                            <label for="inputuname3">Username</label>
                            <input type="text" class="form-control" name="uname" id="inputuname3" placeholder="Username">
                        </div>

                        <div class="form-group col-md-12">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword3">รหัสผ่าน</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCpassword3">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" name="cpass" id="confirm_password" placeholder="Confirm Password">
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend></legend>

                        <div class="form-group col-md-6">
                            <label for="inputFname3">ชื่อ</label>
                            <input type="text" class="form-control" name="fname" id="inputFname3" placeholder="First Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputLname3">นามสกุล</label>
                            <input type="text" class="form-control" name="lname" id="inputLname3" placeholder="Last Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputIdnumber3">รหัสบัตรประชาชน</label>
                            <input type="text" class="form-control" name="Idnum" id="inputIdnumber3" placeholder="ID Number">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="inputEmail3">อีเมล์</label>
                              <input type="email" class="form-control" name="Email" id="inputEmail3" placeholder="Email Address">
                        </div>


                        <div class="form-group col-md-12">
                        </div>

                        <div class="form-group col-md-8">
                          <label for="inputAddress3">ที่อยู่</label>
                          <textarea class="form-control" name="Address" id="inputAddress3" placeholder="Address"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputProvince3">จังหวัด</label>
                            <select class="form-control" name="Province" id="inputProvince3">
                              <option value="0"selected="selected">- เลือกจังหวัด -</option>
                              <option value="1">สงขลา</option>
                              <option value="2">พัทลุง</option>
                              <option value="3">ตรัง</option>
                              <option value="4">นครศรีธรรมราช</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputZcode3">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" name="Zcode" id="inputZcode3" placeholder="Zip Code">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="inputUsertype3">ประเภทผู้ใช้</label>
                          <select class="form-control" name="Utype" id="inputUsertype3">
                            <option value="0"selected="selected">- เลือกประเภทผู้ใช้ -</option>
                            <option value="1">เกษตรกร</option>
                            <option value="2">พ่อค้า</option>
                          </select>
                        </div>

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="reg" >
                                ยืนยัน
                            </button>
                            <?php include 'footer.php';?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
  <br>
  <br>


</html>
