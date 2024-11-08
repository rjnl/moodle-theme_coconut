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
 *
 * @package     theme_coconut
 * @copyright   2022 Rajneel Totaram
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_coconut_get_main_scss_content($theme) {
    global $CFG;

	// Load the main SCSS (a customised version from Boost)
	$moodlescss = file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');

   // Theme specific SCSS
    $pre = file_get_contents($CFG->dirroot . '/theme/coconut/scss/pre.scss');
    $post = file_get_contents($CFG->dirroot . '/theme/coconut/scss/post.scss');

    // Combine them together.
    return $pre . "\n" . $moodlescss . "\n" . $post;
}

function theme_coconut_user_preferences(): array {
    return [
        'theme_coconut_mode' => [
            'type' => PARAM_ALPHA,
            'null' => NULL_NOT_ALLOWED,
            'default' => 'dark',
            'permissioncallback' => [core_user::class, 'is_current_user'],
        ],
    ];
}
