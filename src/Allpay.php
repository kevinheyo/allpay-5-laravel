<?php
namespace Allpay;


class Allpay
{
    protected $allInOne;

    public function __construct()
    {
        $this->allInOne = new \AllInOne();
        $this->allInOne->ServiceURL = config('allpay.ServiceURL');
        $this->allInOne->HashKey    = config('allpay.HashKey');
        $this->allInOne->HashIV     = config('allpay.HashIV');
        $this->allInOne->MerchantID = config('allpay.MerchantID');

        return $this->allInOne;
    }
}