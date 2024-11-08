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
 * TODO describe module pref
 *
 * @module     theme_coconut/pref
 * @copyright  2024 Rajneel Totaram
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {setUserPreference} from 'core_user/repository';

export const setThemeMode = () => {
    // Get the theme toggle switch.
    const toggleTheme = document.getElementById('theme-darkmode');

    // Add event listener to the toggle switch.
    toggleTheme.addEventListener('change', function() {
        const isChecked = this.checked;

        if (isChecked) {
            setUserPreference('theme_coconut_mode', 'dark');
            document.body.classList.remove('lightmode');
            document.body.classList.add('darkmode');
        } else {
            setUserPreference('theme_coconut_mode', 'light');
            document.body.classList.remove('darkmode');
            document.body.classList.add('lightmode');
        }
    });
};
