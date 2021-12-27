<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setup;
use Livewire\Component;
use Livewire\WithFileUploads;

class SetupComponent extends Component
{
    use WithFileUploads;

    public $logo, $cover, $imam, $teacher, $mosque, $madrasa, $locked, $login, $register, $setup;

    public $site_url, $admin, $site_name, $email, $phone, $location, $facebook, $twitter, $youtube, $about;

    public function mount()
    {
        $setting = Setup::first();
        if ($setting) {
            $setup = $setting;
            $this->setup = $setup;
            $this->site_url = $setup->site_url;
            $this->admin = $setup->admin;
            $this->site_name = $setup->site_name;
            $this->email = $setup->email;
            $this->phone = $setup->phone;
            $this->location = $setup->location;
            $this->facebook = $setup->facebook;
            $this->twitter = $setup->twitter;
            $this->youtube = $setup->youtube;
            $this->about = $setup->about;
        }

    }

    public function updateSetting()
    {
        $this->validate([
            'site_url' => 'url',
            'admin' => 'required',
            'email' => 'email',
            'phone' => 'numeric',
            'location' => 'nullable',
            'facebook' => 'url',
            'twitter' => 'url',
            'youtube' => 'url',
            'about' => 'nullable',
            'site_name' => ['required', 'min:4', 'max:222']

        ]);
        $setup = Setup::first();
        $setup->site_url = $this->site_url;
        $setup->admin = $this->admin;
        $setup->site_name = $this->site_name;
        $setup->email = $this->email;
        $setup->phone = $this->phone;
        $setup->location = $this->location;
        $setup->facebook = $this->facebook;
        $setup->twitter = $this->twitter;
        $setup->youtube = $this->youtube;
        $setup->about = $this->about;
        $setup->save();
        $this->alert('success', 'Successfully updated');
    }

    public function logo()
    {
        $this->validate([
            'logo'=>'required|image',
        ]);
        if (($this->logo)) {
            Setup::first()->clearMediaCollection('logo');
            Setup::first()->addMedia($this->logo->getRealPath())->toMediaCollection('logo');
            $this->alert('success', 'Logo successfully updated');
        }
    }
    public function cover()
    {
        $this->validate([
            'cover'=>'required|image',
        ]);
        if (($this->cover)) {
            Setup::first()->clearMediaCollection('cover');
            Setup::first()->addMedia($this->cover->getRealPath())->toMediaCollection('cover');
            $this->alert('success', 'Cover successfully updated');
        }
    }
    public function imam()
    {
        $this->validate([
            'imam'=>'required|image',
        ]);
        if (($this->imam)) {
            Setup::first()->clearMediaCollection('imam');
            Setup::first()->addMedia($this->imam->getRealPath())->toMediaCollection('imam');
            $this->alert('success', 'imam successfully updated');
        }
    }
    public function teacher()
    {
        $this->validate([
            'teacher'=>'required|image',
        ]);
        if (($this->teacher)) {
            Setup::first()->clearMediaCollection('teacher');
            Setup::first()->addMedia($this->teacher->getRealPath())->toMediaCollection('teacher');
            $this->alert('success', 'teacher successfully updated');
        }
    }
    public function mosque()
    {
        $this->validate([
            'mosque'=>'required|image',
        ]);
        if (($this->mosque)) {
            Setup::first()->clearMediaCollection('mosque');
            Setup::first()->addMedia($this->mosque->getRealPath())->toMediaCollection('mosque');
            $this->alert('success', 'mosque successfully updated');
        }
    }
    public function madrasa()
    {
        $this->validate([
            'madrasa'=>'required|image',
        ]);
        if (($this->madrasa)) {
            Setup::first()->clearMediaCollection('madrasa');
            Setup::first()->addMedia($this->madrasa->getRealPath())->toMediaCollection('madrasa');
            $this->alert('success', 'madrasa successfully updated');
        }
    }
    public function locked()
    {
        $this->validate([
            'locked'=>'required|image',
        ]);
        if (($this->locked)) {
            Setup::first()->clearMediaCollection('locked');
            Setup::first()->addMedia($this->locked->getRealPath())->toMediaCollection('locked');
            $this->alert('success', 'locked successfully updated');
        }
    }
    public function login()
    {
        $this->validate([
            'login'=>'required|image',
        ]);
        if (($this->login)) {
            Setup::first()->clearMediaCollection('login');
            Setup::first()->addMedia($this->login->getRealPath())->toMediaCollection('login');
            $this->alert('success', 'login successfully updated');
        }
    }
    public function register()
    {
        $this->validate([
            'register'=>'required|image',
        ]);
        if (($this->register)) {
            Setup::first()->clearMediaCollection('register');
            Setup::first()->addMedia($this->register->getRealPath())->toMediaCollection('register');
            $this->alert('success', 'register successfully updated');
        }
    }
    public function render()
    {
        return view('livewire.admin.setup-component')->layout('layouts.app');
    }
}
