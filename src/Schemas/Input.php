<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FNVi\Forms\Schemas;
use FNVi\Mongo\Document;
/**
 * Description of Input
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Input extends Document {
    public $type;
    public $name;
}
