<?php
include 'header.php';
?>

<?php
$bid =  $_GET['bid'];
$bname =  $_GET['bname'];
$bdes =  $_GET['bdes'];
$blogo =  $_GET['blogo'];
?>

<?php
$sql = "select * from products where b_id = '$bid' order by id desc";
$result = $conn->query($sql);
?>

<!-- banner  -->
<section class="banner">
  <div class="my-rgba py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="h1"><?php echo $bname; ?></p>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item cover-link-color"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $bname; ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  list start -->
<section class="iphone my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <img src="<?php echo $blogo; ?>" alt="Iphone Logo">
          <p class="mt-4 text-justify"><?php echo $bdes; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="iphone-list my-5">
  <div class="container">
    <p class="h2 text-uppercase">LATEST <?php echo $bname; ?> PHONES</p>
    <div class="row">
      <?php
      while ($val = $result->fetch_assoc()) { ?>
        <div class="col-sm-6 col-md-2 mt-5">
          <a href="specification.php">
            <div class="card">
              <img class="card-img-top" src="admin/<?php echo $val['picture']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $val['name']; ?></h5>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!--  iphone list end -->

<!-- footer start-->
<?php
include 'footer.php';
?>