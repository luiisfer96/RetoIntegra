<?php

/**
 * Deporte form base class.
 *
 * @method Deporte getObject() Returns the current form's model object
 *
 * @package    reto
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDeporteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_deporte'     => new sfWidgetFormInputHidden(),
      'nombre_deporte' => new sfWidgetFormInputText(),
      'tipo_deporte'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_deporte'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_deporte')), 'empty_value' => $this->getObject()->get('id_deporte'), 'required' => false)),
      'nombre_deporte' => new sfValidatorString(array('max_length' => 100)),
      'tipo_deporte'   => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('deporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deporte';
  }

}
