<?php
if (!class_exists('TLPportSettings')):
    /**
     *
     */
    class TLPportSettings
    {

        function __construct() {
            add_action('init', array($this, 'tlp_pluginInit'));
            add_action('plugins_loaded', array($this, 'tlp_portfolio_load_text_domain'));
            add_action('admin_menu', array($this, 'tlp_menu_register'));
            add_action('wp_ajax_tlpPortSettings', array($this, 'tlpPortSettings'));
            add_filter('plugin_action_links_' . TLP_PORTFOLIO_PLUGIN_ACTIVE_FILE_NAME,
                array($this, 'tlp_portfolio_marketing'));
            add_action( 'admin_init', array( $this, 'my_plugin_redirect' ) );
        }

		function my_plugin_redirect() {
			if ( get_option( 'rtport_activation_redirect', false ) ) {
				delete_option( 'rtport_activation_redirect' );
				wp_redirect( admin_url( 'edit.php?post_type=portfolio&page=tlp_portfolio_get_help' ) );
			}
		}


        function tlp_portfolio_marketing($links) {
            $links[] = '<a target="_blank" href="' . esc_url('https://demo.radiustheme.com/wordpress/plugins/tlp-portfolio/') . '">Demo</a>';
            $links[] = '<a target="_blank" href="' . esc_url('https://radiustheme.com/how-to-setup-and-configure-tlp-portfolio-free-version-for-wordpress/') . '">Documentation</a>';
            $links[] = '<a target="_blank" style="color: #39b54a;font-weight: 700;"  href="' . TLPPortfolio()->pro_version_link() . '">Get Pro</a>';

            return $links;
        }


        function tlp_pluginInit() {
            global $TLPportfolio;
            $settings = get_option($TLPportfolio->options['settings']);
            $width = isset($settings['feature_img']['width']) ? ($settings['feature_img']['width'] ? absint( $settings['feature_img']['width'] ) : 350) : 350;
            $height = isset($settings['feature_img']['height']) ? ($settings['feature_img']['height'] ? absint( $settings['feature_img']['height'] ) : 250) : 250;
            add_image_size($TLPportfolio->options['tlp-portfolio-thumb'], $width, $height, true);
        }


        function tlpPortSettings() {
            global $TLPportfolio;
            $error = true;
            if ($TLPportfolio->verifyNonce()) {
                unset($_REQUEST['action']);
                unset($_REQUEST['tlp_nonce']);
                unset($_REQUEST['_wp_http_referer']);
                update_option($TLPportfolio->options['settings'], $_REQUEST);
                flush_rewrite_rules();
                $response = array(
                    'error' => $error,
                    'msg'   => esc_html__('Settings successfully updated', 'tlp-portfolio')
                );
            } else {
                $response = array(
                    'error' => true,
                    'msg'   => esc_html__('Security Error!!!', 'tlp-portfolio')
                );
            }
            wp_send_json($response);
            die();
        }


        /**
         *  TLP menu register
         */
        function tlp_menu_register() {
            $page = add_submenu_page('edit.php?post_type=portfolio', esc_html__('TLP Portfolio Settings', 'tlp-portfolio'),
                esc_html__('Settings', 'tlp-portfolio'), 'administrator', 'tlp_portfolio_settings',
                array($this, 'tlp_portfolio_settings'));

            $page = add_submenu_page('edit.php?post_type=portfolio', esc_html__('Get Help', 'tlp-portfolio'),
            esc_html__('Get Help', 'tlp-portfolio'), 'administrator', 'tlp_portfolio_get_help',
            array($this, 'get_help'));

            add_action('admin_print_styles-' . $page, array($this, 'tlp_style'));
            add_action('admin_print_scripts-' . $page, array($this, 'tlp_script'));
        }

        /**
         *  Portfolio style
         */
        function tlp_style() {
            wp_enqueue_style('tlp-portfolio-admin');
        }

        function tlp_script() {
            wp_enqueue_style(array('wp-color-picker','pfp-datepicker'));
            wp_enqueue_script(array('jquery', 'jquery-ui-sortable', 'wp-color-picker','pfp-datepicker', 'tlp-portfolio-admin'));
            wp_localize_script('tlp-portfolio-admin', 'tpl_portfolio_oj', array(
                    'ajaxurl' => admin_url( 'admin-ajax.php ' ),
                    'nonce'   => wp_create_nonce( TLPPortfolio()->nonceText() ),
                    'nonceId' => TLPPortfolio()->nonceId()
                )
            );
        }

        /**
         *  Render settings view
         */
        function tlp_portfolio_settings() {
            TLPPortfolio()->render_view('settings');
        }

        /**
         *  Render get help view
         */
        function get_help() {
            TLPPortfolio()->render_view('help');
        }

        public function tlp_portfolio_load_text_domain() {

            load_plugin_textdomain('tlp-portfolio', false, TLP_PORTFOLIO_LANGUAGE_PATH);

        }

    }
endif;
