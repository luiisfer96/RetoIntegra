<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    reto
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'apellido'   => new sfWidgetFormInputText(),
      'celular'    => new sfWidgetFormInputText(),
      'cedula'     => new sfWidgetFormInputText(),
      'id_mascota' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'), 'add_empty' => false)),
      'id_deporte' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Deporte'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'apellido'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'celular'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cedula'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'id_mascota' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'))),
      'id_deporte' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Deporte'))),
    ));

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

}
