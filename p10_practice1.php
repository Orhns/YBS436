<?php include 'p10_includes/header.php' ?>
<?php require_once 'p10_includes/p10_config.php' ?>

<table>
  <caption>The values of the database connection variables</caption>
  <thead>
    <tr>
      <th>Variable</th>
      <th>Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>DBHOST</td>
      <td><?=DBHOST?></td>
    </tr>
    <tr>
      <td>DBNAME</td>
      <td><?=DBNAME?></td>
    </tr>
    <tr>
      <td>DBUSER</td>
      <td><?=DBUSER?></td>
    </tr>
    <tr>
      <td>DBPASS</td>
      <td><?=DBPASS?></td>
    </tr>    
  </tbody>
  <tfoot>
    <tr>
      <td colspan="2">These variables are stored in the includes/config.php file.</td>
    </tr>
  </tfoot>
</table>

<?php include 'p10_includes/footer.php' ?>
