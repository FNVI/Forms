<?php
namespace FNVi\Forms\Schemas\Inputs;
use FNVi\Forms\Schemas\Input;

/**
 * Description of MultipleChoiceInput
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class RadioInput extends Input {
    
    public $value = [];
    
    public function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
        $this->type = "radio";
        parent::__construct();
    }
}
