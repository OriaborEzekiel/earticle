 <?php //echo $this->Flash->render("auth"); ?>
<form   action="/users/login"  method="post"  class="login-form">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
       
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="data[User][username]" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="data[User][password]" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>

               
      </div>
</form>

<div align="center"> <a href="/users/add"> <button class="btn btn-info btn-lg" type="submit">Signup</button> </a> </div>

<style type="text/css">

  #flashMessage{
    border-radius: 20px 20px 20px 20px;
    margin: 0 15px 10px;
    padding: 180px 20px;
    position: fixed;
    color: blue;
    text-align: center;
    padding-left: 190px;

  }
 
</style>



