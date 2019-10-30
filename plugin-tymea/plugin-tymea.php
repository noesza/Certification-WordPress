<?php
/*
Plugin Name: Tymea Plugin
Plugin URI: http://noemieszabotorillec.referentnumerique-insarouen.fr
Description: Ceci est mon plugin comprenant un shortcode "CTA" pour mon site Tymea
Author: Noémie Szabo
Version: 1.0
Author URI: http://noemieszabotorillec.referentnumerique-insarouen.fr
*/


function Call_to_action(){
$code_html= '<p>Retrouvez notre gamme de shampoing solide sur la boutique</p>
<a href="http://noemieszabotorillec.referentnumerique-insarouen.fr/tymea/categorie-produit/les-savons-de-joya/shampoing-solide/"</a><input type="button"value="Aller à la boutique"</input>';

return $code_html;
}

add_shortcode ('tymea','call_to_action');
