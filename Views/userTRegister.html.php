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
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          foreach ($allT as $tournament) {
            // echo Date::getTimeStap($tournament['end']);
            echo "<tr>";
            echo "<td><span>$tournament[id]</span></td>";
            echo "<td><span>$tournament[name]</span></td>";
            echo "<td><span>$tournament[start]</span></td>";
            echo "<td><span>$tournament[end]</span></td>";
            echo "<td><span>$tournament[created_at]</span></td>";
            echo "<td><span>$tournament[description]</span></td>";
            echo "<td><span>$tournament[place]</span></td>";
            echo "<td><span>$tournament[category]</span></td>";
            echo "<td class='td-btn'><span class='btn btn-warning'>Suscribe In</span></td>";
            echo "</tr>";
          }
        ?>
    </tbody>
  </table>