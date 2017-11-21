

<!DOCTYPE html>
<html>
  <head>
    <title>Pavadinimas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
      $zmones = array(
        array('vardas' => 'Jonas', 'lytis' => 'V'),
        array('vardas' => 'Ona', 'lytis' => 'M'),
        array('vardas' => 'Petras', 'lytis' => 'V'),
        array('vardas' => 'Marytė', 'lytis' => 'M'),
        array('vardas' => 'Eglė', 'lytis' => 'M'));
    ?>
    <h1>Zmones <?php echo count($zmones);?></h1>
    <?php if ($zmones): ?>
      <table>
        <tr>
          <th>Nr.</th><th>Vardas</th><th>Lytis</th>
        </tr>
        <?php foreach($zmones as $k => $v): ?>
          <tr>
            <td><?php echo $k ?></td>
            <td><?php echo $v['vardas'] ?></td>
            <td><?php echo $v['lytis'] ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php else: ?>
      <p>Nera duomenu</p>
    <?php endif; ?>
  </body>
</html>
