<?php

namespace App\Livewire;

use App\Models\Offers;
use Livewire\Component;
use Livewire\WithFileUploads;

class SellForm extends Component
{
    use WithFileUploads;
    public $photos = [];
    public $model;
    public $brand;
    public $year;
    public $fuel;
    public $transmission;
    public $mileage;
    public $availability;
    public $price;
    public $extra_info;
    public $name;
    public $email;
    public $telephone;
    public $postal_code;

    //valiadtion rules
    protected $rules = [
        'model' => 'required|min:2',
        'brand' => 'required|min:2',
        'year' => 'required|numeric|min:4',
        'fuel' => 'required:min:2',
        'transmission' => 'required:min:2',
        'mileage' => 'required|numeric|min:1',
        'availability' => 'required|min:2',
        'price' => 'required|numeric|min:1',
        'extra_info' => '',
        'name' => 'required|min:2',
        'email' => 'required|email',
        'telephone' => 'required|min:8',
        'postal_code' => 'required|min:6',
        // photos are required
        'photos.*' => 'required|image|max:1024',
    ];

    public function removePhoto($index)
    {
        unset($this->photos[$index]);
    }

    public function storeImages()
    {
        $images = [];
        foreach ($this->photos as $photo) {
            $images[] = $photo->store('images', 'public');
        }
        return $images;
    }
    public function save()
    {
        // if not valdated set error message in session flashas error
        $this->validate();
        // store images in storage disk public folder
        $this->photos = $this->storeImages();
        // create new offer
        Offers::create([
            'model' => $this->model,
            'brand' => $this->brand,
            'year' => $this->year,
            'fuel' => $this->fuel,
            'transmission' => $this->transmission,
            'mileage' => $this->mileage,
            'availability' => $this->availability,
            'price' => $this->price,
            'extra_info' => $this->extra_info,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->telephone,
            'postal_code' => $this->postal_code,
            'photos' => $this->photos,
        ]);
        // set success message in session flash
        session()->flash('message', 'Your offer has been submitted successfully!');
        // reset form fields
        $this->reset();

        redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.sell-form', [
            'photos' => $this->photos,
        ]);
    }
}
