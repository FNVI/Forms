<?php
namespace FNVi\Forms\Schemas\Inputs;
use FNVi\Forms\Schemas\Input;
/**
 * Description of NumberInput
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class NumberInput extends Input {
    
    public $unit;
    
    public function __construct($name, $unit = null) {
        $this->type = "number";
        $this->name = $name;
        $this->unit = $unit;
        parent::__construct();
    }
}
