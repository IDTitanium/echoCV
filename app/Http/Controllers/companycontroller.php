<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Countries;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = company::all();

        //return view('add_company.index');
        return view('portfolio_company.add_company', compact('add_company'));
        //
    }

    /**
     * Show the form to create the company resource
     * 
     * @return \just the blade view
     * */

    public function create()
    {
        $company = Company::all();
        $contacts = Contact::all();

        return view('portfolio_company.add_company', [
            'company' => $company,
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'c_name' => 'required',
            'website' => 'required',
            'country' => 'required',
            'contact_id' => 'required',
            'status' => 'required',
            'stage' => 'required',
            'lead' => 'required',
            'analyst' => 'required',

        ]);

        $company_name = $request->get('c_name');
        $website = $request->get('website');
        $country = $request->get('country');
        $contact_id = $request->get('contact_id');
        $user_id = Auth::user()->id;
        $status = $request->get('status');
        $stage = $request->get('stage');
        $lead = $request->get('lead');
        $analyst = $request->get('analyst');


        $company = Company::create([
            'c_name' => $company_name,
            'website' => $website,
            'user_id' => $user_id,
            'country' => $country,
            'contact_id' => $contact_id,
            'status' => $status,
            'stage' => $stage,
            'lead' => $lead,
            'analyst' => $analyst,
            // $contact->fname =$request->input('fname');

        ]);

        return redirect('add_company')->with('success', 'Company details saved!');
        return $request->all();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $company = Company::getAllCompanydata();
        if (count($company) > 0)
        {
            return view('portfolio_company.company_list', ['companyData' => $company]);
        }
        else
        {
            return view ('portfolio_company.company_list');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
