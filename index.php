<?php
/*
Plugin Name: receitas
Description: Um plugin simples para adicao de receitas.
Version: 1.0
Author: Cortella
Text Domain: receitas
*/

//Protection
if(!function_exists('add_action')){
    echo __('Opa! Eu sou so um plugin nao posso ser chamado diretamente');
    exit;
}

//Setup
define ('RECEITA_PLUGIN_URL', __FILE__);
//Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');
//Hooks
register_activation_hook(RECEITA_PLUGIN_URL, 'br_activate_plugin');
add_action('init', 'br_receitas_init');
add_action('admin_init','br_receitas_admin_init');
add_action('save_post_receita', 'br_save_post_admin',10,3);
//Shortcodes


?>