<?php include "html/header.html" ?>
    <div class="container-fluid col-md-8 offset-md-2 alert" style="margin-top: 55px;">
        <div class="h1 text-center pb-4"><?=$data['companyName']?></div>
<!--        Form starts-->
        <div class="card w-50" style="margin: auto;">
            <div class="h3 text-center pt-2 pb-2">Log In</div>
            <form class="p-4" action="auth.php" method="post">
                <!--            Username-->
                <div class="form-group">

                    <input type="text" name="username" class="form-control" id="usrname" aria-describedby="usrname-help"
                           placeholder="Username">
                    <small id="usrname-help" class="form-text text-muted">At least 3 character long.</small>
                </div>
                <!--            Password-->
                <div class="form-group">

                    <input type="password" name="password" class="form-control" id="Password1" placeholder="Password">
                </div>
                <!--            Checkout-->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="chk_box">
                    <label class="form-check-label" for="chk_box">Remember Me</label>
                </div>
                <!--            Button-->
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
            <!--        Form ends-->
        </div>

    </div>
<?php include "html/footer.html" ?>