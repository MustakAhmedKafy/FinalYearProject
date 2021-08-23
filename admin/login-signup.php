<?php
  include 'header.php';
?>

  <div class="alert alert-success mt-4">
    <h5>Login/Sign Up</h5>
  </div>
  
 
    <section class="login_signup my-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 mt-5">
                      <form>
                         <div class="h2">Login</div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary">Login</button>
                      </form> 
                  </div>
                  <div class="col-md-6 mt-5">
                     <div class="h2">Sign Up</div>
                      <form>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Full Name</label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="textHelp" placeholder="Enter your name">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary">Sign Up</button>
                      </form> 
                  </div>
              </div>
          </div>
      </section>


<?php
  include 'footer.php';
?>