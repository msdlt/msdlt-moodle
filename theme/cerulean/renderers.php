<?php
// This file is part of the Cerulean theme for Moodle
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

defined('MOODLE_INTERNAL') || die();

/**
 * Theme Cerulean version file.
 *
 * @package    theme_cerulean
 * @copyright  2015 Bas Brands, http://basbrands.nl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class theme_cerulean_core_renderer extends theme_bootstrap_core_renderer {
    public function full_header() {
        global $PAGE;
        if (!empty($PAGE->theme->settings->logo) &&
            ($PAGE->pagelayout == 'frontpage' || $PAGE->pagelayout == 'login')) {
            $fullheader = html_writer::tag('div', '', array('class' => 'logo'));
            $fullheader .= html_writer::tag('div', '', array('class' => 'clearfix'));
        } else {
            $fullheader = parent::full_header();
        }
        return $fullheader;
    }
}