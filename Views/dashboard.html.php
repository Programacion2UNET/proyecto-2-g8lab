<body>
  <a class='btn-back anim-in' href="index.php">Back</a>
  <h1>Private Section for <?=$username?></h1>
  <header>
    <nav>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Add Tournaments</a></li>
        <?= $isAdmin ? '<li><a href="admin.php">Admin Panel</a></li>' : '' ?>
      </ol>
    </nav>
    <section class='dashboard'>
      <article>
        <h2>My Tournaments</h2>
        <?php
          foreach ($tournamentsById as $tournament) {
            echo "$tournament[tournament_name]  ";
            echo "$tournament[user_name]  ";
            echo "</br>";
          }
        ?>
      </article>
      <article>
      
      </article>
    </section>
  </header>
</body>
