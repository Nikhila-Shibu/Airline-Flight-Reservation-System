<div>
    <h2>Your payment was successful</h2>
    <p>Item Number :<?php echo $item_number; ?></p>
    <p>TXN ID: <?php echo $txn_id; ?></p>
    <p>Amount Paid :  <strong>$<?php echo $payment_amt . ' ' . $currency_code; ?></strong></p>
    <p>Payment Status : <strong><?php echo $status; ?></strong></p>
    <a href="#">back home</a>
</div>