<?php


class Qcld_woowbot_info_page
{

    function __construct()
    {
        add_action('admin_menu', array($this, 'qcopd_info_menu'));
    }

    function qcopd_info_menu(){
        
        add_submenu_page(
            'woowbot',
            esc_html__('Help'),
            esc_html__('Help'),
            'manage_options',
            'qcld_woowbot_info_page',
            array( $this, 'qcopd_info_page_content' )
        );
    }

    function qcopd_info_page_content()
    {
        ?>
        <style>


            .qc-plugin-help-container {
                padding: 20px;
                background-color: #fff;
                border: 1px solid #cccccc;
                margin: 0 14px;
				width: 100%;
				margin-top: -18px;
				
            }

            .qc-plugin-help-heading-lg {
                border-bottom: 1px dashed #cccccc;
                margin: 0 0 10px;
                padding: 20px 0;
            }
			* {

				webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;


			}
            div#promotion-wpchatbots {
                max-width: 1170px;
            }
            .qc-plugin-help-container {
                max-width: 1170px;
            } 
            
            .qc-plugin-help-container {
    display: flex;
    align-items: center;
}         






div#post-body-content{
    background-color: #2e2e2e;
  }
  .wp-chatbot-wrap form {
    width: 1170px !important;
  }
  div#post-body-content {
    position: relative;
  }
  div#post-body-content:before {
    content: '';
    position: absolute;
    background: url("<?php echo esc_url( QCLD_WOOCHATBOT_IMG_URL . '/hud-left-dark.png' ); ?>") top left;
    left: -6px;
    width: 40px;
    height: 100%;
    z-index: 999;
    top: 0;
    background-repeat: repeat !important;
  }
  div#post-body-content:after {
    content: '';
    position: absolute;
    background: url("<?php echo esc_url( QCLD_WOOCHATBOT_IMG_URL . '/hud-righ-dark.png' ); ?>") top right;
    width: 41px;
    height: 100%;
    right: -22px;
    width: 28px;
    z-index: 999;
    top: 0;
    background-repeat: repeat !important;
  }
  
  
  div#post-body-content{
    margin: 20px 0 0 0;
    max-width: 1170px;
}
.wraphelpouter{
    position: relative;
  }
  .wraphelpouter:before {
    content: '';
    position: absolute;
    background: url("<?php echo esc_url( QCLD_WOOCHATBOT_IMG_URL . '/hud-top-dark_new.png' ); ?>") top center;
    width: 100%;
    height: 34px;
    z-index: 9999999;
    top: -7px;
    background-repeat: no-repeat;
  }
  .wraphelpouter {
    position: relative;
    max-width: 1170px;
}

