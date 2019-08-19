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

//Includes
include('includes/activate.php');
include('includes/init.php');
//Hooks
register_activation_hook(__FILE__, 'br_activate_plugin');
add_action('init', 'br_receitas_init');
//Shortcodes


?>