<body>
  <h1>Private Section for <?=$username?></h1>
  <figure>
    <div>img</div>
    <figcaption>description</figcaption>
  </figure>
  <header>
    <nav>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">My Tournaments</a></li>
        <li><a href="#">Tournaments</a></li>
        <?= $isAdmin ? '<li><a href="admin.php">Admin Panel</a></li>' : '' ?>
      </ol>
    </nav>
  </header>
</body>
