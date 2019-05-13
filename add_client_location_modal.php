<div class="modal" id="addClientLocationModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header text-white">
        <h5 class="modal-title"><i class="fa fa-fw fa-map-marker-alt mr-2"></i>New Location</h5>
        <button type="button" class="close text-white" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="post.php" method="post" autocomplete="off">
        <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
        <div class="modal-body bg-white">
          <div class="form-group">
            <label>Location Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-map-marker"></i></span>
              </div>
              <input type="text" class="form-control" name="name" placeholder="Name of location" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label>Address</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-map-marker-alt"></i></span>
              </div>
              <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
          </div>
         
          <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="city" placeholder="City" required>
          </div>
          <div class="form-group">
            <label>State</label>
            <select class="form-control" name="state" required>
              <option value="">- State -</option>
              <?php foreach($states_array as $state_abbr => $state_name) { ?>
              <option value="<?php echo $state_abbr; ?>"><?php echo $state_name; ?></option>
              <?php } ?>
            </select> 
          </div>
          <div class="form-group">
            <label>Zip</label>
            <input type="text" class="form-control" name="zip" placeholder="Zip" required>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" name="phone" placeholder="Phone Number" data-inputmask="'mask': '999-999-9999'" required> 
            </div>
          </div>
        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="add_client_location" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>