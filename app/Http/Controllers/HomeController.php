<?php

namespace App\Http\Controllers;

use App\Models\Consignment;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    private $consignment;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Consignment $consignment)
    {
        $this->consignment = $consignment;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $consignments = $this->consignment->paginate(15);
        return view('consignment.index')->with('consignments',$consignments);
    }

    public function addConsignmentPage()
    {
        return view('consignment.create');   
    }

    public function storeConsignment(Request $request){
        $request->validate([
            'company' => 'required|max:255',
            'contact' => 'required|max:255',
            'addressline1' => 'required|max:255',
            'addressline2' => 'required|max:255',
            'addressline3' => 'required|max:255',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
        ]);

        $input = $request->all();
        $this->consignment->create($input);
        return redirect()->route('home')->with('status','Consignment created successfully!');
    }


    public function download($id)
    {
        $id = decrypt($id);
        
        $consignment = $this->consignment->findOrFail($id);

        $pdf = PDF::loadView('pdfs.consignment', ['consignment' => $consignment]);

        return $pdf->download('consignment.pdf');
    }
}
