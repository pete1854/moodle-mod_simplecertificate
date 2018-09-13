<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains the definition for the library class for username texmark plugin
 *
 *
 * @package simplecertificatetextmark_username
 * @copyright 2018 Carlos Alexandre S. da Fonseca
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/mod/simplecertificate/textmarks/textmark_plugin.php');

/**
 *
 * Library class for username textmark plugin
 *
 * @package   simplecertificatetextmark_username
 * @copyright 2018 Carlos Alexandre S. da Fonseca
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class simplecertificate_textmark_username extends simplecertificate_textmark_plugin {
    public function get_type() {
        return 'username';
    }

    public function get_name() {
        return get_string('name', 'simplecertificatetextmark_username');
    }

    public function is_enabled() {
        //TODO get from settings
        return true;
    }

    public function get_text() {
        $issuecert = $this->smplcert->get_issue();
        $user = get_complete_user_data('id', $issuecert->userid);
        if (!$user) {
            print_error('nousersfound', 'moodle');
            return;
        }
        return strip_tags(fullname($user));
    }

}
