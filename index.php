<?php echo ("hello world"); ?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>

</style>
</head>
    <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
          <div class="alert alert-success" role="alert">
          Welcome Mojahed!
          </div>
          <div class="col">
            Fill out to Sign up
          </div>
          <div class="row">
        </div>
      </div>
    
<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"> <input type="submit" value="Submit"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"> <input type="submit" value="Submit"><br><br>
    <input type="submit" class="btn btn-info" value="Submit Button"><br><br>
    
    <label for="time">Time</label> &nbsp;<input type="time" id="time" name="Current time">
    <input type="week" id="week" name="Day"><br><br>
    
    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="Phone Number" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br><br>
    
    <input type="checkbox" id="box" name="checkthis">
    <label for="checkthis">Sign up:</label><br>
</form><br>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>John</td>
      <td>Doe</td>
      <td>john@example.com</td>
    </tr>
    <tr>
      <td>Mary</td>
      <td>Moe</td>
      <td>mary@example.com</td>
    </tr>
    <tr>
      <td>July</td>
      <td>Dooley</td>
      <td>july@example.com</td>
    </tr>
  </tbody>
</table>
<br>
  
  <?php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<?php
$ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Joe is " . $ages['Joe'] . " years old.";
?>

<table>
<?php foreach($ages as $key=>$age): ?>
    <tr>
        <td><?= $key; ?></td>
        <td><?= $age; ?></td>
    </tr>
    <?php endforeach; ?>
</table><br>
<?php
$characterName = "MJ";
$characterAge = "25";
$nameA = "Ahmad";
$is = " is ";
$ageA = 26;
$phrase = "giraffe academy";
$br = "<br>";

echo "$characterName  is  $characterAge <br>";
echo $nameA, $is, $ageA;
echo $br;
echo strtolower ($characterName);
echo $br;
echo strtoupper ($nameA);
echo $br;
echo $nameA [3];
echo $br;
echo str_replace("giraffe", "panda", $phrase);
?>

  </body></html>