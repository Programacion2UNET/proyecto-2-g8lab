<body>
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
              echo "<td>".($user['admin']?"<span class='false-admin'>FALSE</span>":"<span class='true-admin'>TRUE</span>")."</td>";
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
        Add more
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
        <th>Users In</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <!-- <td><?=$tournaments['id']?></td>
        <td><?=$tournaments['name']?></td>
        <td><?=$tournaments['start']?></td>
        <td><?=$tournaments['end']?></td>
        <td><?=$tournaments['create_at']?></td>
        <td><?=$tournaments['description']?></td>
        <td><?=$tournaments['place']?></td>
        <td><?=$tournaments['category']?></td> -->
        <td>SAMPLE</td>
        <td class='td-btn'>
          <span class='btn btn-warning'>Update</span>
          <span class='btn btn-danger'>Delete</span>
        </td>
      </tr>
    </tbody>
  </table>
  <br />
  <br />

  <table>
    <h3>Registers</h3>
    <thead>
      <tr>
        <th>id</th>
        <th>User id</th>
        <th>tournament id</th>
        <th>created at</th>
        <th>Created At</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>SAMPLE</td>
        <td>SAMPLE</td>
        <td>SAMPLE</td>
        <td>SAMPLE</td>
        <td>SAMPLE</td>
        <td class='td-btn'>
          <span class='btn btn-warning'>Update</span>
          <span class='btn btn-danger'>Delete</span>
        </td>
      </tr>
    </tbody>
  </table>
  <br />
  <br />

</body>