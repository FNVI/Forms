<?php

namespace FNVi\Forms\Schemas;
use FNVi\Mongo\Schema;
/**
 * Represents a form in the application.
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Form extends Schema{
    
    public $sections;
    public $title;
    public $discipline;
    public $name;
    
    public function __construct($title, $name) {
        $this->title = $title;
        $this->name = $name;
        parent::__construct();
    }
    
    public function addSection(){
        
    }
    
}
