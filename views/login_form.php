<form class="form-signin" action="login.php" method="post">
    <fieldset>      
        <div class="form-group">
            <label  class="sr-only">Username</label>
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text">
        </div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input class="form-control" name="password" placeholder="Password" type="password"/>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-default" type="submit">Log in</button>
    </fieldset>  
</form>
<div>
    or <a href="register.php">register</a> for an account
</div>

