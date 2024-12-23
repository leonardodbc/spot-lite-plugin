<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://lite.acad.univali.br
 * @since      1.0.0
 *
 * @package    Spot_Lite
 * @subpackage Spot_Lite/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Spot_Lite
 * @subpackage Spot_Lite/public
 */
class Spot_Lite_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $Spot_Lite    The ID of this plugin.
	 */
	private $Spot_Lite;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $Spot_Lite       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($Spot_Lite, $version)
	{
		$this->Spot_Lite = $Spot_Lite;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{
		wp_enqueue_style($this->Spot_Lite, plugin_dir_url(__FILE__) . 'css/spot-lite-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{
		wp_enqueue_script($this->Spot_Lite, plugin_dir_url(__FILE__) . 'js/spot-lite-public.js', array('jquery'), $this->version, false);
	}

}
