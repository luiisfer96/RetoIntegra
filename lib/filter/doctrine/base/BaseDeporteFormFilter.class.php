<?php

/**
 * Deporte filter form base class.
 *
 * @package    reto
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDeporteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_deporte' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_deporte'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre_deporte' => new sfValidatorPass(array('required' => false)),
      'tipo_deporte'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deporte_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deporte';
  }

  public function getFields()
  {
    return array(
      'id_deporte'     => 'Number',
      'nombre_deporte' => 'Text',
      'tipo_deporte'   => 'Text',
    );
  }
}
