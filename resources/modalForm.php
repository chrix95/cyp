<!-- modal form for registration -->
<div class="modal fade" id="myRegModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><strong>DIONYSIUS NIGERIA - Registration</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form id="regForm" class="modalForm" action="resources/modalScript.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Full name/Company name</label>
                <input type="text" class="form-control" placeholder="Full name/Company name" name="name" autofocus="yes">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>State of residence</label>
                <select class="form-control" name="state" id="state">
                    <option selected disabled>Please select</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City</label>
                <select class="form-control" name="city" id="city">
                  <option selected disabled>Please select</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Address</label>
                <textarea name="address" rows="5" cols="40" class="form-control" placeholder="Address"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitReg" class="btn findOut">Register</button>
                <button type="button" class="btn findOut closeBtn" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal form for registration -->

<!-- modal form for login -->
<div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><strong>DIONYSIUS NIGERIA - Login</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form id="loginForm" class="modalForm" action="resources/modalScript.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Email or Phone</label>
                <input type="text" class="form-control" placeholder="Email or Phone" name="email" autofocus="yes">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitLogin" class="btn findOut">Login</button>
                <button type="button" class="btn findOut closeBtn" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal form for Password -->
<div class="modal fade" id="mypasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><strong>Change Password</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form id="passwordForm" class="modalForm" action="resources/modalScript.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Current password</label>
                <input type="password" class="form-control" placeholder="Current password" name="curpass" autofocus="yes">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">New password</label>
                <input type="password" class="form-control" id="newpassword" placeholder="New password" name="newpass" autofocus="yes">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" placeholder="Confirm password" name="conpassword">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" name="email" value="<?php echo $_SESSION['details']->email; ?>" hidden="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitPassword" class="btn findOut">Submit</button>
                <button type="button" class="btn findOut closeBtn" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
