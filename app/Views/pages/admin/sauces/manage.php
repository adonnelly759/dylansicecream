<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Manage Sauces <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin/sauce/add" class="btn btn-info float-right">Add Sauce</a></h2>
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
                <?php if(!empty($sauces)): ?>
                    <?php foreach($sauces as $sauce): ?>
                        <tr>
                            <th scope="row"><?php echo $sauce['ItemID']; ?></th>
                            <td><?php echo $sauce['ItemName']; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>/admin/sauce/edit/<?php echo $sauce['ItemID']; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url(); ?>/admin/sauce/delete/<?php echo $sauce['ItemID']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>