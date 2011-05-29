<?php

require_once dirname(__FILE__).'/../lib/jobGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/jobGeneratorHelper.class.php';

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends autoJobActions
{
  public function executeBatchExtend(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');
    
    $q = Doctrine_Query::create()
      ->form('JobeetJob j')
      ->whereIn('j.id', $ids);

    foreach($q->execute() as $job)
    {
      $job->extend(true);
    }
    
    $this->getUser()->setFlash('notice', 'The selected jobs have been extended successfully.');
    
    $this->redirect('jobeet_job');
  }
}
