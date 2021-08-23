
<?php
  include 'header.php';
?>


<!-- banner  -->
<section class="banner">
    <div class="my-rgba py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="h1">Shopping Cart</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item cover-link-color"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cart Area -->
    <!--  table area   -->
    <div class="container">
        <table class="table text-center mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quality</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Retro Design Quartz Wrist Watch</td>
                    <td>390</td>
                    <td>1</td>
                    <td>390.00</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Retro Design Quartz Wrist Watch</td>
                    <td>390</td>
                    <td>1</td>
                    <td>390.00</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="p-4 border">
                    <div class="p-4 bg-light">
                        <p class="h2 text-center">Please <a href="">Log In</a> To Check Out</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="p-4 border">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td colspan="2">Sub Total</td>
                                <td>390</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tax</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td>390</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!--   payment    -->
    <section class="payment my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="h4 pb-2">Payment</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Transaction ID">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <p class="h4 pb-2">Shipping Address</p>
                    <form action="">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="full Address"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </section>

<!-- footer start-->
<?php
  include 'footer.php';
?>
