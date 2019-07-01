<?php

namespace App\Http\Controllers;

use App\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function Symfony\Component\VarDumper\Dumper\esc;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sale::whereDate('created_at', Carbon::today())->get();
        if(count($data)){
            return redirect('/sales/'.$data[0]->id.'/edit');
        }else{
            return view('sales.index');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sale = new Sale([
            'total_sales' => (int) ($request->get('total_sales')),
            'costs' => (int) ($request->get('costs')),
            'profit' => (int) ($request->get('profit'))
        ]);
        $sale->save();
//
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit(Sale $sale)
    {
        return view('sales.edit',compact('sale'));
    }


    public function update(Sale $sale)
    {
        $sale->update($this->validateRequest());
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function validateRequest()
    {
        return request()->validate([
            'total_sales' => 'required|numeric',
            'costs' => 'required|numeric',
            'profit' => 'required|numeric'
        ]);
    }
}
