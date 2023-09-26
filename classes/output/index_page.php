<?php
// Standard GPL and phpdocs
namespace local_corporatehierarchy\output;                                                                                                         
                                                                                                                                    
use renderable;                                                                                                                     
use renderer_base;                                                                                                                  
use templatable;                                                                                                                    
use stdClass;                                                                                                                       
             
class index_page implements renderable, templatable {                                                                               
    /** @var string $sometext Some text to show how to pass data to a template. */
    var $element_id = null;

    public function __construct($element_id) {
        $this->element_id = $element_id;                                                                                                
    }

    /**                                                                                                                             
     * Export this data so it can be used as the context for a mustache template.                                                   
     *                                                                                                                              
     * @return stdClass                                                                                                             
     */                                                                                                                             
    public function export_for_template(renderer_base $output) {

        $data = new stdClass();
        $data->element_id = $this->element_id;

        return $data;
    }
}
