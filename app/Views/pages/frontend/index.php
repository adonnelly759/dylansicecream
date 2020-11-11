<div class = "row pt-4 pb-4">
    <div class="col-sm-12 pt-4 pb-4">
        <h2 class="make_ice_cream_h2 pb-2 trend_sansone">Dylan's Sundae Maker</h2>
    </div>
    <div class = "col-sm-6 pb-4">
        <form class="trend_sansone">
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Flavour(s)</label>
            <svg viewBox="0 0 640 512"  preserveAspectRatio="xMidYMid meet" class="svg-tooltip" alt="home-solid" data-toggle="popover" data-placement="right" title="Flavour Info" data-original-title="Flavour Info" data-content="Each Sundae will have 2 scoops. If you want 2 scoops of one flavour, please select only one option.">
                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path>
            </svg>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" data-max-options="2" class="selectpicker w-100 form-control" id="first_scoop" >
                <?php if(!empty($flavours)): ?>
                    <?php foreach($flavours as $flavour): ?>
                    <option value="<?php echo $flavour['ItemID']; ?>"><?php echo $flavour['ItemName']; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            </div>
            <div class="form-group">
            <label class="mb-3 text-primary">Select your Inclusion</label>
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" data-max-options="2" class="selectpicker w-100 form-control" id="inclusion">
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
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" data-max-options="1" class="selectpicker w-100 form-control" id="wafer">
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
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" data-max-options="2" class="selectpicker w-100 form-control" id="sprinkles">
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
            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" data-max-options="2" class="selectpicker w-100 form-control" id="sauce">
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
