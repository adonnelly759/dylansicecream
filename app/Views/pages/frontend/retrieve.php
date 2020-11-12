<div class = "row pt-4 pb-4">
	 <div class="col-sm-12 pt-4">
        <h2 class="make_ice_cream_h2  trend_sansone">Retrieve Your Sundae</h2>
    </div>
</div>
<?php if($error === 1 || $error === '1'): ?>
        <div class="row pb-4 trend_sansone">
        <div class="col-sm-12 pt-4">
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">Code not found!</h4>
                <p class="mb-0">Please ensure the code has been entered correctly and try again.</p>
            </div>
        </div>
    </div>
<?php endif; ?>
    <div class="row h-100 justify-content-center align-items-center pb-4">
        <form class="col-sm-12" method="POST">
            <div class="form-group">
                <label for="codeInput" class="trend_sansone">Unique Code</label>
                <input type="text" name="codeInput" class="form-control" id="codeInput" aria-describedby="codeInput" placeholder="Enter your Unique Code">
            </div>
            <button type="submit" class="btn btn-primary float-right">Find Sundae</button>
        </form>  
    </div>
    <?php if($codeFound === 1 || $codeFound === '1'): ?>
        <?php if(!empty($creations)): ?>
            <div class = "row pt-4 pb-4">
                <div class = "col-sm-12">
                    <h3 class = "pb-2">Sundae Details</h3>
                    <p class="sundae-details-bold">Code:&nbsp;</p>
                    <p><?php echo $creations['code']; ?></p>
                    <p class="sundae-details-bold">Flavour(s):&nbsp;</p>
                    <?php if(!empty($creations['flavours'])): ?>
                        <p>
                        <?php foreach($creations['flavours'] as $flavour): ?>
                            <?php echo $flavour['name'] ?>&nbsp;
                        <?php endforeach; ?>
                        </p>
                    <?php else: ?>
                        <p>No Flavour Chosen</p>
                    <?php endif;?>
                    <p class="sundae-details-bold">Inclusion(s):&nbsp;</p>
                    <?php if(!empty($creations['inclusions'])): ?>
                        <p>
                        <?php foreach($creations['inclusions'] as $inclusion): ?>
                            <?php echo $inclusion['name'] ?>&nbsp;
                        <?php endforeach; ?>
                        </p>
                    <?php else: ?>
                        <p>No Inclusion Chosen</p>
                    <?php endif;?>
                    <p class="sundae-details-bold">Wafer:&nbsp;</p>
                    <?php if(!empty($creations['wafers'])): ?>
                        <p>
                        <?php foreach($creations['wafers'] as $wafer): ?>
                            <?php echo $wafer['name'] ?>&nbsp;
                        <?php endforeach; ?>
                        </p>
                    <?php else: ?>
                        <p>No Wafer Chosen</p>
                    <?php endif;?>
                    <p class="sundae-details-bold">Sprinkles:&nbsp;</p>
                    <?php if(!empty($creations['sprinkles'])): ?>
                        <p>
                        <?php foreach($creations['sprinkles'] as $sprinkle): ?>
                            <?php echo $sprinkle['name'] ?>&nbsp;
                        <?php endforeach; ?>
                        </p>
                    <?php else: ?>
                        <p>No Sprinkles Chosen</p>
                    <?php endif;?>
                    <p class="sundae-details-bold">Sauce(s):&nbsp;</p>
                    <?php if(!empty($creations['sauces'])): ?>
                        <p>
                        <?php foreach($creations['sauces'] as $sauce): ?>
                            <?php echo $sauce['name'] ?>&nbsp;
                        <?php endforeach; ?>
                        </p>
                    <?php else: ?>
                        <p>No Sauce Chosen</p>
                    <?php endif;?>
                    <p class="sundae-details-bold">Cream:&nbsp;</p>
                    <?php if($creations['cream'] = 1): ?>
                        <p>Yes</p>
                    <?php else: ?>
                        <p>No</p>
                    <?php endif;?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>