<?php
/**
 * Created by PhpStorm.
 * User: Mahi
 * Date: 15-Aug-17
 * Time: 5:56 PM
 */
namespace Foggyline\Helpdesk\Controller\Adminhtml\Ticket;
class Grid extends \Foggyline\Helpdesk\Controller\Adminhtml\Ticket
{
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
