<?php
/**
* Plugin Name: Services Administrator
* Plugin URI: 
* Description: A plugin to manage the company services.
* Version: 1.0
* Author: João Mendonça
* Author URI: http://www.joaomendonca.net
**/

add_action('admin_menu', 'add_custom_menu');
add_action('admin_init', 'load_aditional_js_css');

function add_custom_menu() {
    add_menu_page( 
        'Services', 
        'Services', 
        'manage_options', 
        'services-administrator', 
        'load_admin_panel', 
        plugins_url('images/icon.svg', __FILE__), 
        '50.5'
    );
}

function load_admin_panel() {
    echo /*HTML*/'
        <main class="sp_admin_main">
            <h1 class="sp_admin_title">Services Admin Panel</h1>
            <nav class="sp_admin_nav">
                <button type="button" class="sp_admin_button">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="sp_admin_button_icon_path" fill-rule="evenodd" clip-rule="evenodd" d="M7 0C7.55228 0 8 0.447715 8 1V6H13C13.5523 6 14 6.44772 14 7C14 7.55228 13.5523 8 13 8H8V13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13V8H1C0.447715 8 0 7.55228 0 7C0 6.44772 0.447715 6 1 6H6V1C6 0.447715 6.44772 0 7 0Z"/>
                    </svg>
                    Add new service 
                </button>
                <button type="button" class="sp_admin_button">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="sp_admin_button_icon_path" d="M0.339401 4.04757L6.70879 6.93694C6.89473 7.02143 7.105 7.02143 7.29094 6.93694L13.6603 4.04757C14.1129 3.84222 14.1129 3.15836 13.6603 2.95301L7.29121 0.0633673C7.19985 0.0216115 7.10058 0 7.00014 0C6.89969 0 6.80042 0.0216115 6.70907 0.0633673L0.339401 2.95274C-0.113134 3.15809 -0.113134 3.84222 0.339401 4.04757ZM13.6606 6.46144L12.0722 5.74149L7.65242 7.74493C7.4457 7.83872 7.22613 7.8863 7 7.8863C6.77387 7.8863 6.55457 7.83872 6.34758 7.74493L1.92806 5.74149L0.339401 6.46144C-0.113134 6.66651 -0.113134 7.3501 0.339401 7.55517L6.70879 10.4424C6.89473 10.5266 7.105 10.5266 7.29094 10.4424L13.6606 7.55517C14.1131 7.3501 14.1131 6.66651 13.6606 6.46144ZM13.6606 9.95592L12.0782 9.2387L7.65242 11.2449C7.4457 11.3387 7.22613 11.3862 7 11.3862C6.77387 11.3862 6.55457 11.3387 6.34758 11.2449L1.92204 9.2387L0.339401 9.95592C-0.113134 10.161 -0.113134 10.8446 0.339401 11.0497L6.70879 13.9368C6.89473 14.0211 7.105 14.0211 7.29094 13.9368L13.6606 11.0497C14.1131 10.8446 14.1131 10.161 13.6606 9.95592Z"/>
                    </svg>
                    Manage services
                </button>
            </nav>
        </main>
    ';
}

function load_aditional_js_css() {
    wp_register_style('sp_styles', plugins_url('styles.css',__FILE__ ));
    wp_enqueue_style('sp_styles');
    wp_register_script( 'sp_main', plugins_url('main.js',__FILE__ ));
    wp_enqueue_script('sp_main');
}