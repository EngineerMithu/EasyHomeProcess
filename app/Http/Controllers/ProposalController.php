<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
class ProposalController extends Controller
{

//////view//////
function addproposalview(){

        $proposals = Proposal::paginate(4);
        return view('Proposal/view',compact('proposals'));
        //    return view('Proposal/view');


}



/////insert/////
function addproposalinsert(Request $request){

        Proposal::insert([
        'tenant_facilities' =>$request->tenant_facilities,
        'tenant_agreem' =>$request->tenant_agreem,
        'tenant_agree' =>$request->tenant_agree,
        ]);

return back()->with('status','Tenant Proposal Added Successfully!');

}







//////delete////
function deleteproposal($proposal_id){
Proposal::find ($proposal_id)->delete();
return back()->with('deletestatus','Tenant Proposal Delete Successfully!');
}



/////edit/////
function editproposal($proposal_id){

$single_proposal_info=Proposal::findOrFail($proposal_id);             
return view('proposal/edit',compact('single_proposal_info')); 

}








function editproposalinsert(Request $request)
{
    Proposal::find($request->proposal_id)->update([

        'tenant_facilities' =>$request->tenant_facilities,
        'tenant_agreem' =>$request->tenant_agreem,
        'tenant_agree' =>$request->tenant_agree,
        
        
    ]);
    return back() ->with('editstatus','Proposal Infomation Edited Successfully!');
    
    }





}
