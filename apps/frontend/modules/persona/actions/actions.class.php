<?php

/**
 * persona actions.
 *
 * @package    reto
 * @subpackage persona
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->personas = Doctrine_Core::getTable('Persona')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->persona = Doctrine_Core::getTable('Persona')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->persona);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($persona = Doctrine_Core::getTable('Persona')->find(array($request->getParameter('id'))), sprintf('Object persona does not exist (%s).', $request->getParameter('id')));
    $this->form = new PersonaForm($persona);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($persona = Doctrine_Core::getTable('Persona')->find(array($request->getParameter('id'))), sprintf('Object persona does not exist (%s).', $request->getParameter('id')));
    $this->form = new PersonaForm($persona);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($persona = Doctrine_Core::getTable('Persona')->find(array($request->getParameter('id'))), sprintf('Object persona does not exist (%s).', $request->getParameter('id')));
    $persona->delete();

    $this->redirect('persona/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $persona = $form->save();

      $this->redirect('persona/edit?id='.$persona->getId());
    }
  }
}
