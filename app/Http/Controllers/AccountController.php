<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Account;
class AccountController extends Controller
{
    function addaccountview(){

    //     $tenant  = tenant::simplePaginate(3);
       $accounts =Account::paginate(5);
       return view('Account/view',compact('accounts'));
   
       }

    //    (account_salary+account_electricity+account_water+account_gas+account_service+account_tax+account_other)

       function addaccountinsert(Request $req){
        $req->validate([
            'account_balance'=>'required|string',
            'account_cost'=>'required|numeric',
            'account_salary'=>'required|numeric',
            'account_electricity'=>'required|numeric',
            'account_water'=>'required|numeric',
            'account_gas'=>'required|numeric',
            'account_service'=>'required|numeric',
            'account_tax'=>'required|numeric',
            'account_other'=>'required|numeric',
        ]);
        Account::insert([
            'account_date'=>$req->account_date,            
            'account_balance'=>$req->account_balance,
            'account_cost'=>$req->account_cost,
            'account_salary'=>$req->account_salary,
            'account_electricity'=>$req->account_electricity,
            'account_water'=>$req->account_water,
            'account_gas'=>$req->account_gas,
            'account_service'=>$req->account_service,
            'account_tax'=>$req->account_tax,
            'account_other'=>$req->account_other,
            
        ]);
        return back()->with('status','Account Infomation Inserted Successfully!');
       }


    //    function deleteaccount($account_id){
    //     Account::find ($account_id)->delete();
    //    return back()->with('deletestatus','Infomation Delete Successfully!');
    // }

    function deleteaccount($account_id){
       Account::find ($account_id)->delete();
       return back()->with('deletestatus','Account Infomation Deleted Successfully!');
    }








    function editaccount($account_id){
      
    $single_account_info=Account::findOrFail($account_id);             
    return view('account/edit',compact('single_account_info')); 

    }




    function editaccountinsert(Request $request)
    {
            Account::find($request->account_id)->update([
            'account_date'=>$request->account_date,                            
            'account_balance'=>$request->account_balance,
            'account_cost'=>$request->account_cost,
            'account_salary'=>$request->account_salary,
            'account_electricity'=>$request->account_electricity,
            'account_water'=>$request->account_water,
            'account_gas'=>$request->account_gas,
            'account_service'=>$request->account_service,
            'account_tax'=>$request->account_tax,
            'account_other'=>$request->account_other,
        ]);
        return back() ->with('status','Account Infomation Updated Successfully!');
       
     }




     
}
