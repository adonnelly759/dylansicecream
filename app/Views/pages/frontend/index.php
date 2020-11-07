<div class = "row pt-4 pb-4">
    <div class = "col-sm-6 pb-4">
        <h2 class="make_ice_cream_h2 pb-2">CREATE YOUR UNIQUE SUNDAE</h2>
        <form>
          <div class="form-group">
            <select class="form-control" id="first_scoop">
                <option value="" selected disabled>First Scoop</option>
                <?php if(!empty($flavours)): ?>
                    <?php foreach($flavours as $flavour): ?>
                    <option value="<?php echo $flavour['ItemID']; ?>"><?php echo $flavour['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="second_scoop">
                <option value="" selected disabled>Second Scoop</option>
                <?php if(!empty($flavours)): ?>
                    <?php foreach($flavours as $flavour): ?>
                    <option value="<?php echo $flavour['ItemID']; ?>"><?php echo $flavour['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="inclusion">
                <option value="" selected disabled>Inclusion</option>
                <option value="">No Inclusion</option>
                <?php if(!empty($inclusions)): ?>
                    <?php foreach($inclusions as $inclusion): ?>
                    <option value="<?php echo $inclusion['ItemID']; ?>"><?php echo $inclusion['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="wafer">
                <option value="" selected disabled>Wafer</option>
                <option value="">No Wafer</option>
                <?php if(!empty($wafers)): ?>
                    <?php foreach($wafers as $wafer): ?>
                    <option value="<?php echo $wafer['ItemID']; ?>"><?php echo $wafer['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="sprinkles">
                <option value="" selected disabled>Sprinkles</option>
                <option value="">No Sprinkles</option>
                <?php if(!empty($sprinkles)): ?>
                    <?php foreach($sprinkles as $sprinkle): ?>
                    <option value="<?php echo $sprinkle['ItemID']; ?>"><?php echo $sprinkle['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="sauce">
            <option value="" selected disabled>Sauce</option>
            <option value="">No Sauce</option>
            <?php if(!empty($sauces)): ?>
                <?php foreach($sauces as $sauce): ?>
                <option value="<?php echo $sauce['ItemID']; ?>"><?php echo $sauce['ItemName']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="cream" data-toggle="toggle">
                <label class="form-check-label" for="exampleCheck1">Do you want Cream?</label>
            </div>
         </div>
        </form>
    </div>
    <div class = "col-sm-6 pb-4">
        <h2 class="make_ice_cream_h2 pb-2">PREVIEW</h2>
    </div>
    <button type="submit" class="btn btn-primary make_ice_cream_btn">Submit</button>
</div>
