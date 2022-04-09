<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\brand;
use App\Models\brandmodel;

class Brandmodeldropdown extends Component
{
    public $brand;
    public $brandmodel;
  
    public $Selectedbrands = NULL;

    public function mount()
    {
        $this->brand = brand::all();
        $this->brandmodel= collect();
    }



    public function render()
    {
        return view('livewire.brandmodeldropdown')->extends('layouts.appp');
    }

    public function updatedSelectedbrands($brand)
    {
        if (!is_null($brand)) {
            $this->brandmodel = brandmodel::where('brand_id', $brand)->get();
        }
    }




}
