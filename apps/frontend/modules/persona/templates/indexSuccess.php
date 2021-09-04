<h1>Lista de personas</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th></th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Celular</th>
      <th>Cedula</th>
      <th>Id mascota</th>
      <th>Id deporte</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $persona): ?>
    <tr>
      <td><a class="btn btn-success" href="<?php echo url_for('persona/edit?id='.$persona->getId()) ?>">Editar</a></td>
      <td><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getApellido() ?></td>
      <td><?php echo $persona->getCelular() ?></td>
      <td><?php echo $persona->getCedula() ?></td>
      <td><?php echo $persona->getId_mascota() ?></td>
      <td><?php echo $persona->getId_deporte() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a class="btn btn-primary" href="<?php echo url_for('persona/new') ?>">Nuevo</a>
<br>
