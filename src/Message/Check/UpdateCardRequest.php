<?php

namespace unionco\omnipay\paytrace\Message\Check;

/** @psalm-suppress PropertyNotSetInConstructor */
class UpdateCardRequest extends CreateCardRequest
{
    protected $type = 'UpdateCustomer';
}
