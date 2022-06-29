<?php

use Order as GlobalOrder;

class Order{

    public function __construct(Public string $id, Public string $sender, Public string $receiver, Private int $quantity, Private string $item)
    {}
    function getOrder(){
        return ("order id {$this->id} dengan pengirim bernama {$this->sender} dan penerimanya bernama {$this->receiver}");
        
    }
    
}
$detail_order = new Order(id: "1", sender: "Achmad", receiver: "Fauzi", quantity: 2, item: "buku");

var_dump($detail_order);