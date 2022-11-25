<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <title>DollarStore</title>
</head>
<body>

     <!-- ###################################################################### -->
  
  <!-- Modal -->
  <div class="modal fade" id="additems" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">ADD ITEMS</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="newitems.php" method="POST">
        <div class="modal-body">
            
                         <div class="form-group">
                            <label for="#"> <h4>Item Name</h4></label>
                            <input type="text" name="itname" class="form-control" placeholder="Name of Item" required>
                        </div>

                        <div class="form-group">
                       <label for=""><h4>Price(₦)</h4></label>
                       <input type="text" name="price" id="price" class="form-control" placeholder="Item Price(₦)" required >
                        </div>

                        <div class="form-group">
                       <label for=""> <h4>Total Supplied</h4></label>
                       <input type="text" name="tsupply" class="form-control" placeholder="Number of items supplied" required>
                        </div>

                        <div class="form-group">
                            <label for=""><h4>Total Sold </h4></label>
                            <input type="text" name="tsold" class="form-control" placeholder="Number of items sold" required>
                        </div>

                        <div class="form-group">
                            <label for=""> <h4>Total Available</h4></label>
                            <input type="hidden" name="tavail" class="form-control" placeholder="Number of items availble">
                        </div>
                          
        </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="savedata" class="btn btn-primary">Save Data</button>
                </div>
    </form>
      </div>
    </div>
  </div>


     <!-- ###################################################################### -->


    <!-- Edit Modal BTN -->
    <div class="modal fade" id="edit_items" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">EDIT ITEMS</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="updateitems.php" method="POST">
        <div class="modal-body">
            

         <input type="hidden" name="id" id="id">
            
                    
                         <div class="form-group">
                       
                            <label for="#"><h4>Item Name</h4></label>
                            <input type="text" name="itname" id="itname" class="form-control" placeholder="Name of Item">
                        </div>

                        <div class="form-group">
                       <label for=""><h4>Price(₦)</h4></label>
                       <input type="text" name="price" id="price" class="form-control" placeholder="Item Price(₦)">
                        </div>

                        <div class="form-group">
                       <label for=""><h4>Total Supplied</h4></label>
                       <input type="text" name="tsupply" id="tsupply" class="form-control" placeholder="Number of items supplied">
                        </div>

                        <div class="form-group">
                            <label for=""> <h4>Total Sold</h4></label>
                            <input type="text" name="tsold" id="tsold" class="form-control" placeholder="Number of items sold">
                        </div>

                        <div class="form-group">
                            <label for=""> <h4>Total Available</h4></label>
                            <input type="hidden" name="tavail" id="tavail" class="form-control" placeholder="Number of items availble">
                        </div>
                          
        </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                </div>
    </form>
      </div>
    </div>
  </div>
 
    <!-- ###################################################################### -->



    
    <!-- Delete Modal BTN -->
    <div class="modal fade" id="delete_items" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE ITEMS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="deleteitems.php" method="POST">
        <div class="modal-body">
            

         <input type="hidden" name="delete" id="delete">

         <h4>Are you sure you want to delete this Item?</h4>
                   
        </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                <button type="submit" name="deletedata" class="btn btn-danger">YES</button>
                </div>
    </form>
      </div>
    </div>
  </div>
 
    <!-- ###################################################################### -->

    
<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2 class="text-center">PECULIAR-PLUS STORE</h2>
        </div>
        <div class="card">
            <div class="card-body">
                    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#additems">
                ADD ITEMS
            </button>

            <!--Search btn-->
            <form action="dashboard.php" method="GET">
                <div class="input-group mt-5 mb-3">
          <input type="text" class="form-control" placeholder="Search for items" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        </form>


                    <!-- <form action="search.php" method="POST">
                        <div class="form-group">
                            <label>Search</label>
                            <input type="text" name="search">
                            <input type="submit" name="submit">
                           
                        </div>
                        </form> -->
            </div>
        </div>

        <div class="card">
            <div class="card-body">

        <?php
            $conn = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($conn, 'dollarstore');

            $query = "SELECT * FROM StoreItems";
            $query_run = mysqli_query($conn, $query);
            ?>
         <table id="datatable" class="table table-bordered table-dark display">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price(₦)</th>
            <th scope="col">Total Supplied</th>
            <th scope="col">Total Sold</th>
            <th scope="col">Total Available</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
            </tr>
        </thead>
                   
        <tbody>
             <?php

                   //Check for search input
                   if(isset($_GET['search']))
                   {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM StoreItems WHERE CONCAT(itname,price,tsupply,tsold,tavail) LIKE '%$filtervalues%' ";

                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                                  
                          if($query_run)
                          {
                              foreach($query_run as $row)
                              {
                          ?>
                
                      <tr>
                      <td> <?php echo $row['id']; ?> </td>
                      <td> <?php echo $row['itname']; ?> </td>
                      <td> <?php echo $row ['price']; ?> </td>
                      <td> <?php echo $row['tsupply']; ?> </td>
                      <td> <?php echo $row['tsold']; ?> </td>
                      <td> <?php echo $row['tavail']; ?> </td>
                      <td>
                          <button type="button" class="btn btn-success editbtn">EDIT</button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-danger deletebtn">DELET</button>
                      </td>
                    
                      </tr>
                      <?php   
                          } 
                      }
                          else
                          {
                              echo "No Record Found";
                          }
                   
                    }
                    else{
                        ?>
                        <tr>
                          <td colspan="8" class="text-center lead">
                            No Records Found
                          </td>
                        </tr>
                        <?php
                    }
                   }
                    ?>

        
        </tbody>
        

        </table>
            </div>
        </div>
    </div>
</div>






<?php
include "footer.php";
?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


<!-- 
 <script>
  $(document).ready(function () {
    $('#datatable').DataTable({
        // "pagingType": "full_members",
        // "lengthMenu": [
        //     [10, 25, 50, -1],
        //     [10, 25, 30, "ALL"]
        // ],
        // responsive: true,
        // language: {
        //     search: "_INPUT_",
        //     searchPlaceholder: "Search Items",
        // }

      //         var table = $('#datatable').DataTable();
      
      // $('#datatable tbody').on('click', 'tr', function () {
      //     var data = table.row(this).data();
      //     alert('You clicked on ' + data[0] + "'s row");
      // });
    });
});
</script>  -->

<!-- <script>
  $(document).ready(function () {
    var table = $('#example').DataTable();
 
    $('#example tbody').on('click', 'tr', function () {
        var data = table.row(this).data();
        alert('You clicked on ' + data[0] + "'s row");
    });
});
</script> -->

<script>
    $(document).ready(function(){
       $('.deletebtn').on('click', function()
       {
        $('#delete_items').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);

            $('#delete').val(data[0]);
         
       });
    });
</script>




<script>
    $(document).ready(function(){
       $('.editbtn').on('click', function()
       {
        $('#edit_items').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);

            $('#id').val(data[0]);
            $('#itname').val(data[1]);
            $('#price').val(data[2]);
            $('#tsupply').val(data[3]);
            $('#tsold').val(data[4]);
            $('#tavail').val(data[5]);
       });
    });
</script>

</body>

</html>