<?php

/**
 * Mascota form base class.
 *
 * @method Mascota getObject() Returns the current form's model object
 *
 * @package    reto
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMascotaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_mascota'     => new sfWidgetFormInputHidden(),
      'nombre_mascota' => new sfWidgetFormInputText(),
      'tipo_mascota'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_mascota'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_mascota')), 'empty_value' => $this->getObject()->get('id_mascota'), 'required' => false)),
      'nombre_mascota' => new sfValidatorString(array('max_length' => 100)),
      'tipo_mascota'   => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('mascota[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mascota';
  }

}
