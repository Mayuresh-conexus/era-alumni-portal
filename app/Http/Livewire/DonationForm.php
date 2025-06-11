<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;

class DonationForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $name, $email, $amount, $message;

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            Forms\Components\TextInput::make('amount')->numeric()->required(),
        ];
    }

    public function submit()
    {
        $data = $this->form->getState();

        // Save donation or trigger payment logic
        // Donation::create([...]);

        session()->flash('success', 'Thanks for your donation!');
    }

    public function render()
    {
        return view('livewire.donation-form');
    }
}

