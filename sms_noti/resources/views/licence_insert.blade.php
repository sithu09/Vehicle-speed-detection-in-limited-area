<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Licence Insert</title>
    <style>
        form{
            margin-left:5%;
            margin-right:5%;
            background-color:#E0FFFF;
            padding-left: 200px;
            padding-right: 200px;
        }
        body{
            background-color:#E0FFFF;
        }
        hr{
            margin-left: 250px;
            margin-right: 250px;
            border: 2px solid green;
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-2 padding">
    <h3 class="text-center text-primary">"လိုင်စင်မှတ်ပုံတင် အချက်အလက်များ ဖြည့်စွက်ရန်"<hr></h3>
<form class="padding" action="submit" method="POST">
    @csrf
  <div class="form-group pt-3">
    <label for="name">နာမည်</label>
   <input type="text" class="form-control" id="name"  placeholder="" name="name">
  </div>
  <div class="form-group">
    <label for="idcard">မှတ်ပုံတင်</label>
    <input type="text" class="form-control" id="idcard" placeholder=""  name="id">
  </div>
  <div class="form-group">
      <label for="Address">နေရပ်</label>
      <input type="text" class="form-control" id="address" name="address">
  </div>
<div class="form-group">
    <label for="phone_no">ဖုန်းနံပါတ်</label>
    <input type="text" class="form-control id="phone" name="phoneno">
</div>
<div class="form-group">
    <label for="job">အလုပ်အကိုင်</label>
    <input type="text" class="form-control" id="job" name="job">
</div>
<div class="form-group">
    <label for="type">ယာဥ်အမျိုးအစား</label>
    <input type="text" class="form-control" id="type" name="type">
</div>
<div class="form-group">
<label for="licence">လိုင်စင်နံပါတ်</label>
<input type="text" class="form-control" id="licence" name="licence">
</div>
<div class="form-group">
    <label for="expire">သက်တမ်း</label>
    <input type="text" class="form-control" id="expire" name="expire">
</div>
  <button type="submit" class="btn btn-primary btn-block mb-5 mt-4">လိုင်စင်မှတ်ပုံတင်မည်</button>
</form>
</div>
</body>
</html>
