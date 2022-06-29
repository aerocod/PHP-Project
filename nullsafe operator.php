<?php
class Order{
    public ?string $item;
}
class Transact{
    public ?Order $order;
}

function getitem(?Transact $transact): ?string
{
    return $transact?->order?->item;   //Untuk Pengecekan Kondisi cukup gunakan kode <- tak perlu switch if dkk
}

echo getitem(null);