div#post-body-content {
    margin: 0;
    max-width: 1170px;
}

  path{stroke-dasharray:300;stroke-dashoffset:300;stroke:#c3a477;stroke-width:2px;-webkit-animation:draw ease-out infinite;animation:draw ease-out infinite}
  #l1{-webkit-animation-duration:3s;animation-duration:3s}
  #l2{-webkit-animation-duration:5.5s;animation-duration:5.5s}
  #l3{-webkit-animation-duration:2s;animation-duration:2s}
  #l4{-webkit-animation-duration:5.5s;animation-duration:5.5s}@-webkit-keyframes draw{50%{stroke-dashoffset:0}100%{stroke-dashoffset:-300}}@keyframes draw{50%{stroke-dashoffset:0}100%{stroke-dashoffset:-300}}
  .lineanimation{position:absolute;top:-64px;z-index:99999999;left:-10px;right:0;margin:0 auto;width:257px;max-width:257px;height:90px;overflow:hidden;bottom:0}
  .lineanimation svg{width:250px;height:95px}.lineanimation svg{width:250px;height:150px;overflow:hidden}.lineanimation path{stroke:#5e5e5e}

  .wraphelpouter {
    margin: 20px 0 0 0;
}

  .qc-plugin-help-container {
    background-color: #ffffff00;
    border: 1px solid #cccccc00;
    color: #fff;
}
.qc-plugin-help-heading-lg {
    color: #fff;
}
.qc-plugin-help-container-right p {
    font-size: 15px;
}

        </style>

<div class="wraphelpouter">





        <div class="wrap">
            <div id="poststuff">
                <div id="post-body" class="metabox-holder">
                <div class="lineanimation">
                    <svg width="350" height="350" viewBox="0 0 308 309" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                    <circle id="a" cx="150" cy="150" r="150"></circle>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="62.304%" id="c">
                    <stop stop-color="#09DFF3" offset="0%"></stop>
                    <stop stop-color="#44BEFF" offset="100%"></stop>
                    </linearGradient>
                    </defs>
                    <g>
                    <path id="l1" d="M0 130 L300 130"></path>
                    <path id="l2" d="M0 150 L300 150"></path>
                    <path id="l3" d="M0 170 L300 170"></path>
                    <path id="l4" d="M0 190 L300 190"></path>
                    </g>
                    </svg>
                </div>
                    <div id="post-body-content" style="position: relative;">
                        <div class="qc-plugin-help-container">
                        <div class="qc-plugin-help-container-right">
                            <h3 class="qc-plugin-help-heading-lg"><?php esc_html_e('Help', 'woowbot-woocommerce-chatbot'); ?></h3>
                            <p>
                                <?php esc_html_e('Getting started with WoowBot is instantaneous. All you need to do is install and activate the plugin.', 'woowbot-woocommerce-chatbot'); ?>
                            </p>
                            <p>
                                <?php esc_html_e('You can upload your own ChatBot icon from WoowBot panel->Icons section.', 'woowbot-woocommerce-chatbot'); ?>
                            </p>
                            <p>
                                <?php esc_html_e('You can also upload a custom Agent icon in the pro version.', 'woowbot-woocommerce-chatbot'); ?>
                            </p>
                            <p>
                                <?php esc_html_e('In the lite version there are a few language settings that you can customize to your need. The default languages are fine for stores using the English language. But you can change the bot responses literally into any language!', 'woowbot-woocommerce-chatbot'); ?>
                            </p>
                            <p><?php esc_html_e('Use the custom CSS panel if you need to tweak some colors or font settings inside WoowBot.', 'woowbot-woocommerce-chatbot'); ?></p>
                            
                            <div class="clear"></div>
                            <h3 class="qc-plugin-help-heading-lg"><?php esc_html_e('Get the #1 ChatBot for WooCommerce – WoowBot', 'woowbot-woocommerce-chatbot'); ?></h3>
                            <p style="font-weight:bold;"><?php esc_html_e('Get Advanced AI Features, Customer Retargeting and more with WoowBot Pro', 'woowbot-woocommerce-chatbot'); ?></p>
                            <p>More Sales, Conversions and Satisfied customers! WoowBot is the most powerful, flexible and WooCommerce Integrated native Plug n’ Play ChatBot that can <span style="font-weight:bold;">improve your sales</span> and and provide automated <span style="font-weight:bold;">customer support.</span></p>
                            <p>Utilize the AI powered ChatBot services on your WooCommerce websites with <span style="font-weight:bold;">Live Human Chat,</span> <span style="font-weight:bold;">DialogFlow,</span> or <span style="font-weight:bold;">OpenAI</span> (ChatGPT) along with many built-in, powerful features.</p>
                            <p style="text-align: left">
                                <a target="_blank"
                                   href="<?php echo esc_url('https://woowbot.pro/'); ?>"
                                   class="button button-primary"><?php esc_html_e('Get the WoowBot Pro Now!', 'woowbot-woocommerce-chatbot'); ?></a>

                            </p>
                            </div>
                            <div class="qc-plugin-help-container-right">
                        <img src="<?php echo esc_url(QCLD_WOOCHATBOT_PLUGIN_URL.'images/chatbot-for-woocommerce-woowbot.png'); ?>" />
                        </div>
                        </div>
                        <div style="padding: 15px 10px; text-align: center; margin-top: 20px;margin-left: 14px;width: 1170px;     color: #fff;">
                            <?php esc_html_e('Crafted By:', 'woowbot-woocommerce-chatbot'); ?> <a href="<?php echo esc_url('http://www.quantumcloud.com'); ?>" target="_blank"><?php esc_html_e('Web Design Company', 'woowbot-woocommerce-chatbot'); ?></a> -
                            <?php echo esc_attr('QuantumCloud', 'woowbot-woocommerce-chatbot'); ?>
                        </div>

                    </div>
                    <!-- /post-body-content -->


                </div>
                <!-- /post-body-->

            </div>
            <!-- /poststuff -->

        </div>
        <!-- /wrap -->
        </div>
        <?php
    }
}

new Qcld_woowbot_info_page;