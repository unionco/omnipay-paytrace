<?php

namespace unionco\omnipay\paytrace\Message\CreditCard;

/** @psalm-suppress PropertyNotSetInConstructor */
class CreateCardRequest extends AuthorizeRequest
{
    protected $type = 'CreateCustomer';
    protected $responseClass = 'unionco\omnipay\paytrace\Message\CreditCard\CreateCardResponse';

    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('card');
        $data = $this->getBaseData();
        $data = array_merge($data, $this->getCardData());
        $data['CUSTID'] = $this->getCardReference();
        $data['METHOD'] = $this->type;
        unset($data['TRANXTYPE']);
        if ($this->getTestMode()) {
            $data['TEST'] = 'Y';
        }
        return array_merge($data, $this->getBillingData());
    }
}
