<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GeneralAssemblies\GeneralAssembly;

class Passcode extends Component
{
    /**
     * Returns the passcode.
     */
    public function getPasscodeProperty()
    {
        return app(GeneralAssembly::class)->getTemporaryPasscode();
    }

    /**
     * View to render the passcode.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('student-council.general-assemblies.passcode');
    }
}
