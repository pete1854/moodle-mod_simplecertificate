<?php

/**
 * Code fragment to define the version of the simplecertificate module
 *
 * @package    mod
 * @subpackage simplecertificate
 * @copyright  Carlos Alexandre S. da Fonseca <carlos.alexandre@outlook.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 */

$module->version  = 2013060401; // The current module version (Date: YYYYMMDDXX)
$module->requires = 2012062500;  // Requires this Moodle version (moodle 2.3.x)
$module->cron     = 4 * 3600;    // Period for cron to check this module (secs)
$plugin->component = 'mod_simplecertificate';
$module->release  = '2.0.1';       // Human-friendly version name
$module->maturity = MATURITY_STABLE;