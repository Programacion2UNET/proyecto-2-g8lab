<a href="/">Back</a>
<form method="POST" action='/login.php' class='login'>
  <h3>Login</h3>
  <div class='invalid'><?=$message ? "$message" : "  "?></div>
  <br />
  <input required name='userName' maxlength="255" type="text" placeholder='name' title='your user name'/>
  <input required name='password' maxlength="255" type="password" placeholder='password' title='your secret'/>
  <span>
    you dont have an account?
    <a href="/signup.php">Sign up</a>
  </span>
  <input class='btn btn-send' type="submit" value="send" />
</form>
