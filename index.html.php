<body>
  <nav>
    <ul>
      <li>
        <a href="/login.php">Login</a>
        <a href="/signup.php">Signup</a>
        <?= $auth ? "<a href='/logout.php'>logout</a>": '' ?>
        <?= $auth ? "<a href='/dashboard.php'>dashboard</a>": '' ?>
      </li>
    </ul>
  </nav>
  <section>
    <article>
    </article>
  </section>
</body>