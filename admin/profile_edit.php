<?php
  include 'header.php';
?>

  <div class="alert alert-success mt-4">
    <h5>Update Profile</h5>
  </div>
  
 <!-- profile -->
 <section class="profile my-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3">
                    <img class="avatar" src="img/kafy.jpg" alt="Profile Picture" width=100% style=" vertical-align: middle; width: 200px;height: 200px;border-radius: 50%;">                <div class="form-group mt-3">
                    <label for="exampleFormControlFile1">Change profile picture
                    </label>
                    <input type="file" class="form-control-file bg-primary p-2 rounded mr-5" id="exampleFormControlFile1" style="width:70%;">
                    <div class=" mt-2">
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Upload</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-3">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Name</label>
                        <input type="text" class="form-control" id="inputName4" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-group">
                    <label for="inputName4">Birth date</label>
                    <input type="text" class="form-control" id="inputName4">
                </div>
                
               <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
               </div> 
            </form>
            </div>
        </div>
    </div>
</section>


<?php
  include 'footer.php';
?>