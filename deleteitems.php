<?php

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'dollarstore');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete'];

    $query = "DELETE FROM StoreItems WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $message = "Item Deleted Successfully...";

        echo "<script>
        alert('$message');
        window.location.href='index.php';
        </script>";
    }
    else{
        $message = "Error Occured while Deleting Item";

        echo '<script>
        alert $message;
        </script>';
    }
}
?>