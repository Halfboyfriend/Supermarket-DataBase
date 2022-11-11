<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'dollarstore');

if(isset($_POST['savedata']))
{
    $itname = $_POST['itname'];
    $tsupply = $_POST['tsupply'];
    $tsold = $_POST['tsold'];
    $tavail = $_POST['tavail'];

    $query = "INSERT INTO StoreItems (`itname`, `tsupply`, `tsold`, `tavail`) VALUES ('$itname', '$tsupply', '$tsold', '$tavail')"; 
                
            
    $query_run = mysqli_query($conn, $query);

    if ($query_run)
    {
        echo "New Item Saved Successfully...";
        header('Location: index.php');
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