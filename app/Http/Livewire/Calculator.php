<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{

    public $num1 = 0;
    public $num2 = 0;
    public $result = 0;
    public $operatoin = '+';

    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }


    public function calculate()
    {
        $num1 = (float)$this->num1;
        $num2 = (float)$this->num2;

        if($this->operatoin === '-'){
            $this->result = $num1 - $num2;
        } else if ($this->operatoin === '+') {
            $this->result = $num1 + $num2;
        } else if ($this->operatoin === '*') {
            $this->result = $num1 * $num2;
        } else if ($this->operatoin === '/') {
            $this->result = $num1 / $num2;
        } else if ($this->operatoin === '%') {
            $this->result = $num1 /100 * $num2;
        }
    }

    public function update(string $opera)
    {

        if($this->num1 == '' | $this->num2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}
