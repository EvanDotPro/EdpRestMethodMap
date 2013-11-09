<?php
namespace EdpRestMap;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $sharedEventManager  = $eventManager->getSharedManager();
        $sharedEventManager->attach(
            'Zend\Mvc\Controller\AbstractRestfulController',
            'dispatch',
            array($this, 'onDispatch'),
            100
        );
    }

    public function onDispatch(MvcEvent $e)
    {
        $request = $e->getRequest();

        if (!$request->isPost() || !$request->getPost('_method', false)) {
            return;
        }

        $request->setMethod($request->getPost('_method'));
    }
}
