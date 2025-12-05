<?php 
include "config.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title></title>
  </head>
  <body>
    <form method="post">
  <label>fullName :</label>
  <input type="text" placeholder="Enter full name" name="full_name"><br><br>
  
  <label>Email :</label>
  <input type="email" placeholder="Enter email" name="email"><br><br>
  
  <label>Address:</label>
  <input type="text" placeholder="Enter address" name="address"><br><br>
  <button tpye="submit" name="btn">Submit</button>
  
</form>
<?php 
if(isset($_POST["btn"])){
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $query = "INSERT INTO users(full_Name, email, address) VALUES
    ('$fullName', '$email', '$address')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "Data Insert";
    }
    else{
        echo"Error";
    }
}
?>
  </body>
</html>