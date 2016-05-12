<?php

namespace FNVi\Forms\Schemas;
use FNVi\Mongo\SubDocument;

/**
 * Represents an activity document from the database
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Activity extends SubDocument{
    
    public $description = "";
    public $service = [];
    public $inputs = [];
    public $repeating;
    public $minutes = 1;
    public $groups;
    
    /**
     * 
     * @param string $description
     * @param array $inputs
     */
    public function __construct($description, array $inputs = []) {
        $this->description = $description;
        $this->inputs = $inputs;
        parent::__construct();
    }
    
}
