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
                <button type="submit" name="submitReg" class="btn findOut" id="regBtn">Register</button>
                <button type="button" class="btn findOut closeBtn" data-dismiss="modal" id="close">Close</button>
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
            <div class="col-md-4">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-8">
              <div class="pull-right">
                <button type="submit" name="submitLogin" class="btn findOut" id="loginbutton">Login</button>
                <button type="button" class="btn findOut closeBtn" id="check">Forgot Password</button>
              </div>
            </div>
          </div>
        </form>
        <form id="fpassForm" class="modalForm" action="resources/modalScript.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Company Name</label>
                <input type="text" class="form-control" placeholder="Company Name" name="name" autofocus="yes">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitReset" class="btn findOut" id="resetBtn">Reset</button>
                <button type="button" class="btn findOut" id="back">Back</button>
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
                <button type="submit" name="submitPassword" class="btn findOut" id="changePass">Submit</button>
                <button type="button" class="btn findOut closeBtn" data-dismiss="modal" id="close">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cypoutlets" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><strong>You can get the current edition 2018/19 in any of our sales outlets nationwide listed:</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>The Book Sellers Ltd.52 Magazine Road, Jericho Ibadan Call Miss. Jeniyo on 08033229113. <strong>Abeokuta:</strong> 44 Quarry Road, Opp. Anglican Grammar Sch., Ibara Abeokuta. 0814-3284461</li>
          <li>PATABAH Books Ltd. Shop B18, Adeniran Ogunsanya (SHOPRITE) Shopping Mall Surulere Lagos 0817-0641532.</li>
          <li>Home/Office delivery in Lagos &amp; Abuja. Send your name, address &amp; Telephone number to: 08099553334(SMS only) or Call: 07031003494; 08023226459.</li>
          <li>Ibuneth Enterprises. 43 Jimoh Balogun Str., Ikosi Ketu Lagos. Call Mrs. Christy Umanah: 0802-3217617.</li>
          <li>Any well known Bookshops in Nigeria.
          for enquiries; 08023226459; 07031003494 E-mail: info@countryyellowpages.net,
          SMS only:-08099553334.</li>
          <li>Distributors/Sales Agents needed for this Country Yellow Pages, call: 07031003494.</li>
          <li>Corporate Bookshop: Cash &amp; Carry Plaza Marina, Lagos Island. 0704-6226902</li>
          <li>CityWhite Management System Ltd., Block C, 2nd Floor Adebowale Building Lagos. Contact: Mr. Yemi Mafe: 08023421643.</li>
          <li>Laterna Bookshop Oko Awo Close, Victoria Island, Lagos  0803-3014462</li>
        </ul>
        <p style="margin-bottom: 0px;">
          Free delivery in: -
          <ol>
            <li><strong>Lagos:</strong> 07031003494; 08023226459; 08099553334;</li>
            <li><strong>Port-Harcourt:</strong> Mr. Stephen: 08035431309; 08033681829</li>
            <li><strong>Abuja:</strong> Mr. Coullins 07031003494; 07067857070</li>
            <li><strong>Anambra:</strong> 39 New Market Road, (5th Floor) Onitsha - 08033190058.</li>
            <li><strong>Lagos:</strong> Corporate Bookshop: Cash &amp; Carry Plaza Marina - 07046226902</li>
            <li><strong>Lagos:</strong> CityWhite Management System Ltd., Block C, 2nd Floor Adebowale Building - Mr. Yemi Mafe: 08023421643</li>
            <li><strong>e-mail:</strong> <a href="mailto:info@countryyellowpages.net">info@countryyellowpages.net</a></li>
          </ol>
        </p>
        <div class="row">
          <div class="about-info col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <p>
              <strong>A/C Name:</strong> Country Yellow Pages Directory.<br>
              <strong>Bank:</strong> Zenith Bank Plc. <br>
              <strong>A/c No:</strong> 1012747536 <br>
              <strong>Sort Code:</strong> 057151258
            </p>
          </div>
          <div class="about-info col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
            <p>
              <strong>A/C Name:</strong> Country Yellow Pages Directory<br>
              <strong>Bank:</strong> First Bank Plc<br>
              <strong>A/c No:</strong> 2020704409<br>
              <strong>Sort Code:</strong> 011152484
            </p>
          </div>
        </div>
        <div class="col-md-12">
          <p>
            Best Regards <br>
            Dionysius Nigeria Entr. Ltd.<br>
            Publishers of Country Yellow Pages Directory.
          </p>
        </div>
        <div class="col-md-12">
          <button type="button" class="btn findOut pull-right closeBtn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="advertRequestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><strong>Advertisement Booking / Registration Form</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form id="advertRequestForm" class="modalForm" action="resources/modalScript.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Name of Organization</label>
                <input type="text" class="form-control" placeholder="Name of Organization" name="name" autofocus="yes">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Address</label>
                <textarea name="address" class="form-control" placeholder="Business Address" rows="8" cols="80"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Telephone</label>
                <input type="text" class="form-control" placeholder="Telephone" name="tel">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Website</label>
                <input type="text" class="form-control" placeholder="Website" name="website">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitAdvert" class="btn findOut" id="adBtn">Submit</button>
                <button type="button" class="btn findOut closeBtn" data-dismiss="modal" id="close">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
