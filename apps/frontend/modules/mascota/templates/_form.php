<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('mascota/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_mascota='.$form->getObject()->getId_mascota() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a class="btn btn-primary" href="<?php echo url_for('mascota/index') ?>">Volver a la lista de Mascotas</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'mascota/delete?id_mascota='.$form->getObject()->getId_mascota(), array('method' => 'delete', 'confirm' => '¿Estás seguro?', 'class' => 'btn btn-danger')) ?>
          <?php endif; ?>
          <input class="btn btn-success" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
