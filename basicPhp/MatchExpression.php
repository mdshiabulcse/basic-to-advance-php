<?php
$paymentStatus = 6;

switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;
    case 2:
    case 3:
        echo 'Unpaid';
        break;
    case 0:
        echo 'Declined';
        break;
    default:
        echo 'Unknown';
        break;
}
echo '<br>';
//switch ==
//match ===
$paymentStatusDisplay = match ($paymentStatus) {
    1 => print 'Paid' . '<br>',
    2,3 => print 'Unpaid'. '<br>',
    0 => print 'Declined' .  '<br>',
    default => print 'Unknown'. '<br>',

};
echo $paymentStatusDisplay;