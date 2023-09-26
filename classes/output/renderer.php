<?php
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

namespace local_corporatehierarchy\output;

defined('MOODLE_INTERNAL') || die;

use plugin_renderer_base;

/**
 * Renderer Class Corporate Hierarchy.
 * @package    local_corporatehierarchy
 * @copyright  2023 Davison Ramos <davison.ajr@gmail.com>
 * @author     Davison Ramos
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class renderer extends plugin_renderer_base {
    /**                                                                                                                             
     * Defer to template.                                                                                                           
     *                                                                                                                              
     * @param index_page $page                                                                                                      
     *                                                                                                                              
     * @return string html for the page                                                                                             
     */                                                                                                                             
    public function render_index_page($page) {
        global $PAGE;         

        $data = $page->export_for_template($this);
        
        $PAGE->requires->js_call_amd(
            'local_corporatehierarchy/app',
            'init',
            [
                $data->element_id
            ]
        );
        
        return parent::render_from_template('local_corporatehierarchy/index-page', $data);                                                         
    }
}