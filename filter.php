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
 *  Hodor
 *
 * @package    filter
 * @subpackage hodor
 */

defined('MOODLE_INTERNAL') || die();

class filter_hodor extends moodle_text_filter {

    function filter($text, array $options = array()){
        global $CFG;

        if (!isset($CFG->filter_hodor)) {
            set_config('filter_hodor','');
        }

        $text = preg_replace('/([a-z]\w*)/', get_string('hodor', 'filter_hodor'), $text);
        $text = preg_replace('/([A-Z]\w*)/', ucwords(get_string('hodor', 'filter_hodor')), $text);
        return $text;
    }
}


