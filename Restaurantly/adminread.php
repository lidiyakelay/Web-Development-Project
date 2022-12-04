<?php
  include '../bookdb.php';
  $sql = "select * from table_booking";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if ($row['id'] == $id) {
      echo '<form class="form-inline m-2" action="adminupdate.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
      echo '<td><input type="number" class="form-control" name="phone" value="'.$row['phone'].'"></td>';
      echo '<td><input type="number" class="form-control" name="numpeople" value="'.$row['numpeople'].'"></td>';
      echo '<td><input type="text" class="form-control" name="description" value="'.$row['description'].'"></td>';
      echo '<td><input type="date" class="form-control" name="date" value="'.$row['date'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } 
    else {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
      echo "<td>" . $row['numpeople'] . "</td>";
      echo "<td>" . $row['description'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
      echo '<td><a class="btn btn-primary" href="adminpanel.php?id=' . $row['id'] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-primary" href="admindelete.php?id=' . $row['id'] . '" role="button">delete</a></td>';
      echo "</tr>";
    }
    
  }
  $conn->close();
?>