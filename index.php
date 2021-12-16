<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <style>
    .bg1 {
      background-color: rgb(238, 173, 149);

    }
  </style>


</head>

<body>
  <div class="container bg1 ">
    <h1 style="text-align: center ; padding-top: 10px;">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1> <br />
    <form action="">
      <div class="form-group row">
        <label for="inputIdcard" class="control-label col-sm-2">เลขบัตรประชาชน<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="inputIdcard"  placeholder="เลข 13 หลัก" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPrefix" class="control-label col-sm-2">คำนำหน้า<span>*</span></label>
        <div class="col-md-2">
          <select id="inputPrefix" class="form-control">
            <option value="man" selected>นาย</option>
            <option value="ms">นางสาว</option>
            <option value="miss">นาง</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputfname" class="control-label col-sm-2">ชื่อ<span>*</span></label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="inputfname" required>
        </div>
        <label for="inputlname" class="form-label">นามสกุล<span>*</span></label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="inputlname" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputGender" class="control-label col-sm-2">เพศ<span>*</span></label>
        <div class="col-md-2">
          <select id="inputGender" class="form-control">
            <option value="title" selected>ชาย</option>
            <option value="ms">หญิง</option>
            <option value="miss">ไม่ระบุ</option>
          </select>
        </div>
        <label for="inputCult" class="form-label ">ศาสนา<span>*</span></label>
        <div class="col-md-2">
          <select id="inputCult" class="form-control">
            <option value="buddhist" selected>พุทธ</option>
            <option value="islam">อิสลาม</option>
            <option value="christ">คริสต์</option>
            <option value="other">อื่นๆ</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputIdhome" class="control-label col-sm-2">บ้านเลขที่<span>*</span></label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="inputIdhome" required>
        </div>
        <label for="inputIdvillage" class="form-label ">หมู่ที่่<span>*</span></label>
        <div class="col-sm-1">
          <input type="number" class="form-control" id="inputIdvillage" required>
        </div>
        <label for="inputRoad" class="form-label " required>ถนน<span>*</span></label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="inputRoad" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputLocality" class="control-label col-sm-2">ตำบล/แขวง<span>*</span></label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="inputLocality" required>
      </div>
        <label for="inputDistrict" class="form-label " >อำเภอ/เขต<span>*</span></label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="inputDistrict" required>
      </div>
    </div>
      <div class="form-group row">
        <label for="inputProvince" class="control-label col-sm-2">จังหวัด<span>*</span></label>
        <div class="col-md-3">
          <select id="inputProvince" class="form-control">
            <option value="Province1" selected>นครศรีธรรมราช</option>
            <option value="Province2">เชี่ยงใหม่</option>
            <option value="Province3">กรุงเทพมหานคร</option>
            <option value="Province4">กระบี่</option>
            <option value="Province5">สระบุรี</option>
          </select>
        </div>
        <label for="inputZip" class="form-label ">รหัสไปรษณีย์<span>*</span></label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="inputZip" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPhome" class="control-label col-sm-2">โทรศัพท์บ้าน</label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="inputPhome" required>
        </div>
        <label for="inputPhone" class="form-label ">โทรศัพท์มือถือ<span>*</span></label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="inputPhone" required>
        </div>
      </div><br />
      <label class="form-check-label" for="course1">
        สาขาที่สนใจ
      </label><br />
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="ITD" id="course1">
        <label class="form-check-label" for="course1">
          เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="DCM" id="course2">
        <label class="form-check-label" for="course2">
          ดิจิทัลคอนเทนต์และสื่อ
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="MTA" id="course3">
        <label class="form-check-label" for="course3">
          เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="IMI" id="course4">
        <label class="form-check-label" for="course4">
          นวัตกรรมสารสนเทศทางการแพทย์
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="COMM" id="course5">
        <label class="form-check-label" for="course5">
          นิเทศศาสตร์
        </label>
      </div>

      <div class="form-group row">
        <div class="offset-sm-5 col-sm-5 pull-right">
          <input type="submit" id="btnsubmit" class="btn btn-primary" value="ตกลง" style="margin: 20px; ">
        </div>
      </div>
    </form>
  </div>

</body>

<script type="text/javascript">
  function btnsubmit_click() {
    var card = $("#inputIdcard").val();
 


    var data = "{";
    data += '"card":' + $("#inputIdcard").val() + '';  




    data += "}";

    console.log(JSON.parse(data));
  }
  $(()=>{
    $("#btnsubmit").click(btnsubmit_click);

  });

</script>

</html>
