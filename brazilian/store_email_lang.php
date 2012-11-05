<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang = array();

$lang['order_confirmation_subject'] = 'Confirmação de Pedido';

$lang['order_confirmation_contents'] = <<<EOT
Olá {billing_name},
Obrigado por efetuar seu pedido conosco.
Aqui estão os detalhes do seu pedido -

Número do Pedido    - {order_id}
Total do Pedido - {order_total}

Itens do Pedido :
{items}
Item - {title}, Qtde - {item_qty}, Total do Item - {item_total}
{/items}

Informações de Entrega :
Nome     - {shipping_name}
Endereço  - {shipping_address1}
Bairro  - {shipping_address2}
Complemento 2  - {shipping_address3}
Cidade   - {shipping_region}
País  - {shipping_country}
CEP - {shipping_postcode}

Por favor entre em contato conosco se qualquer um dos detalhes acima aparentar que está incorreto.
Obrigado!
EOT;

$lang['payment_confirmation_subject'] = 'Pagamento Recebido';

$lang['payment_confirmation_contents'] = <<<EOT
Olá {billing_name},
Um pagamento foi efetuado para o seguinte pedido -

Número do Pedido    - {order_id}
Total do Pedido - {order_total}

Itens do Pedido :
{items}
Item - {title}, Qtde - {item_qty}, Total de Itens - {item_total}
{/items}

Seu pedido será entregue o mais rapidamente possível.

Informação do Pedido :
Nome     - {shipping_name}
Endereço  - {shipping_address1}
Bairro  - {shipping_address2}
Complemento 2  - {shipping_address3}
Região   - {shipping_region}
País  - {shipping_country}
CEP - {shipping_postcode}

Por favor entre em contato conosco se qualquer um dos detalhes acima aparentar que está incorreto.
Obrigado!
EOT;
