<?php

/**
 * mascota actions.
 *
 * @package    reto
 * @subpackage mascota
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mascotaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mascotas = Doctrine_Core::getTable('Mascota')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id_mascota')));
    $this->forward404Unless($this->mascota);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MascotaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MascotaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id_mascota'))), sprintf('Object mascota does not exist (%s).', $request->getParameter('id_mascota')));
    $this->form = new MascotaForm($mascota);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id_mascota'))), sprintf('Object mascota does not exist (%s).', $request->getParameter('id_mascota')));
    $this->form = new MascotaForm($mascota);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id_mascota'))), sprintf('Object mascota does not exist (%s).', $request->getParameter('id_mascota')));
    $mascota->delete();

    $this->redirect('mascota/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mascota = $form->save();

      $this->redirect('mascota/edit?id_mascota='.$mascota->getId_mascota());
    }
  }
}
