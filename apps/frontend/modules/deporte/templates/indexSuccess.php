<h1>Lista de deportes</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th></th>
      <th>Nombre deporte</th>
      <th>Tipo deporte</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($deportes as $deporte): ?>
    <tr>
      <td><a class="btn btn-success" href="<?php echo url_for('deporte/edit?id_deporte='.$deporte->getId_deporte()) ?>">Editar</a></td>
      <td><?php echo $deporte->getNombre_deporte() ?></td>
      <td><?php echo $deporte->getTipo_deporTe() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn btn-primary" href="<?php echo url_for('deporte/new') ?>">Nuevo</a>
