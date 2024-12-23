<?php require APPURL.'/views/layout/header.php' ?>

    <section class="col-md-4 mx-auto py-5" >
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <h3>Login Form</h3>
                        <form action="<?php echo ROOTURL ?>/users/login" method="POST">
                            <div class="col-md-12 form-group mb-3">
                                <label for="email" class="form-label">Email</label>

                                <input type="email" class="form-control form-control-sm rounded-0" id="email" name="email" placeholder="" />
                                <span class=""></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="password" class="form-label">Password</label>

                                <input type="password" class="form-control form-control-sm rounded-0" id="password" name="password"  />

                                <span class=""></span>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo ROOTURL ?>/users/register" class="">Not yet register? Register here</a>
                                </div>
                                <div class="col text-end">
                                    <button class="btn btn-primary btn-sm rounded-0">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php require APPURL.'/views/layout/footer.php' ?>