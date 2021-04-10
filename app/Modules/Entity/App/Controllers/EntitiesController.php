<?php

namespace App\Modules\Entity\App\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Entity\Domain\Actions\EntityRegisteredAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EntitiesController extends Controller
{
    public function create()
    {
        return view('entities.create');
    }

    public function store(EntityRegisteredAction $entityRegisteredAction, Request $request)
    {
        $entityRegisteredAction($request->all());

        Session::flash('success', 'Entity Created');

        return Redirect::route('entities.create');
    }
}
