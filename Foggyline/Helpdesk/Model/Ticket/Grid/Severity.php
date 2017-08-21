<?php
/**
 * Created by PhpStorm.
 * User: Mahi
 * Date: 15-Aug-17
 * Time: 5:46 PM
 */
namespace Foggyline\Helpdesk\Model\Ticket\Grid;
class Severity implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Foggyline\Helpdesk\Model
        \Ticket::getSeveritiesOptionArray();
    }
}