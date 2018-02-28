<h1>Register in a Tournament</h1>
<a class='btn-back anim-in' href="dashboard.php">Back</a>
    <table>
    <h3>Tournamets</h3>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Start</th>
        <th>End</th>
        <th>Created At</th>
        <th>Decription</th>
        <th>place</th>
        <th>Category</th>
        <th>Users in tournament</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          foreach ($allT as $tournament) {
            $fechaEnd = new DateTime($tournament['end']);
            $fechaNow = new DateTime();

            $difference_in_seconds = $fechaEnd->format('U') - $fechaNow->format('U');
            $band = $difference_in_seconds>=0;

            echo "<tr>";
            echo "<td><span>$tournament[id]</span></td>";
            echo "<td><span>$tournament[name]</span></td>";
            echo "<td><span>$tournament[start]</span></td>";
            echo "<td><span>$tournament[end]</span></td>";
            echo "<td><span>$tournament[created_at]</span></td>";
            echo "<td><span>$tournament[description]</span></td>";
            echo "<td><span>$tournament[place]</span></td>";
            if ($tournament['category'] == 1) echo "<td><span>Principiantes</span></td>";
            if ($tournament['category'] == 2) echo "<td><span>Aficionados</span></td>";
            if ($tournament['category'] == 3) echo "<td><span>Profesionales</span></td>";
            echo "<td><span>$tournament[users]</span></td>";
            echo "<td class='td-btn'>";
            if (!$tournament['isIn']) {
              if (!$band) echo "<span class='disabled btn btn-danger'>OLD DATE</span>";
              if ($band) echo "<span onClick='register(this)' data-t-id=$tournament[id] class='btn btn-warning'>Suscribe In</span>";
            } else {
              // if (!$band) echo "<span class='disabled btn btn-danger'>OLD DATE</span>";
              echo "<span class='btn btn-danger mod-opogly'>ALREADY IN</span>";
            }
            echo "</td>";
            echo "</tr>";
          }
        ?>
    </tbody>
  </table>