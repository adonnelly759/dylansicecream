<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Manage Inclusions <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin/inclusion/add" class="btn btn-info float-right">Add Inclusion</a></h2>
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
                <?php if(!empty($inclusions)): ?>
                    <?php foreach($inclusions as $inclusion): ?>
                        <tr>
                            <th scope="row"><?php echo $inclusion['ItemID']; ?></th>
                            <td><?php echo $inclusion['ItemName']; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>/admin/inclusion/edit/<?php echo $inclusion['ItemID']; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url(); ?>/admin/inclusion/delete/<?php echo $inclusion['ItemID']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>