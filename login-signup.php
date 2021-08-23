<?php
  include 'header.php';
?>


<!-- banner  -->
<section class="banner">
    <div class="my-rgba py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="h1">Signup/Login</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item cover-link-color"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Signup/Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signup/Login -->

<section class="login_signup mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <form>
                    <div class="h2">Login</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6 mt-5">
                <div class="h2">Sign Up</div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="textHelp"
                            placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer start-->
<?php
  include 'footer.php';
?>
