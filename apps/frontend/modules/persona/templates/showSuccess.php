<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $persona->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $persona->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $persona->getApellido() ?></td>
    </tr>
    <tr>
      <th>Celular:</th>
      <td><?php echo $persona->getCelular() ?></td>
    </tr>
    <tr>
      <th>Cedula:</th>
      <td><?php echo $persona->getCedula() ?></td>
    </tr>
    <tr>
      <th>Id mascota:</th>
      <td><?php echo $persona->getId_mascota() ?></td>
    </tr>
    <tr>
      <th>Id deporte:</th>
      <td><?php echo $persona->getId_deporte() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('persona/edit?id='.$persona->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('persona/index') ?>">List</a>
