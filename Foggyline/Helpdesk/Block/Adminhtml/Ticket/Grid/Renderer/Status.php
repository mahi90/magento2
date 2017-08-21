<?php
/**
 * Created by PhpStorm.
 * User: Mahi
 * Date: 15-Aug-17
 * Time: 5:40 PM
 */

namespace Foggyline\Helpdesk\Block\Adminhtml\Ticket\Grid\Renderer;
class Status extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    protected $ticketFactory;

    public function __construct(
        \Magento\Backend\Block\Context $context,
        \Foggyline\Helpdesk\Model\TicketFactory $ticketFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->ticketFactory = $ticketFactory;
    }

    public function render(\Magento\Framework\DataObject $row)
    {
        $ticket = $this->ticketFactory->create()->load($row->
        getId());
        if ($ticket && $ticket->getId()) {
            return $ticket->getStatusAsLabel();
        }
        return '';
    }

}