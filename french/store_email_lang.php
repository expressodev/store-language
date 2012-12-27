<?php if ( ! defined('BASEPATH')) exit('Aucun script d\'accès direct autorisé');

$lang = array();

$lang['order_confirmation_subject'] = 'Confirmation de commande';

$lang['order_confirmation_contents'] = <<<EOT
Bonjour {billing_name},
Merci d'avoir commandé chez nous.
Voici les détails de votre commande -

Numéro de commande    - {order_id}
Total de la commande  - {order_total}

Article(s) commandé(s) :
{items}
Article - {title}, Qtté - {item_qty}, Total article - {item_total}
{/items}

Informations communiquées pour la livraison :
Nom         - {shipping_name}
Adresse     - {shipping_address1}
Adresse     - {shipping_address2}
Adresse     - {shipping_address3}
Code postal - {shipping_postcode}
Région      - {shipping_region}
Pays        - {shipping_country}

Merci de nous contacter si le moindre élément ci-dessus vous semble incorrecte.
À bientôt !
EOT;

$lang['payment_confirmation_subject'] = 'Confirmation de règlement';

$lang['payment_confirmation_contents'] = <<<EOT
Bonjour {billing_name},
Votre règlement complet a bien été enregistré pour la commande suivante -

Numéro de commande    - {order_id}
Total de la commande  - {order_total}

Article(s) commandé(s) :
{items}
Article - {title}, Qtté - {item_qty}, Total article - {item_total}
{/items}

Votre commande sera expédiée aussi vite que possible.

Informations communiquées pour la livraison :
Nom         - {shipping_name}
Adresse     - {shipping_address1}
Adresse     - {shipping_address2}
Adresse     - {shipping_address3}
Code postal - {shipping_postcode}
Région      - {shipping_region}
Pays        - {shipping_country}

Merci de nous contacter si le moindre élément ci-dessus vous semble incorrecte.
À bientôt !
EOT;
