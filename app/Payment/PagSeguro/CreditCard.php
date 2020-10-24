<?php

namespace App\Payment\PagSeguro;

class CreditCard
{
    private $items;
    private $user;
    private $cardInfo;

    public function __construct($items, $user, $cardInfo)
    {
        $this->items = $items;
        $this->user = $user;
        $this->cardInfo = $cardInfo;
    }

}