<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang = array();

$lang['order_confirmation_subject'] = 'Order Confirmation';

$lang['order_confirmation_contents'] = <<<EOT
Hi {billing_name},
Thank you for placing your order with us.
Your order details are -

Order Id    - {order_id}
Order Total - {order_total}

Order Items :
{items}
Item - {title}, Qty - {item_qty}, Item Total - {item_total}
{/items}

Shipping Information :
Name     - {shipping_name}
Address  - {shipping_address1}
Address  - {shipping_address2}
Address  - {shipping_address3}
Region   - {shipping_region}
Country  - {shipping_country}
Postcode - {shipping_postcode}

Please contact us if any of the above details appear incorrect.
Thank You!
EOT;

$lang['payment_confirmation_subject'] = 'Payment Received';

$lang['payment_confirmation_contents'] = <<<EOT
Hi {billing_name},
Your completed payment has been received for the following order -

Order Id    - {order_id}
Order Total - {order_total}

Order Items :
{items}
Item - {title}, Qty - {item_qty}, Item Total - {item_total}
{/items}

Your order will be shipped as soon as possible.

Shipping Information :
Name     - {shipping_name}
Address  - {shipping_address1}
Address  - {shipping_address2}
Address  - {shipping_address3}
Region   - {shipping_region}
Country  - {shipping_country}
Postcode - {shipping_postcode}

Please contact us if any of the above details appear incorrect.
Thank You!
EOT;
