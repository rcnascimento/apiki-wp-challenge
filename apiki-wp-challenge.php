<?php
/**
 * Apiki - WordPress Back-end Challenge
 *
 * @since        1.0.0
 * @package      Apiki_WP_Challenge
 *
 * @wordpress-plugin
 * Plugin Name:  Apiki - WordPress Back-end Challenge
 * Plugin URI:   https://github.com/rcnascimento/apiki-wp-challenge
 * Description:  Implementa a funcionalidade de favoritar posts para usuários logados usando a WP REST API.
 * Version:      1.0.0
 * Requires PHP: 5.6
 * Author:       Rodrigo Nascimento
 * Author URI:   https://www.linkedin.com/in/rcnascimento
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Ativação do plugin.
 */
function apiki_on_activate() {
	// TODO
	// - criar a tabela.
	// - habilitar REST endpoint.
}
register_activation_hook( __FILE__, 'apiki_on_activate' );

/**
 * Desativação do plugin.
 */
function apiki_on_deactivate() {
	// TODO
	// - desabilitar REST endpoint.
}
register_deactivation_hook( __FILE__, 'apiki_on_deactivate' );

/**
 * Desinstalação do plugin.
 */
function apiki_on_uninstall() {
	// TODO
	// - apagar tabela.
}
register_uninstall_hook( __FILE__, 'apiki_on_uninstall' );
