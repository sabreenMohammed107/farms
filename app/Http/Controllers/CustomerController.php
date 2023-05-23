<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;

class CustomerController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Customer $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.customers.';
        $this->routeName = 'customers.';
    }
    public function index()
    {
        $rows = Customer::orderBy("created_at", "Desc")->get();

        return view($this->viewName . 'index', compact(['rows']));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::orderBy("created_at", "Desc")->get();
        return view($this->viewName . 'add', compact(['cities']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $customers = Customer::orderBy("created_at", "Desc")->get();

        $Company=Customer::where('id',1)->first();
        $data = [
            'customers' => $customers,
            'Title' =>'تقرير العملاء',
            'Today' => date('Y-m-d'),
            'Logo'  => $Company->company_logo,
            'Company' => $Company,
            'User'  =>  Auth::user(),
        ];
        $pdf = PDF::loadView('admin.customers.report', $data);
        $pdf->allow_charset_conversion = false;
        $pdf->autoScriptToLang = true;
        $pdf->autoLangToFont = true;
        return $pdf->stream('suppliers.pdf');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
