<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'dollarstore');

if(isset($_POST['savedata']))
{
    $itname = $_POST['itname'];
    $price = $_POST['price'];
    $tsupply = $_POST['tsupply'];
    $tsold = $_POST['tsold'];
    $tavail = $_POST['tavail'];

    $var = $tsupply - $tsold;

    $query = "INSERT INTO StoreItems (`itname`, `price`, `tsupply`, `tsold`, `tavail`) VALUES ('$itname', '$price', '$tsupply', '$tsold', '$var')"; 
                
            
    $query_run = mysqli_query($conn, $query);

    if ($query_run)
    {
       
        echo "New Item Saved Successfully...";
        header('Location: dashboard.php');
        // $message = "New Item Saved Successfully...";

        // echo "<script>
        // alert('$message');
        // window.location.href='index.php';
        // </script>";
    } else{
        $message = "Error Occured while saving Item";

        echo '<script>
        alert $message;
        </script>';
    }
}
?>