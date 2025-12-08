<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register ||</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form_act">
        <div class="form_level">
        <form  method="post" >
            <label for="">Full_Name :</label>
            <input type="text" name="first_name" placeholder="Enter name">
            <label for="">Email :</label>
            <input type="email" name="email" placeholder="Enter email">
            <label for="">Address :</label>
            <input type="text" name="address" placeholder="Enter addreess">
            <button type="submit" name="sumbit_btn">Submit</button>
        </form>
        </div>
    </div>
</body>

</html>

<?php 
if (isset($_POST["btn"]))  {
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $query = "INSERT INTO users(full_name, email, address) VALUES
    ('$full_name', '$email', '$address')";

    $data = mysqli_query($conn,$query);

    if($data){
    echo "data insert";
     }
    else{
        echo"Error";
   }

}


?>