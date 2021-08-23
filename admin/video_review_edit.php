<?php
  include 'header.php';
?>

  <div class="alert alert-success mt-4">
    Video Comparion Edit
  </div>
      <!-- Comparion edit-->
      <section class="brand_edit mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <label for="inputName">Comparion Title</label>
                        <input type="text" class="form-control" id="inputName" placeholder="">
                </div>

               <div class="col-md-4 mt-3">
                    <form class="">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Comparion Video
                            </label>
                            <input type="file" class="form-control-file border p-3" id="exampleFormControlFile1">
                            <a name="" id="" class="btn btn-primary mt-3" href="#" role="button"> Update Video</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
  include 'footer.php';
?>