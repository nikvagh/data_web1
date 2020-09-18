<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function product(){
        $data['title'] = 'Products';
        return view('admin.product_list')->with($data);
    }

    public function product_data(){
        $builder = Product::query()->select('*');

        return datatables()->eloquent($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        //   })
                        //   ->editColumn('created_at', function ($user) {
                        //       return date('Y-m-d h:i:s',strtotime($user->created_at));
                        //   })
                        ->addColumn('action', function ($product) {
                            return '<a href="'.url('/admin/product/edit/').'/'.$product->id.'" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="'.url('/admin/product/delete/').'/'.$product->id.'" class="btn btn-sm btn-danger">Delete</a>';
                        })
                        //   ->rawColumns([1,2])
                          ->make();
    }

    public function add(){
        $data['title'] = 'Products';
        return view('admin.product_add')->with($data);
    }

    public function store(request $request){
        $request->validate([
            'name' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        $product = Product::create(['name' => $request->name,'amount' => $request->amount]);
        
        $request->session()->flash('message_s','Product created Successfully!');
        return redirect('admin/product');
    }

    public function edit($id){
        $data['title'] = 'Products';
        $data['form_data'] = Product::where('id', $id)->first();
        // return view('admin.product_edit',compact('data',$data));
        return view('admin.product_edit')->with($data);
    }

    public function update($id,request $request){
        // echo $id;
        // echo "<pre>";
        // print_r($request->all());
        // exit;

        $request->validate([
            'name' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        $product = Product::where('id',$id)
                    ->update(['name' => $request->name,'amount' => $request->amount]);
        
        $request->session()->flash('message_s','Product updated Successfully!');
        return redirect('admin/product');
    }

    public function delete($id,request $request){
        Product::where('id',$id)->delete();
        $request->session()->flash('message_s','Product deleted Successfully!');
        return redirect('admin/product');
    }

}
