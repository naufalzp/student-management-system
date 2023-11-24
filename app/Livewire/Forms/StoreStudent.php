<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Form;

class StoreStudent extends Form
{
    #[Validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'image' => 'nullable|required|image',
        'section_id' => 'required',
    ], message: [
        'required' => 'The :attribute is missing.',
        'min' => 'The :attribute is too short.',
    ], attribute: [
        'name' => 'Name',
        'email' => 'Email',
        'image' => 'Image',
        'section_id' => 'Section',
    ])]
    public $name;
    public $email;
    public $image;
    public $section_id;

    public function store($class_id)
    {
        $student = Student::create(
            $this->all() + ['class_id' => $class_id],
        );
        // dd($student);
        $student->addMedia($this->image)->toMediaCollection();
    }
}
