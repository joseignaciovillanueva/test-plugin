<?php
/**
 * This file defines the version of test_plugin
 *
 * @package test_plugin
 * @copyright 2016 joseignacio.villanueva@colex.grupo-sm.com
 *
 * @author Iñaki Villanueva
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$plugin->component = 'local_test_plugin';
$plugin->version = 2016072921;
$plugin->release = '1.0 for testing purposes';
$plugin->requires = 2015051100;

// to do check plugin
$plugin->dependencies = array(
	'plugins' => version,
);
