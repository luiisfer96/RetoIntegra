<?php

/**
 * Persona filter form base class.
 *
 * @package    reto
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(),
      'apellido'   => new sfWidgetFormFilterInput(),
      'celular'    => new sfWidgetFormFilterInput(),
      'cedula'     => new sfWidgetFormFilterInput(),
      'id_mascota' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'), 'add_empty' => true)),
      'id_deporte' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Deporte'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'apellido'   => new sfValidatorPass(array('required' => false)),
      'celular'    => new sfValidatorPass(array('required' => false)),
      'cedula'     => new sfValidatorPass(array('required' => false)),
      'id_mascota' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mascota'), 'column' => 'id_mascota')),
      'id_deporte' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Deporte'), 'column' => 'id_deporte')),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'nombre'     => 'Text',
      'apellido'   => 'Text',
      'celular'    => 'Text',
      'cedula'     => 'Text',
      'id_mascota' => 'ForeignKey',
      'id_deporte' => 'ForeignKey',
    );
  }
}
