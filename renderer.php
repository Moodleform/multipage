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
 * Custom renderer for output of pages
 *
 * @package    mod_multipage
 * @copyright  2016 Richard Jones <richardnz@outlook.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @see https://github.com/moodlehq/moodle-mod_newmodule
 *
 */

class mod_multipage_renderer extends plugin_renderer_base {

    /**
     * Returns the header for the module
     *
     * @param string $lessontitle the module name.
     * @param string $coursename the course name.
     * @return string header output
     */
    public function header($lessontitle, $coursename) {

        //$context = context_module::instance($cm->id);

        // Header setup
        $this->page->set_title($this->page->course->shortname.": ".$coursename);
        $this->page->set_heading($this->page->course->fullname);
        $output = $this->output->header();

        $output .= $this->output->heading($lessontitle);
		
        return $output;
    }
	
	public function fetch_intro($multipage, $id) {	// AJOUT WEEK 2 TASK 1
		// modif week 2
		echo $this->output->box(format_module_intro('multipage', $multipage, $id), 'generalbox mod_introbox', 'multipageintro');
    }
	
	public function fetch_editing_links() { // AJOUT WEEK 2 TASK 2
    
        $html = html_writer::start_div(
                'mod_multipage_page_edit');
        
        $html .= '<p>' . get_string('edit_page', 
                'mod_multipage') . '</p>';      
        
        $html .=  html_writer::end_div();
        return $html;
    }
}