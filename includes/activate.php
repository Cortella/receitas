<?php
function br_activate_plugin(){
    if( version_compare(get_bloginfo('version'), '4.5', '<') ){
        wp_die(__('Você precisa atualizar o wordpress para usar esse plugin', 'receitas'));
    }
}