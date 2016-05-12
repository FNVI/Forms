<?php

namespace FNVi\Forms\Schemas;
use FNVi\Mongo\Schema;
use FNVi\Mongo\Tools\Aggregate;
use FNVi\Forms\Schemas\Section;
/**
 * Represents a form in the application.
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Form extends Schema{
    
    public $sections;
    public $title;
    public $name;
    public $revision;
    public $created;
    public $author;
    public $peopleRquired = 1;
    public $signaturesRequired;
    public $minutes;
    public $groups;
    
    public function __construct($title, $name) {
        $this->title = $title;
        $this->name = $name;
        $this->revision = 0;
        $this->sections = [];
        $this->created = $this->timestamp();
        parent::__construct();
    }
    
    public function addSection(Section $section){
        $this->sections[] = $section;
    }
    
    public function getActivities(){
        $aggregate = new Aggregate($this->collection);
        return $aggregate->match(["_id"=>$this->_id])
                ->limit(1)
                ->unwind('$sections')
                ->unwind('$sections.activities')
                ->lookup("activities", "sections.activities._id", "_id", "sections.activities")
                ->execute();
    }
    
    public function store() {
        $this->revision++;
        parent::store();
    }
}
