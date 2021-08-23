<?php
  include 'header.php';
?>

  <div class="alert alert-success mt-4">
    <h5>User Profile</h5>
  </div>
  <div class="d-flex justify-content-end">
    <a name="" id="" class="btn btn-primary" href="profile_edit.php" role="button">Update Pfofile</a>
    </div>
 <section class="profile my-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3">
                <img class="avatar" src="img/kafy.jpg" alt="Profile Picture" width=100% style=" vertical-align: middle; width: 200px;height: 195px;border-radius: 50%;">
            </div>
            <div class="col-md-8 mt-3">
            <div class="conainer search-table">
              <div class="search-list">
           
                  <table class="table" id="myTable">
                    <!-- <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                        </tr>
                    </thead> -->
                    <tbody>  
                    <tr>
                        <th>Name</th>
                        <td>Mustak Ahmed Kafy</td>
                    </tr>
                    <tr>
                       <th>Email</th>
                        <td>ahmedmustak99@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Birthday</th>
                        <td>23-08-1999</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Baya, Paba, Rajshahi, Bangladesh</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
            </div>
        </div>
    </div>
</section>

<div class="container" style="min-height: 40vh;"></div>


<?php
  include 'footer.php';
?>