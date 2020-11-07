<div class="row pt-4 pb-4">
    <div class="col-sm-12 pb-4">
        <h2>Manage Wafers <a href="<?php echo base_url(); ?>/admin" class="btn btn-primary float-right ml-2">Admin Area</a> <a href="<?php echo base_url(); ?>/admin/wafer/add" class="btn btn-info float-right">Add Wafer</a></h2>
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
                <?php if(!empty($items)): ?>
                    <?php foreach($items as $item): ?>
                        <tr>
                            <th scope="row"><?php echo $item['ItemID']; ?></th>
                            <td><?php echo $item['ItemName']; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>/admin/wafer/edit/<?php echo $item['ItemID']; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url(); ?>/admin/wafer/delete/<?php echo $item['ItemID']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>