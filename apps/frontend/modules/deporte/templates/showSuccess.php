<table>
  <tbody>
    <tr>
      <th>Id deporte:</th>
      <td><?php echo $deporte->getId_deporte() ?></td>
    </tr>
    <tr>
      <th>Nombre deporte:</th>
      <td><?php echo $deporte->getNombre_deporte() ?></td>
    </tr>
    <tr>
      <th>Tipo deporte:</th>
      <td><?php echo $deporte->getTipo_deporTe() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('deporte/edit?id_deporte='.$deporte->getId_deporte()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('deporte/index') ?>">List</a>
