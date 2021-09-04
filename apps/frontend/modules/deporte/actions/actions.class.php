<?php

/**
 * deporte actions.
 *
 * @package    reto
 * @subpackage deporte
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class deporteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->deportes = Doctrine_Core::getTable('Deporte')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->deporte = Doctrine_Core::getTable('Deporte')->find(array($request->getParameter('id_deporte')));
    $this->forward404Unless($this->deporte);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DeporteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DeporteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($deporte = Doctrine_Core::getTable('Deporte')->find(array($request->getParameter('id_deporte'))), sprintf('Object deporte does not exist (%s).', $request->getParameter('id_deporte')));
    $this->form = new DeporteForm($deporte);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($deporte = Doctrine_Core::getTable('Deporte')->find(array($request->getParameter('id_deporte'))), sprintf('Object deporte does not exist (%s).', $request->getParameter('id_deporte')));
    $this->form = new DeporteForm($deporte);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($deporte = Doctrine_Core::getTable('Deporte')->find(array($request->getParameter('id_deporte'))), sprintf('Object deporte does not exist (%s).', $request->getParameter('id_deporte')));
    $deporte->delete();

    $this->redirect('deporte/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $deporte = $form->save();

      $this->redirect('deporte/edit?id_deporte='.$deporte->getId_deporte());
    }
  }
}
