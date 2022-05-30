<?php
  include('index-02-variables.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

    <p><?php echo $tag_line; ?></p>

    <!-- data gunakan paragraf -->
    <p><?php echo $siswa1; ?></p>
    <p><?php echo $siswa2; ?></p>
    <p><?php echo $siswa3; ?></p>

    <!-- data gunakan list -->
    <ul>
      <li><?php echo $siswa1; ?></li>
      <li><?php echo $siswa2; ?></li>
      <li><?php echo $siswa3; ?></li>
    </ul>

    <!-- data gunakan table -->
    <table>

      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td><?php echo $siswa1; ?></td>
        </tr>

        <tr>
          <td>2</td>
          <td><?php echo $siswa2; ?></td>
        </tr>

        <tr>
          <td>3</td>
          <td><?php echo $siswa3; ?></td>
        </tr>

      </tbody>

    </table>



  </body>

</html>
