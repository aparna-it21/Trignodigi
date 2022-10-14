<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
 
</style>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="assets\css\order_page_css.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>

</style>
</head>
<body>
 
<div class="container">
<nav>
    <div class="logo"><img src="assets/images/logo_2.png" alt="logo">
  </nav>
<div class="title">ORDER A FISH</div>
<div class="content">
<form action="add_market_driver_process.php" method="post">
<div class="user-details">
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="domain">
  <option selected>Select Fish Type</option>
  <option   value="m" required>Catla Fish</option>
  <option   value="seller" required >Rohu Fish</option>
  <option   value="customer"required >Jilebi Fish</option>
</select>
<div class="input-box">
  <span class="details">Name</span>
  <input type="text"name="name" placeholder="Enter your name" required>
  </div>
<div class="input-box">
  <span class="details">Weight</span>
  <input type="text"name="weight" placeholder="Enter the weight" required>
  </div>
  <div class="input-box">
<span class="details">Location </span>
<input type="location" name="location" placeholder="Enter your location" required>
</div>
<div class="input-box">
  <span class="details">Mobile Number</span>
  <input type="text" placeholder="Mobile Number" name="mobilenumber"  required>
  </div>
<script>
function myFunction() {
  alert("sucessfully ordered.....");
}
</script>
          <button  class="register_button" type="submit" name="register"  onclick="myFunction()">ORDER NOW</button></a>
      </div>

</form>
</div>
</div>
</body>
</html>
