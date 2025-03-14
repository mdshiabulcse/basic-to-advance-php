<?php
$paymentStatus = 'Cancelled';
switch ($paymentStatus) {
    case 'Paid':
        echo 'Payment Successful';
        break;
    case 'Unpaid':
        echo 'Payment Unsuccessful';
        break;
    case 'Cancelled':
    case 'Rejected':
        echo 'Payment Cancelled';
        break;
    default:
        echo 'Payment Failed';
}