<a href="/">Back</a>
<form method="POST" action='signup.php' class='login'>
  <h3>Team signup form</h3>
  <div class='input-group'>
    <input type="text" value='' placeholder='team name' title='your team name' require/>
    <input type="text" value='' placeholder='in charge' title='incharge'/>
  </div>
  <div class='input-group'>
    <input type="text" value='' placeholder='user name' title='your user name' require/>
    <input type="text" value='' placeholder='short name' title='short name' require/>
  </div>
  <input type="email" value='' placeholder='@email' title='email' require/>
  <input class='last--mod' type="password" value='' placeholder='password' title='your secret' require/>
  <span>
    you already have account?
    <a href="/login.php">Log in</a>
  </span>
  <input class='btn btn-send' type="submit" value="send">
</form>
