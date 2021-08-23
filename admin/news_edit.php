<?php
  include 'header.php';
?>

  <div class="alert alert-success mt-4">
    News Edit
  </div>
      <!-- Brand add-->
    <section class="brand_add mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <label for="inputName">News Title</label>
                        <input type="text" class="form-control" id="inputName" placeholder="">
                </div>
                
               <div class="col-md-4 mt-3">
                    <form class="">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">News Image
                            </label>
                            <input type="file" class="form-control-file border p-3" id="exampleFormControlFile1">
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">News Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <a name="" id="" class="btn btn-primary mt-3" href="#" role="button"> Update News</a>
                </div>
            </div>
        </div>
    </section>

<?php
  include 'footer.php';
?>