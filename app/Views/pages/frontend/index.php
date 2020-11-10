<div class = "row pt-4 pb-4">
    <div class="col-sm-12 pt-4 pb-4">
        <h2 class="make_ice_cream_h2 pb-2 trend_sansone">Dylan's Sundae Maker</h2>
    </div>
    <div class = "col-sm-6 pb-4">
        <form class="trend_sansone">
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Flavour</label>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100 form-control" id="first_scoop">
                <?php if(!empty($flavours)): ?>
                    <?php foreach($flavours as $flavour): ?>
                    <option value="<?php echo $flavour['ItemID']; ?>"><?php echo $flavour['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            </div>
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Inclusion</label>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100 form-control" id="inclusion">
                <option value="">No Inclusion</option>
                <?php if(!empty($inclusions)): ?>
                    <?php foreach($inclusions as $inclusion): ?>
                    <option value="<?php echo $inclusion['ItemID']; ?>"><?php echo $inclusion['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            </div>
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Wafer</label>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100 form-control" id="wafer">
                <option value="">No Wafer</option>
                <?php if(!empty($wafers)): ?>
                    <?php foreach($wafers as $wafer): ?>
                    <option value="<?php echo $wafer['ItemID']; ?>"><?php echo $wafer['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            </div>
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Sprinkles</label>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100 form-control" id="sprinkles">
                <option value="">No Sprinkles</option>
                <?php if(!empty($sprinkles)): ?>
                    <?php foreach($sprinkles as $sprinkle): ?>
                    <option value="<?php echo $sprinkle['ItemID']; ?>"><?php echo $sprinkle['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            </div>
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Sauce</label>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm " class="selectpicker w-100 form-control" id="sauce">
            <option value="">No Sauce</option>
            <?php if(!empty($sauces)): ?>
                <?php foreach($sauces as $sauce): ?>
                <option value="<?php echo $sauce['ItemID']; ?>"><?php echo $sauce['ItemName']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
            </select>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Do you want Cream?</label>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-6 pb-4 bg-light">
    <label class="text-white mb-3 lead">Where do you live?</label>

    </div>
    <button type="submit" class="btn btn-primary make_ice_cream_btn trend_sansone">GENERATE SUNDAE CODE</button>
</div>
