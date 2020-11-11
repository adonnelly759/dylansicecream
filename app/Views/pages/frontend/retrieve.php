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
        <div class = "row pt-4 pb-4">
        <table class="table table-responsive table-hover w-100 d-block d-md-table">
            <thead>
                <tr>
                <th scope="col">Code</th>
                <th scope="col">Created</th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($creations)): ?>
                <?php foreach($creations as $creation): ?>
                <tr>
                    <th scope="row"><?php echo $creation['CreationCode']; ?></th>
                    <td><?php echo $creation['Created']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        </div>
    <?php endif; ?>