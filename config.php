<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * The configuration for theme_coconut is defined here.
 *
 * @package     theme_coconut
 * @copyright   2022 Rajneel Totaram
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'coconut';

$THEME->parents = array(
    'boost',
);

$THEME->scss = function($theme) {
    return theme_coconut_get_main_scss_content($theme);
};

$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
$THEME->activityheaderconfig = [
    'notitle' => false,
];

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

//$THEME->removedprimarynavitems = ['myhome', 'courses'];
