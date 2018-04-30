<!-- main form area -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><strong>DIONYSIUS NIGERIA - Registration Form</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="container modalFormArea">
          <form id="regModalForm" class="resources/modalScript.php" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="labels">Name of Organization</label>
                  <div class="input-group">
                    <input type="text" name="nameOfOrg" value="" class="form-control">
                  </div>
                  <label id="nameOfOrg-error" class="error" for="nameOfOrg"></label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="labels">Nature of Organizaton</label>
                  <div class="input-group">
                    <select name="natureOfOrg" class="form-control">
                      <option value="" selected disabled>Please select</option>
                      <?php include 'resources/category.php'; ?>
                    </select>
                  </div>
                  <label id="natureOfOrg-error" class="error" for="natureOfOrg"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="labels">Address of Organization <small>(Multiple addresses should be separated with semi-colon ";")</small></label>
                  <div class="input-group">
                    <textarea name="addressOfOrg" rows="5" cols="80" class="form-control"></textarea>
                  </div>
                </div>
                <label id="addressOfOrg-error" class="error" for="addressOfOrg"></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="labels">Phone <small>(Multiple telephones should be separated with semi-colon ";")</small></label>
                  <div class="input-group">
                    <input type="text" name="telOfOrg" value="" class="form-control">
                  </div>
                  <label id="telOfOrg-error" class="error" for="telOfOrg"></label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="labels">Fax <small>(Multiple fax should be separated with semi-colon ";")</small></label>
                  <div class="input-group">
                    <input type="text" name="faxOfOrg" value="" class="form-control">
                  </div>
                  <label id="faxOfOrg-error" class="error" for="faxOfOrg"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="labels">Email <small>(Multiple telephones should be separated with semi-colon ";")</small></label>
                  <div class="input-group">
                    <input type="text" name="emailOfOrg" value="" class="form-control">
                  </div>
                  <label id="emailOfOrg-error" class="error" for="emailOfOrg"></label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="labels">Website</small></label>
                  <div class="input-group">
                    <input type="text" name="websiteOfOrg" value="" class="form-control">
                  </div>
                  <label id="websiteOfOrg-error" class="error" for="websiteOfOrg"></label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>If you want your Advert to appear on our website specify:</label>
                  <div class="input-group">
                    <select name="advert" class="form-control">
                      <option value="" selected disabled>Please select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                  <label id="advert-error" class="error" for="advert" style="display: inline-block;"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p style="font-weight: bold;">
                  NB: Officers in charge………Mr. Emmanuel – 0802-3226459, 0703-1003494; Mrs. Abiola – 0805-6668991, 0702-5242245;
                </p>
              </div>
            </div>
            <div class="row" style="margin-top: 10px;">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <button type="submit" id="registerBtn" name="registerBtn" class="btn btn-primary btn-sm modalBtn">Register</button>
                  <button type="button" name="button" class="btn btn-primary btn-sm modalBtn" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- successful registration -->
        <div class="succesfulRegistration">
          <h1 class="text-center"><strong>Registration was Successfully Delivered.</strong></h1>
        </div>
        <!-- failed registration -->
        <div class="failedRegistration">
          <h1 class="text-center"><strong>Registration Failed to Deliver.</strong></h1>
        </div>
      </div>
    </div>
  </div>
</div>
