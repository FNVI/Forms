<?php

namespace FNVi\Forms\Schemas;
use FNVi\Mongo\Schema;

/**
 * Represents an activity document from the database
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Activity extends Schema{
    
    public $description = "";
    public $service = [];
    public $inputs = [];
    public $repeating;
    
    /**
     * 
     * @param string $description
     * @param array $inputs
     */
    public function __construct($description,array $inputs = []) {
        $this->description = $description;
        $this->inputs = $inputs;
        parent::__construct("activities");
    }
    
}
