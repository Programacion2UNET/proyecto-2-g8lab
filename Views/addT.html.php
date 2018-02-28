<body>
  <a class='btn-back anim-in' href="index.php">Back</a>
  <form method="POST" action='addT.php' class='login login-single'>
    <h3>Tournamet-Maketor</h3>
    <div class='input-group'>
      <input name='name' maxlength="255" type="text" value='' placeholder='name' title='your tournament name' required/>
      <input name='description' maxlength="255" type="text" value='' placeholder='description' title='description t'/>
    </div>
    <div class='input-group'>
      <label for="category">Category Select:&nbsp;&nbsp;</label>
      <br />
      <select name="category" id="category" required>
        <option value="1">Principiantes</option>
        <option value="2">Aficionados</option>
        <option value="3">Profesionales</option>
      </select>
    </div>
    <input name='start' maxlength="255" type="date" value='' placeholder='start date' title='start date' required/>
    <input name='end' maxlength="255" type="date" value='' placeholder='end date' title='end date' required/>
    <input name='place' maxlength="255" id="place" type="text" value='' placeholder='place' title='place' required/>
    <input class='btn btn-send' type="submit" value="send" />
  </form>
</body>
  <!-- category -->