<h1>Lista de mascotas</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th></th>
      <th>Nombre mascota</th>
      <th>Tipo mascota</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mascotas as $mascota): ?>
    <tr>
      <td><a class="btn btn-success" href="<?php echo url_for('mascota/edit?id_mascota='.$mascota->getId_mascota()) ?>">Editar</a></td>
      <td><?php echo $mascota->getNombre_mascota() ?></td>
      <td><?php echo $mascota->getTipo_mascoTa() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn btn-primary" href="<?php echo url_for('mascota/new') ?>">Nuevo</a>
