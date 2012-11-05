<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang = array();

$lang['order_confirmation_subject'] = "Conferma d'ordine";

$lang['order_confirmation_contents'] = <<<EOT
Salve {billing_name},
Grazie per aver acquistato da noi.
Il dettagli del suo ordine -

Id Ordine    - {order_id}
Totale dell'ordine - {order_total}

Oggetti acquistati :
{items}
Oggetto - {title}, Quantit&agrave; - {item_qty}, Subtotale - {item_total}
{/items}

Informazioni di spedizione :
Nome     	- {shipping_name}
Indirizzo 	- {shipping_address1}
Indirizzo  	- {shipping_address2}
Indirizzo  	- {shipping_address3}
Regione   	- {shipping_region}
Paese  		- {shipping_country}
CAP 		- {shipping_postcode}

Ci contatti qualora ci fossero degli errori nelle informazioni sopra riportate.
Grazie!
EOT;

$lang['payment_confirmation_subject'] = 'Pagamento ricevuto';

$lang['payment_confirmation_contents'] = <<<EOT
Salve {billing_name},
Le confermiamo di aver ricevuto il pagamento completo per l'ordine di cui sotto -

Id Ordine - {order_id}
Totale dell'ordine - {order_total}

Oggetti ordinati :
{items}
Oggetto - {title}, Quantit&agrave; - {item_qty}, Subtotale - {item_total}
{/items}

Il suo ordine verr&agrave; spedito il prima possibile.

Informazioni di spedizione :
Nome     	- {shipping_name}
Indirizzo 	- {shipping_address1}
Indirizzo  	- {shipping_address2}
Indirizzo  	- {shipping_address3}
Regione   	- {shipping_region}
Paese  		- {shipping_country}
CAP 		- {shipping_postcode}

Ci contatti qualora ci fossero degli errori nelle informazioni sopra riportate.
Grazie!
EOT;
