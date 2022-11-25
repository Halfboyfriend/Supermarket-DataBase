<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'dollarstore');

    if(isset($_POST['updatedata']))
    {
        $id = $_POST['id'];

        $itname = $_POST['itname'];
        $price = $_POST['price'];
        $tsupply = $_POST['tsupply'];
        $tsold = $_POST['tsold'];
        $tavail = $_POST['tavail'];


        $var = $tsupply - $tsold;
        
        $query = "UPDATE StoreItems SET itname='$itname',price='$price', tsupply='$tsupply', tsold = '$tsold', tavail = '$var' WHERE id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $message = "<h3>Data Updated Successfully...</h3>";
           
            echo "<script>
            alert('$message');
            window.location.href='dashboard.php';
            </script>";
        }
        else{
            $message = "Error Occured while Updating Item";

            echo '<script>
            alert $message;
            </script>';
        }
    }

?>