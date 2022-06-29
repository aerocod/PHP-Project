<?php

function paymentCheckout(?string $card)
{
    echo $checkout = $card != null ? 'Your Card : '.$card : throw new Exception("Error Processing Request");
    
}

return paymentCheckout('12345');