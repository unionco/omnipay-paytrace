<?php
namespace unionco\omnipay\paytrace\Message\CreditCard;

/** @psalm-suppress PropertyNotSetInConstructor */
class UpdateCardRequest extends CreateCardRequest
{
    protected $type = 'UpdateCustomer';
}
