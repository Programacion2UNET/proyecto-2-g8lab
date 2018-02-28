<body>
  <a class='btn-back anim-in' href="index.php">Back</a>
  <h1>Admin Panel</h1>
  <br />
  <br />
  <table>
    <h3>Users</h3>
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>User name</span></th>
        <th><span>Team name</span></th>
        <th><span>In charge</span></th>
        <th><span>Short name</span></th>
        <th><span>Email</span></th>
        <th><span>Password</span></th>
        <th><span>Created at</span></th>
        <th><span>Admin</span></th>
        <th><span>&nbsp;</span></th>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach ($users as $user) {
            echo "<tr>";
              echo"<td><span>$user[id]</span></td>";
              echo"<td><span>$user[user_name]</span></td>";
              echo"<td><span>$user[team_name]</span></td>";
              echo"<td><span>$user[in_charge]</span></td>";
              echo"<td><span>$user[short_name]</span></td>";
              echo"<td><span>$user[email]</span></td>";
              echo"<td><span>$user[password]</span></td>";
              echo"<td><span>$user[create_at]</span></td>";
              echo "<td>".(!$user['admin']?"<span class='false-admin'>FALSE</span>":"<span class='true-admin'>TRUE</span>")."</td>";
              echo"
                <td class='td-btn'>
                  <span class='btn btn-warning'>Update</span>
                  <span class='btn btn-danger'>Delete</span>
                </td>";
            echo "</tr>";
          }
        ?>
    </tbody>
  </table>
  <h4 class='more-btn btn btn-success'>
    <a href="login.php">Add more Users</a>
  </h4>
  <br />
  <br />
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
          foreach ($tournaments as $tournament) {
            echo "<tr>";
            echo "<td><span>$tournament[id]</span></td>";
            echo "<td><span>$tournament[name]</span></td>";
            echo "<td><span>$tournament[start]</span></td>";
            echo "<td><span>$tournament[end]</span></td>";
            echo "<td><span>$tournament[created_at]</span></td>";
            echo "<td><span>$tournament[description]</span></td>";
            echo "<td><span>$tournament[place]</span></td>";
            echo "<td><span>$tournament[category]</span></td>";
            echo "<td><span>??</span></td>";
            echo "<td class='td-btn'>
                    <span class='btn btn-warning'>Update</span>
                    <span class='btn btn-danger'>Delete</span>
                    </td>
                 </tr>";
          }
        ?>
    </tbody>
  </table>
  <h4 class='more-btn btn btn-success'>
    <a href="addT.php">Add more tournaments</a>
  </h4>
  <br />
  <br />
  <table>
    <h3>Registers</h3>
    <thead>
      <tr>
        <th>id</th>
        <th>User id</th>
        <th>created at</th>
        <th>tournament id</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          foreach ($registers as $register) {
            echo "<tr>";
            echo "<td><span>$register[id]</span></td>";
            echo "<td><span>$register[user_id]</span></td>";
            echo "<td><span>$register[created_at]</span></td>";
            echo "<td><span>$register[tournament_id]</span></td>";
            echo" <td class='td-btn'><span class='btn btn-warning'>Update</span><span class='btn btn-danger'>Delete</span></td></tr>";
          }
        ?>
    </tbody>
  </table>
  <h4 class='more-btn btn btn-success'>
      Add more
  </h4>
  <br />
  <br />
</body>
