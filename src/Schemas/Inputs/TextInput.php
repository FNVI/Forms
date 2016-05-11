<?php
namespace FNVi\Forms\Schemas\Inputs;

use FNVi\Forms\Schemas\Input;
/**
 * Description of TextInput
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class TextInput extends Input{
    
    public function __construct($name) {
        $this->name = $name;
        $this->type = "text";
        parent::__construct();
    }
}
