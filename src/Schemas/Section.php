<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FNVi\Forms\Schemas;
use FNVi\Mongo\Schema;
/**
 * Description of Section
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Section extends Schema{
    
    public $title = "";
    public $caption;
    public $activities = [];
    public $type;
    public $groups;
    
    public function __construct($title = "", $activities = []) {
        $this->title = $title;
        $this->activities = $activities;
        parent::__construct();
    }
    
}
