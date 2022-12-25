<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{

    public string $email = '';
    public string $password = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $role = 'customer';
    public string $company_name = '';
    public string $vat_number = '';

    protected $rules = [
        'first_name' => ['required', 'min:2'],
        'last_name' => ['required', 'min:2'],
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6'],
        'company_name' => ['required_if:role,vendor'],
        'vat_number' => ['required_if:role,vendor'],
    ];


    public function render()
    {
        return view('livewire.register');
    }


    public function submit()
    {
        $this->validate();

        session()->flash('message', 'Customer created successfully');

        $this->email = '';
        $this->password = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->role = 'customer';
        $this->company_name = '';
        $this->vat_number = '';
    }

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
    }
}
