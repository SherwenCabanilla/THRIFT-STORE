<?php

namespace App\Http\Controllers;

use App\Models\SetDateModel;
use Illuminate\Http\Request;


class SetDateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('pages.setDate', ['getDate' => SetDateModel::getButang()]);
    }


    public function delete($id)
    {
        $product = SetDateModel::find($id);
        $product->delete();
        return redirect()->route('setDate.index')->with('success', 'Member deleted successfully');
    }

    public function setButang(Request $request)
    {
        $request->validate([
            'date' => 'required|filled|date'
        ]);
        // dd($request->input('date'));
        SetDateModel::create($request->all());
        return redirect()->route('setDate.index')->with('success', 'Butang data created successfully');
    }
}
