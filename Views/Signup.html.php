<a class='btn-back anim-in' href="/">Back</a>
<form method="POST" action='/signup.php' class='login login-single'>
  <h3>Team signup form</h3>
  <div class='input-group'>
    <input name='teamName' maxlength="255" type="text" value='' placeholder='team name' title='your team name' required/>
    <input name='inCharge' maxlength="255" type="text" value='' placeholder='in charge' title='in charge'/>
  </div>
  <div class='input-group'>
    <input name='userName' maxlength="255" type="text" value='' placeholder='user name' title='your user name' required/>
    <input name='shortName' maxlength="255" type="text" value='' placeholder='short name' title='short name' required/>
  </div>
  <input name='email' maxlength="255" id="email" type="email" value='' placeholder='@email' title='email' required/>
  <input name='password' maxlength="255" class='last--mod' type="password" value='' placeholder='password' title='your secret' required/>
  <span>
    you already have account?
    <a href="/login.php">Log in</a>
  </span>
  <input class='btn btn-send' type="submit" value="send">
</form>
