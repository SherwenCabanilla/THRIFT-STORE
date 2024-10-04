<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.members', [
            'data' => MemberModel::getData()
        ]);
    }

    public function dashBoard()
    {
        return view('home', ['totalMember' => MemberModel::getMember()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'dependent' => 'required|numeric',
            'warning' => 'required|numeric',
        ]);
        MemberModel::create($request->all());
        return redirect()->route('members.index')->with('success', 'New member added successfully');
    }




    public function destroy($id)
    {
        $product = MemberModel::find($id);
        $product->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully');
    }





    public function update(Request $request)
    {
        // Validate the request data as needed
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'dependent' => 'required|numeric',
            'warning' => 'required|numeric',
        ]);

        #get id from form request
        $id = $request->input('member_id');

        # Find the member based on the $id
        $mem = MemberModel::find($id);

        # Update the member data
        $mem->update([
            'lastname' => $request->input('lastname'),
            'firstname' => $request->input('firstname'),
            'dependent' => $request->input('dependent'),
            'warning' => $request->input('warning')
        ]);


        return redirect()->route('members.index')->with('success', 'Member updated successfully');
    }
}
