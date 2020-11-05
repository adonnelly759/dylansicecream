<div class="container h-100">
    <?php if($error === 1 || $error === '1'): ?>
        <div class="row pt-4 pb-4">
        <div class="col-sm-12 pt-4">
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">Heads up!</h4>
                <p class="mb-0">It looks like something went wrong. Try again.</p>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-sm-12" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" name="password" aria-describedby="emailHelp" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary float-right">Login</button>
        </form>  
    </div>
</div>