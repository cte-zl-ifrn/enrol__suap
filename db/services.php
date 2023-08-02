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
 * SUAP plugin external functions and service definitions.
 *
 * @package    enrol_suap
 * @category   webservice
 * @copyright  2011 Jerome Mouneyrac
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(

    // === enrol related functions ===
    'enrol_suap_enrol_users' => array(
        'classname'   => 'enrol_suap_external',
        'methodname'  => 'enrol_users',
        'classpath'   => 'enrol/suap/externallib.php',
        'description' => 'SUAP enrol users',
        'capabilities'=> 'enrol/suap:enrol',
        'type'        => 'write',
    ),

    'enrol_suap_unenrol_users' => array(
        'classname'   => 'enrol_suap_external',
        'methodname'  => 'unenrol_users',
        'classpath'   => 'enrol/suap/externallib.php',
        'description' => 'SUAP unenrol users',
        'capabilities'=> 'enrol/suap:unenrol',
        'type'        => 'write',
    ),

);
