<a href="/">Back</a>
<form method="post" action='/signup.php' class='login'>
  <h3>Team signup form</h3>
  <div class='input-group'>
    <input name='teamName' maxlength="255" type="text" value='' placeholder='team name' title='your team name' require/>
    <input name='inCharge' maxlength="255" type="text" value='' placeholder='in charge' title='in charge'/>
  </div>
  <div class='input-group'>
    <input name='userName' maxlength="255" type="text" value='' placeholder='user name' title='your user name' require/>
    <input name='shortName' maxlength="255" type="text" value='' placeholder='short name' title='short name' require/>
  </div>
  <!-- <label for="email">email</label> -->
  <input name='email' maxlength="255" id="email" type="email" value='' placeholder='@email' title='email' require/>
  <input name='password' maxlength="255" class='last--mod' type="password" value='' placeholder='password' title='your secret' require/>
  <span>
    you already have account?
    <a href="/login.php">Log in</a>
  </span>
  <input class='btn btn-send' type="submit" value="send">
</form>
