<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Manage Users <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin" class="btn btn-info float-right">Add User</a></h2>
    </div>
    <div class="col-sm-12 pt-4">
        <table class="table table-responsive table-hover w-100 d-block d-md-table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Email Address</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($users)): ?>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <th scope="row"><?php echo $user['id']; ?></th>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['first_name']; ?></td>
                            <td><?php echo $user['last_name']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>