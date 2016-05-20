<?php
namespace FNVi\Forms\Schemas;
use FNVi\Mongo\SubDocument;

/**
 * Represents a section on a Form
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */

class Section extends SubDocument{
    
    public $title = "";
    public $caption;
    public $activities = [];
    public $type;
    public $groups;
    
    /**
     * The constructor optionally sets the title of the section, as well as the activities
     * 
     * @param string $title
     * @param array $activities
     */
    public function __construct($title = "", array $activities = []) {
        $this->title = $title;
        $this->activities = $activities;
    }
    
}
