<?php
include 'header.php';
?>

<?php
$sql = "select * from products order by id desc";
$result = $conn->query($sql);
$sql2 = "select * from brands order by name asc";
$brands = $conn->query($sql2);
?>

<?php
// add or insert data 
if (isset($_POST['add'])) {
  $bid = $_POST['bid'];
  $name = $_POST['name'];
  // image upload
  $filename = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];
  $folder = "upload/" . time() . '-' . $filename;

  $sql = "insert into products (b_id, name, picture, created_at)
          VALUES ('$bid', '$name', '$folder', now())";
  move_uploaded_file($tempname, $folder);
  if ($conn->query($sql) === TRUE) {
    header('location:' . $_SERVER['REQUEST_URI']);
  }
}

// delete data  
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $sql = "delete from products where id = '$id'";
  if ($conn->query($sql) === TRUE) {
    unlink($_POST['picture']);
    header('location:' . $_SERVER['REQUEST_URI']);
  } else {
    echo '<script>alert("Error!")</script>';
  }
}

// edit data 
if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $sql = "update products set name = '$name' where id = '$id' ";
  if ($conn->query($sql) === TRUE) {
    header('location:' . $_SERVER['REQUEST_URI']);
  }
}
?>

<div class="alert alert-success">
  <h5 class="mb-0">Products</h5>
</div>

<div class="d-flex justify-content-end">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">
    + Add New Product
  </button>
</div>

<?php
if ($result->num_rows > 0) { ?>
  <table class="table mt-4">
    <thead>
      <tr>
        <th>#</th>
        <th>Picture</th>
        <th>Name</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      <!-- fetch/view data from database -->
      <?php
      $i = 1;
      while ($val = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td>
            <img src="<?php echo $val['picture']; ?>" alt="picture" width="50px" class="rounded-circle">
          </td>
          <td><?php echo $val['name']; ?></td>
          <td class="text-right">
            <div class="d-flex justify-content-end">
              <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $val['id']; ?>">
                <input type="hidden" name="picture" value="<?php echo $val['picture']; ?>">
                <button id="delete" type="submit" class="btn btn-danger" name="delete">
                  Delete
                </button>
              </form>
              <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#edit<?php echo $val['id']; ?>">
                Edit
              </button>
            </div>

            <!-- edit modal -->
            <div class="modal text-left fade" id="edit<?php echo $val['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                      <h5 class="modal-title">+ Add New Product</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="id" value="<?php echo $val['id']; ?>">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Product Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $val['name']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" name="edit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- edit modal -->
          </td>
        </tr>
      <?php
        $i++;
      }
      ?>
      <!-- fetch/view data from database -->
    </tbody>
  </table>
<?php } else { ?>
  <div class="alert alert-danger mt-4" role="alert">
    <strong>Product record not found!</strong>
  </div>
<?php } ?>

<!-- Add Modal -->
<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title">+ Add New Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="">Brand Name</label>
              <select name="bid" class="form-control" required>
                <option value="" selected>Choose Brand</option>
                <?php
                while ($val2 = $brands->fetch_assoc()) { ?>
                  <option value="<?php echo $val2['id']; ?>"><?php echo $val2['name']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="">Product Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group col-md-12">
              <label for="">Product Picture</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="picture" required>
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Add Modal -->

<?php
include 'footer.php';
?>