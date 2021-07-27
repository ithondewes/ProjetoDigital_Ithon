<?php

namespace ProjetoDigital\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dangerResponse($message)
    {
        $this->alert($message, 'danger');

        return back();
    }

    public function alert($message, $class = 'success', $name = 'status')
    {
        session()->flash($name, $message);
        session()->flash('class', $class);
    }
}
