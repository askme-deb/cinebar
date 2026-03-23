<?php

namespace App\Livewire\Pages\Company;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    protected $layout = 'layouts.app';
    public $companyId;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $website;
    public $description;
    public $logo_path;
    public $gst;
    public $pan;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'website' => 'nullable|url',
        'description' => 'nullable|string',
        'logo_path' => 'nullable|string',
        'gst' => 'nullable|string|max:20',
        'pan' => 'nullable|string|max:20',
    ];

    public function mount($companyId = null)
    {
        if ($companyId) {
            $company = Company::findOrFail($companyId);
            $this->companyId = $company->id;
            $this->name = $company->name;
            $this->email = $company->email;
            $this->phone = $company->phone;
            $this->address = $company->address;
            $this->website = $company->website;
            $this->description = $company->description;
            $this->logo_path = $company->logo_path;
            $this->gst = $company->gst;
            $this->pan = $company->pan;
        }
    }

    public function save()
    {
        $this->validate();
        $data = [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'website' => $this->website,
            'description' => $this->description,
            'logo_path' => $this->logo_path,
            'gst' => $this->gst,
            'pan' => $this->pan,
        ];
        if ($this->companyId) {
            Company::where('id', $this->companyId)->update($data);
        } else {
            Company::create($data);
        }
        session()->flash('status', 'Company profile saved successfully!');
        return redirect()->route('company.index');
    }

    public function render()
    {
        return view('livewire.pages.company.form')
            ->layout('layouts.app');
    }
}
