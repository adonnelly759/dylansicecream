<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Manage Sprinkles <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin/sprinkles/add" class="btn btn-info float-right">Add Sprinkles</a></h2>
    </div>
    <div class="col-sm-12 pt-4">
        <table class="table table-responsive table-hover w-100 d-block d-md-table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($sprinkles)): ?>
                    <?php foreach($sprinkles as $sprinkle): ?>
                        <tr>
                            <th scope="row"><?php echo $sprinkle['ItemID']; ?></th>
                            <td><?php echo $sprinkle['ItemName']; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>/admin/sprinkles/edit/<?php echo $sprinkle['ItemID']; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url(); ?>/admin/sprinkles/delete/<?php echo $sprinkle['ItemID']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>