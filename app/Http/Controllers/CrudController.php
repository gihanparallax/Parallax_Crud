<?php

/**
 * This controller used for manage CRUD operations in the system
 *
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crudoperation;
use App\Http\Requests\CreateUnitRequest;

class CrudController extends Controller
{
    /**
     * Display index page
     *
     *
     */

     public function index()
    {
        $show_details = Crudoperation::orderBy('id','DESC')->get();
        return view('unit.index', compact('show_details'));
    }


    /**
     * Display table data in API view
     *
     *
     */

    public function showapiData()
    {
        $show_data = Crudoperation::all();
        return response()->json($show_data);
    }


    /**
     * Store added data using form
     *
     *
     */
    public function store(CreateUnitRequest $request)
    {


        $units=new Crudoperation;
        $units->actual_name=$request->input('actual_name');
        $units->short_name=$request->input('short_name');
        $units->allow_decimal=$request->input('allow_decimal');

        $units->save();


       if($units){
            return redirect()->route('unit.index')->with('success','Unit successfully added');
        }
        else{
            return back()->with('error','Something went wrong!');
        }

    }


    /**
     * Update the edited data
     *
     *
     */
    public function update(Request $request, $id)
    {
        $units = Crudoperation::find($id);

        if ($units) {
            $this->validate($request, [
                'actual_name' => 'string|required',
                'short_name' => 'string|required',
                'allow_decimal' => 'numeric|required',
            ]);

            $units->actual_name = $request->input('actual_name');
            $units->short_name = $request->input('short_name');
            $units->allow_decimal = $request->input('allow_decimal');
            $units->save();

            if($units){
                return redirect()->route('unit.index')->with('success', 'Unit successfully updated');
            }
            else{
                return back()->with('error', 'Something went wrong!');
            }

        }
    }

    /**
     * Remove the selected data in table
     *
     *
     */
    public function destroy($id)
    {
        $units = Crudoperation::find($id);

        if ($units) {
            $status = $units->delete();
            if($status) {
                return redirect()->route('unit.index')->with('success', 'Product successfully deleted');
            }else{
                return back()->with('error', 'Something went wrong');
            }
        }
        else{
            return back()->with('error', 'Data not found');
        }
    }
}

