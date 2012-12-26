<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang = array();

$lang['order_confirmation_subject'] = 'Confirmación de Pedido';

$lang['order_confirmation_contents'] = <<<EOT
Hola {billing_name},
Gracias por hacer su pedido con nosotros.
Los detalles de su pedido son -

Nº de Pedido	- {order_id}
Total Pedido	- {order_total}

Artículos del Pedido :
{items}
Artículo - {title}, Cant. - {item_qty}, Total Artículo - {item_total}
{/items}

Información de Envío :
Nombre     		- {shipping_name}
Dirección  		- {shipping_address1}
Dirección  		- {shipping_address2}
Dirección  		- {shipping_address3}
Región	   		- {shipping_region}
País	  		- {shipping_country}
Código Postal	- {shipping_postcode}

Por favor, contacte con nosotros si alguno de los datos anteriores es incorrecto.
¡Gracias!
EOT;

$lang['payment_confirmation_subject'] = 'Pago Recibido';

$lang['payment_confirmation_contents'] = <<<EOT
Hola {billing_name},
Su pago ha sido recibido par el siguiente pedido -

Nº de Pedido	- {order_id}
Total Pedido	- {order_total}

Artículos del Pedido :
{items}
Artículo - {title}, Cant. - {item_qty}, Total Artículo - {item_total}
{/items}

Su pedido será enviado lo antes posible.

Información de Envío :
Nombre     		- {shipping_name}
Dirección  		- {shipping_address1}
Dirección  		- {shipping_address2}
Dirección  		- {shipping_address3}
Región	   		- {shipping_region}
País	  		- {shipping_country}
Código Postal	- {shipping_postcode}

Por favor, contacte con nosotros si alguno de los datos anteriores es incorrecto.
¡Gracias!
EOT;
