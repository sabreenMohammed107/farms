<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use Illuminate\Database\QueryException;
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
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'email1' => 'nullable|email',
            'email2' => 'nullable|email',
        ], [
            'name.required' => 'حقل الاسم مطلوب',

            'address.required' => 'حقل العنوان مطلوب',
            'website.url' => 'حقل الموقع الالكتروني يجب ان يكون رابط',
            'email.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',
            'email1.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',
            'email2.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',

        ]);

       $max=Customer::orderBy("created_at", "Desc")->select('code')->first();



        if ($max) {
            $counter = (int)\Str::after($max['code'], '-') + 1;

            $max = 'co' . '-' . str_pad($counter, 2, '0', STR_PAD_LEFT);
        } else {
          $max = "co-01";
        }



        try
        {
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->code =  $max;
            $customer->address =  $request->address;
            $customer->city_id =  $request->city_id;
            $customer->phone = $request->phone;
            $customer->mobile =  $request->mobile;
            $customer->email =  $request->email;
            $customer->website =  $request->website;
            $customer->emp1 = $request->emp1;
            $customer->mobile1 =  $request->mobile1;
            $customer->email1 =  $request->email1;
            $customer->emp2 =  $request->emp2;
            $customer->mobile2 = $request->mobile2;
            $customer->email2 =  $request->email2;


            $customer->save();

            // $this->object::create($request->except('_token'));
            return redirect()->route($this->routeName . 'index')->with('flash_del','تم الحفظ بنجاح');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('flash_del', $e->getMessage());

            // return redirect()->back()->withInput()->with('flash_danger', 'حدث خطأ فى ادخال البيانات قم بمراجعتها مرة اخرى');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $customers = Customer::orderBy("created_at", "Desc")->get();

if($customers->count() > 0){
    $data = [
        'customers' => $customers,
        'Title' =>'تقرير العملاء',
        'Today' => date('Y-m-d'),


        'User'  =>  Auth::user(),
    ];
    $pdf = PDF::loadView('admin.customers.report', $data);
    $pdf->allow_charset_conversion = false;
    $pdf->autoScriptToLang = true;
    $pdf->autoLangToFont = true;
    return $pdf->stream('suppliers.pdf');
}else{
    return redirect()->route($this->routeName . 'index')->with('flash_del','لا توجد بيانات خاصه بالعملاء');

}



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Customer::where('id', $id)->first();
        $cities = City::orderBy("created_at", "Desc")->get();
        return view($this->viewName . 'edit', compact(['cities','row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'email1' => 'nullable|email',
            'email2' => 'nullable|email',
        ], [
            'name.required' => 'حقل الاسم مطلوب',

            'address.required' => 'حقل العنوان مطلوب',
            'website.url' => 'حقل الموقع الالكتروني يجب ان يكون رابط',
            'email.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',
            'email1.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',
            'email2.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',

        ]);


        try
        {
            $customer =Customer::where('id', $id)->first();
            $customer->name = $request->name;
            if($request->get('status')){

                $customer->status = '0' ;
                // dd($request->get('status'));
            }else{
                $customer->status = '1' ;
            }

            $customer->address =  $request->address;
            $customer->city_id =  $request->city_id;
            $customer->phone = $request->phone;
            $customer->mobile =  $request->mobile;
            $customer->email =  $request->email;
            $customer->website =  $request->website;
            $customer->emp1 = $request->emp1;
            $customer->mobile1 =  $request->mobile1;
            $customer->email1 =  $request->email1;
            $customer->emp2 =  $request->emp2;
            $customer->mobile2 = $request->mobile2;
            $customer->email2 =  $request->email2;


            $customer->save();

            // $this->object::create($request->except('_token'));
            return redirect()->route($this->routeName . 'index')->with('flash_del','تم التعديل بنجاح');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('flash_del', $e->getMessage());

            // return redirect()->back()->withInput()->with('flash_danger', 'حدث خطأ فى ادخال البيانات قم بمراجعتها مرة اخرى');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Customer::where('id', $id)->first();
        // Delete File ..

        try {

           $row->delete();
           return redirect()->back()->with('flash_del', 'تم الحذف بنجاح');

       } catch (QueryException $q) {
        Customer::findOrFail($id)->update([
            'status'=>1,
        ]);

           return redirect()->back()->withInput()->with('flash_del', 'تم تعديل بيانات العميل لغير فعال');
       }
    }
}
