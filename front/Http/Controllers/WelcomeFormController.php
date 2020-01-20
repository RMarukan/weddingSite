<?php

namespace Front\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;

class WelcomeFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('front.welcomeForm', ['attribute' => Attribute::where('attributeId',$id)->first()]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }
}
