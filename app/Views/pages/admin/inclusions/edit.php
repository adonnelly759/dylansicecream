<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Edit Inclusion <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin/inclusion" class="btn btn-info float-right">Manage Inclusion</a></h2>
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
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="First Name" value="<?php echo $user['first_name']; ?>">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Last Name" value="<?php echo $user['last_name']; ?>">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="<?php echo $user['email']; ?>">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <small id="emailHelp" class="form-text text-muted">You may leave the password field empty to keep same password.</small>
                        <input type="password" class="form-control" id="password" name="blank_password" autocomplete="new-password" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary float-right">Edit User</button>
            </div>
        </form>
    </div>
</div>