<table>
  <tbody>
    <tr>
      <th>Id mascota:</th>
      <td><?php echo $mascota->getId_mascota() ?></td>
    </tr>
    <tr>
      <th>Nombre mascota:</th>
      <td><?php echo $mascota->getNombre_mascota() ?></td>
    </tr>
    <tr>
      <th>Tipo mascota:</th>
      <td><?php echo $mascota->getTipo_mascoTa() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('mascota/edit?id_mascota='.$mascota->getId_mascota()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('mascota/index') ?>">List</a>
