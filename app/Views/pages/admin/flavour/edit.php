<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Edit Flavour <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin/flavour" class="btn btn-info float-right">Manage Flavours</a></h2>
    </div>
    <!-- Errors -->
    <?php if(isset($error)): ?>
        <div class="col-sm-12 pt-4">
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">Heads up!</h4>
                <p class="mb-0"><?php echo $error; ?></p>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-sm-12 pt-4">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="first_name">Flavour Name</label>
                        <input type="text" class="form-control" id="first_name" name="flavour_name" required placeholder="Flavour Name" value="<?php echo $item['name']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary float-right">Edit Flavour</button>
            </div>
        </form>
    </div>
</div>