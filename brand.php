<?php
include 'header.php';
?>

<?php
$sql = "select * from brands order by id desc";
$result = $conn->query($sql);
?>

<!-- banner  -->
<section class="banner">
  <div class="my-rgba py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="h1">Brand</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item cover-link-color"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Brand</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  Brand list start -->
<section class="brand my-5">
  <div class="container">
    <p class="h2 text-center">Most Populer Brand</p>
    <!-- row -->
    <div class="row">
      <?php
      while ($val = $result->fetch_assoc()) { ?>
        <div class="col-md-4 mt-5">
          <div class="wg-box-content">
            <a href="brand_model.php?bid=<?php echo $val['id']; ?>&bname=<?php echo $val['name']; ?>&bdes=<?php echo $val['description']; ?>&blogo=admin/<?php echo $val['logo']; ?>">
              <div class="wg-box-content-overlay"></div>
              <img class="wg-box-content-image" src="admin/<?php echo $val['logo']; ?>">
              <div class="wg-box-content-details wg-box-fadeIn-bottom">
                <h3 class="wg-box-content-title"><?php echo $val['name']; ?></h3>
              </div>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- row -->
  </div>
</section>
<!--  Brand list end -->

<!-- footer start-->
<?php
include 'footer.php';
?>