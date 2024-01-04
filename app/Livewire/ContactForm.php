<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $telephone;
    public $message;
    public $postal_code;

    //valiadtion rules
    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'telephone' => 'required|min:8',
        'message' => 'required|min:2',
        'postal_code' => 'required|min:6',
    ];

    public function save()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        // Persist the post.
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->telephone;
        $contact->message = $this->message;
        $contact->postal_code = $this->postal_code;
        $contact->save();

        // Redirect to the post page with a success flash
        return redirect()->route('home')->with('message', 'Message sent successfully!');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
