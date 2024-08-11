<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutLink extends Component
{
    public function logout()
    {
        // Ejecuta el logout
        Auth::guard('web')->logout();

        // Invalida la sesión
        Session::invalidate();
        Session::regenerateToken();

        // Redirige al inicio
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.logout-link');
    }
}

