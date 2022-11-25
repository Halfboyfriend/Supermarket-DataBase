<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    <style>
      body{
      overflow-x: hidden;
      }
    </style>
    
    <title>DollarStore</title>
</head>
<body>


  

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/shop1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/shop2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/shop3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>





    
<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2 class="text-center">PECULIAR-PLUS STORE</h2>
        </div>
        <div class="card">
            <div class="card-body">
                    <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#additems">
                ADD ITEMS
            </button> -->


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
            <!-- <th scope="col">Total Sold</th>
            <th scope="col">Total Available</th> -->
            <!-- <th scope="col">EDIT</th>
            <th scope="col">DELETE</th> -->
            </tr>
        </thead>
                   
        <tbody>
             <?php

                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                ?>
      
            <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['itname']; ?> </td>
            <td> <?php echo $row['price']; ?> </td>
                    <!-- <td>
                <button type="button" class="btn btn-success editbtn">EDIT</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger deletebtn">DELET</button>
            </td> -->
           
            </tr>
            <?php   
                } 
            }
                else
                {
                    echo "No Record Found";
                }
            
            ?>
        
        </tbody>
        

        </table>
            </div>
        </div>
    </div>
</div>

<div class="container">

<div>
  <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="name" class="">Your name</label>
                        <input type="text" id="name" name="name" class="form-control">
                        
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="email" class="">Your email</label>
                        <input type="text" id="email" name="email" class="form-control">
                        
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                    <label for="subject" class="">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" require>
                       
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                    <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        
                    </div>

                </div>
            </div>
            <!--Grid row-->
            <div class="text-center text-md-left mt-2">
            <!-- <a class="btn btn-primary">Send</a> -->
            <button class="btn btn-primary">Send</button>
        </div>

        </form>

       
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Ajanaku, Tanke, Ilorin, Nigeria</p>
            </li>

            <li>
            <a href="tel: +234 703 463 8484"><i class="fas fa-phone mt-4 fa-2x"></i></a>
                <p>
                  
                  +234 703 463 8484
                </p>
                

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>peculiarplus@gmail.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
</div>

<div>
  
<div class="mapouter" id="location"><div class="gmap_canvas">
  <iframe width="800" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Tanke%20Ilorin%20Nigeria&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:800px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:700px;}</style></div></div>

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
    });
});
</script>

<script>
    $('.carousel').carousel({
  interval: 1200
})
</script>
</body>
</html>