<?php
/*
Plugin Name: SPromo News Letter
Plugin URI:
promotional offer for subscription to the newsletter
Author: Loic Valery
Version: 0.1.0
Author URI: https://www.linkedin.com/in/loicvalery/
*/
function shortcode_subscription(){
$code_html='<section class="section_subscription">
    <div class="panel_subscription">
        <p>Inscrivez vous à notre Newsletter et recevez en cadeau votre Sac Caba Lin</p>
        <img src="https://loicvalery.referentnumerique-insarouen.fr/crea_lin/wp-content/uploads/2019/10/caba.jpg" alt="" class="card_subscription-img">
    <a href="https://mailchi.mp/8aa2fc4290fb/newsletter_crea-lin" target="_blank"><input type="button"value="S\'inscrire à la Newletter" class="card_subscription-button"></a>
</section>
<style>
    .section_subscription{
        text-align: center;
    }
    .card_subscription-img{
        width: 100%;
    }
    .card_subscription-button{
        background-color: var(--color-primary);
        color: var(--color-secondary)!important;
        border-radius: 2px;
    }
        .card_subscription-button:hover{
        background-color: var(--color-secondary);
        color: var(--color-primary)!important;
    }
    .panel_subscription {
    font-size: 2rem;
    border: 3px var(--color-primary) solid;
}
</style>';
return $code_html;
}
add_shortcode ('subscription','shortcode_subscription');

?>
