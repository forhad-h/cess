<?php
namespace App\Http\Controllers;
use App\Customer;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\AddCustomer;
use App\Http\Requests\UpdateCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Image;

class CustomerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function all() {
        $allcustomer = DB::table('customers')
                ->where('customer_status', 1)
                ->orderBy('customer_id', 'DESC')
                ->get();
        $trashed_num = DB::table('customers')
                ->where('customer_status', 0)
                ->count();
        Session::put('trashed_num', $trashed_num);
        
        return view('customer.all', compact('allcustomer'));
    }
    
    public function all_trash() {
        $allcustomer = DB::table('customers')
                ->where('customer_status', 0)
                ->orderBy('delete_hierarchy', 'DESC')
                ->get();
        return view('customer.all-trash', compact('allcustomer'));
    }
    
    public function view($id) {
        //$id = $request->input('id');
        $customer = Customer::findOrFail($id);
        return view('customer.view', compact('customer'));
    }
    
    public function add() {
        return view('customer.add');
    }

    public function insert(AddCustomer $request) {
        $insert = DB::table('customers')->insertGetId([
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone,
            'customer_address' => $request->address,
            'customer_image' => '',
            'created_at' => \Carbon\Carbon::now('Asia/Dhaka')->toDateTimeString(),
        ]);
        $this->save_image($request, $insert);
        if($insert > 0) { return redirect('customer/add')->with('success', 'successful'); }
    }
    
        
    public function edit(Request $request) {
        $id = $request->input('id');
        $customer = DB::table('customers')
                ->where('customer_id', $id)
                ->first();
        if(!$customer) {
            echo "404 Not Found";
        }else {
            return view('customer.edit', compact('customer'));
        }
    }
    
    public function update(UpdateCustomer $request) {
        $id = $request->input('id');
        if($request->isChange() == TRUE) {
            $update = DB::table('customers')
                ->where('customer_id', $id)
                ->update([
                    "customer_name" => $request->name,
                    "customer_email" => $request->email,
                    "customer_phone" => $request->phone,
                    "customer_address" => $request->address,
                    "updated_at" => \Carbon\Carbon::now('Asia/Dhaka')->toDateTimeString(),
                ]);
        }else {
            $update = 0;
        }
        if($this->save_image($request, $id)) { $update = 1;}
        if($update > 0) { return redirect('customer/edit?id='.$id)->with('success', 'successful'); }
        else { return redirect('customer/edit?id='.$id)->with('error', 'error'); }
    }
    
    public function trash(Request $request) {
        $id = $request->input('id');
        $trash = DB::table('customers')
                ->where('customer_id', $id)
                ->update(
                [
                    "customer_status" => 0,
                    "delete_hierarchy" => time(),
                ]
            );
        if($trash) {
            return redirect('customer/all')->with('success', 'successful');
        }
    }
    
    public function restore(Request $request) {
        $id = $request->input('id');
        $restore = DB::table('customers')
                ->where('customer_id', $id)
                ->update(
                [
                    "customer_status" => 1,
                    "delete_hierarchy" => 0,
                ]
            );
        if($restore) {
            return redirect('customer/all-trash')->with('success-restore', 'successful');
        }
    }
    
    public function delete(Request $request) {
        $id = $request->input('id');
        $delete = DB::table('customers')
                ->where('customer_id', $id)
                ->delete();
        if($delete) {
            return redirect('customer/all-trash')->with('success-delete', 'successful');
        }
    }
    protected function save_image($request, $id) {
        if($request->hasFile('image') && $id > 0) {
            $image = $request->file('image');
            $image_name = 'customer-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            $saveImage = Image::make($image)->save(public_path('/content/uploads/').$image_name);
            if($saveImage){
               $add_img_url = DB::table('customers')->where('customer_id', $id)
                        ->update([
                           'customer_image' => $image_name,
                        ]);
               return $add_img_url;
            }
        }
    }
}
