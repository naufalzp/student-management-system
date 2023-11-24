<?php

namespace App\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.student.index', [
            'students' => Student::paginate(10)
        ]);
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect()->route('students.index')
            ->with('status', 'Student successfully deleted.');
    }
}
