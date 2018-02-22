<body>
  <nav class='nav'>
    <h2>Tournamet-Maketor</h2>
    <ul>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Info</a>
      </li>
      <li>
        <?= !$auth ? '<a href="/login.php">Login</a>' : "<a href='/logout.php'>logout</a>" ?>
      </li>
      <li class='hoverless'>
        <?= !$auth ? '<a class="btn" href="/signup.php">Signup</a>' : '' ?>
      </li>
      <li>
        <?= $auth ? "<a href='/dashboard.php'>Profile</a>": '' ?>
      </li>
    </ul>
  </nav>
  <header class='main-header-container'>

    <div class='main-header'></div>
  </header>
  <section class='index'>
    <article>
      <h3>Register your Team</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad quidem est similique et. Fugiat debitis laborum obcaecati ipsum corporis, consectetur explicabo, quis aperiam dignissimos inventore nulla, quisquam eius ut quidem.</p>
      <?= $auth ? "<a href='/RegisterTournamets.php'>Tournaments Register</a>": '' ?>
    </article>
    <article>
      <h3>Get info about Tournaments</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde alias excepturi consectetur eaque fuga inventore nihil eum accusamus, eveniet facilis impedit assumenda, quasi dolorum quis illum? Ex eveniet perferendis totam!
      </p>
      <!-- <?= $auth ? "<a href='/MyTournaments.php'>My Tournaments</a>": '' ?> -->
    </article>  
    <article>
      <h4>Ultimate update</h4>
      <span>Users at Register: 92014</span>
      <span>Tournaments: 12014</span>
      <!-- <?= $auth ? "<a href='/MyTournaments.php'>My Tournaments</a>": '' ?> -->
    </article>  
  </section>
  <footer>
    
  </footer>
</body>