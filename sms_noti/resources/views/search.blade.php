<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Owner Search</title>
  </head>
  <body>
  <div class="container mt-4">
  <input class="form-control mb-4" id="tableSearch" type="text" style="margin-top:50px"
    placeholder="လိုင်စင်နံပါတ်ထည့်ရန်">
    <button class="btn btn-outline-primary text-white btn-block" type="submit" style="margin-bottom:20px"><a href="{{url('/sms')}}">SMSပို့ရန်</a></button>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>စဥ်</th>
        <th>အမည်</th>
        <th>မှတ်ပုံတင်</th>
        <th>နေရပ်</th>
        <th>ဖုန်းနံပါတ်</th>
        <th>အလုပ်အကိုင်</th>
        <th>လိုင်စင်နံပါတ်</th>
        <th>ယာဥ်အမျိုးအစား</th>
        <th>သက်တမ်း</th>
        <!-- အမည်
မှတ်ပုံတင်
နေရပ်
ဖုန်းနံပါတ်
အလုပ်အကိုင်
လိုင်စင်နံပါတ်
ယာဥ်အမျိုးအစား
သက်တမ်း -->
      </tr>
    </thead>
    <tbody id="myTable">
        @foreach ($owners as $owner)
<tr>
<td>{{ $owner->id }}</td>
<td>{{ $owner->name }}</td>
<td>{{ $owner->idcard }}</td>
<td>{{ $owner->address }}</td>
<td>{{ $owner->phoneno }}</td>
<td>{{ $owner->job }}</td>
<td>{{ $owner->licence }}</td>
<td>{{ $owner->type }}</td>
<td>{{ $owner->expire }}</td>
</tr>
@endforeach
    </tbody>
  </table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <script>
// Filter table

$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
 </script>

  </body>
</html>
</body>
</html>
