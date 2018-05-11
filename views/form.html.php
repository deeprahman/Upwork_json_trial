<?php include "html/header.html" ?>
    <div class="container">
        <div class="h1"><?=$data['companyName']?></div>
        <form>
            <div class="form-group">
                <label class="lead" for="usrname">Username</label>
                <input type="text" class="form-control" id="usrname" aria-describedby="usrname-help"
                       placeholder="Username">
                <small id="usrname-help" class="form-text text-muted">At least 3 character long.</small>
            </div>
            <div class="form-group">
                <label class="lead" for="Password1">Password</label>
                <input type="password" class="form-control" id="Password1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="chk_box">
                <label class="form-check-label" for="chk_box">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php include "html/footer.html" ?>