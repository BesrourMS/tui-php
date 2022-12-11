<?php 

namespace besrourms\Matricule;

class TUI {

    const alphabet = 'ABCDEFGHJKLMNPQRSTVWXYZ';

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function isValid() {
        $regex = '/[0-9]{7}[A-Z]/';

        if (!preg_match($regex, $this->value)) return false;

		$array = str_split(substr($this->value, 0, -1), 1);

		$index = -1;

        $ctrlKey = array_reduce($array, function($prevResult, $currentValue) use (&$index, &$array) {
            $index++;
			return $prevResult + $currentValue * (count($array) - $index);
        }, 0) % 23;

        return substr($this->value, -1) == str_split(self::alphabet)[$ctrlKey];
    }

}
