


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-SHIRT SHOPPING</title>
    <style>
        body {
            background-color: bisque;
        }
    </style>
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $tagline = $_POST['tagline'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

  
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "rohan1";

$conn = MySqLi_connect($servername,$username,$password,$database);


//Die if connection was not successful
if (!$conn){
    die("Sorry Rohan". MySqLi_connect_error());
}
else{
    echo "Connection was succesful Rohan<br>";
}


$sql = "INSERT INTO `shirt` (`tagline`, `color`, `size`, `quantity`, `date`, `name`, `phone_no.`, `email`, `address`) VALUES ('$tagline', '$color', '$size', '$quantity', current_timestamp(), '$name', '$phone', '$email', '$address')";

$result = MySqli_query($conn, $sql);

if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your details are successfully submitted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';


}
else{
    echo "The table was not created successfully beacuse of this error ----> ". MySqLi_error($conn);
}

}
?>




    <h2 style="background-color: aqua; color: brown;">READY TO BUY SOME OF THE BEST T-SHIRTS AT EXTEMELY CHEAP PRICES
    </h2>
    <strong>JUST FILL THE DETAILS BELOW AND GET STARTED</strong>
    <br><br>
    <form action="/sttp/index.php" method="post">

        <div>
            TAGLINE ON T-SHIRT : <input type="text" class="form-control" id="tagline" name="tagline">
        </div>
        <br>

        <div>
            COLOR OF T-SHIRT : <input type="text" class="form-control" id="color" name="color">
        </div>
        <br>

        <div>
            SIZE ON T-SHIRT : 
            <select class="form-control" id="size" name="size">
                <option value="SMALL">SMALL</option>
                <option value="LARGE">LARGE</option>
                <option value="X-LARGE">X-LARGE</option>
                <option value="XX-LARGE">XX-LARGE</option>
            </select>
        </div>
        <br>

        <div>
            QUANTITY OF T-SHIRT : <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <br>

        <div>
            DATE OF DELIVERY : <input type="date" class="form-control" id="date" name="date">
        </div>
        <br>

        <div>
            NAME OF CUSTOMER : <input type="number" class="form-control" id="name" name="name">
        </div>
        <br>

        <div>
            PHONE NO. OF CUSTOMER : <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <br>

        <div>
            EMAIL-ID OF CUSTOMER : <input type="email" class="form-control" id="email" name="email">
        </div>
        <br>

        <div>
            ADDRESS OF DELIVERY : <br>
            <textarea class="form-control" id="address" name="address" rows="10" cols="40"></textarea>
        </div>
        <br>
        <br>

        <button type="reset">RESET NOW</button>
        <button type="submit">SUBMIT NOW</button>

    </form>

</body>

</html>