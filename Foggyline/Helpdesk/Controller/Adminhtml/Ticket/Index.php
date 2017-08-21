<?php
/**
 * Created by PhpStorm.
 * User: Mahi
 * Date: 15-Aug-17
 * Time: 5:51 PM
 */
namespace Foggyline\Helpdesk\Controller\Adminhtml\Ticket;
class Index extends \Foggyline\Helpdesk\Controller\Adminhtml\Ticket
{
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $resultForward = $this->resultForwardFactory->
            create();
            $resultForward->forward('grid');
            return $resultForward;
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->
        setActiveMenu('Foggyline_Helpdesk::ticket_manage');
        $resultPage->getConfig()->getTitle()->
        prepend(__('Tickets'));
        $resultPage->addBreadcrumb(__('Tickets'), __('Tickets'));
        $resultPage->addBreadcrumb(__('Manage Tickets'),
            __('Manage Tickets'));
        return $resultPage;
    }
}
