<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Investmentplan;
use App\Models\Faq;
use Illuminate\Support\Facades\Mail;
use App\Mail\Adminmail;
use App\Models\Feature;


class VisitorController extends Controller
{

   public $owneremail ="forexa0001@gmail.com";
    //
 

public function about()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="about";
    return view ("visitors.about", $data);
}


public function blog()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="blog";
    return view ("visitors.blog", $data);
}


public function brochure()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="brochure";
    return view ("visitors.brochure", $data);
}


public function companyvideo()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="companyvideo";
    return view ("visitors.companyvideo", $data);
}


public function contact()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="contact";
    return view ("visitors.contact", $data);
}


public function faq()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="faq";
    return view ("visitors.faq", $data);
}


public function index()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="index";
    return view ("visitors.index", $data);
}


public function invest()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="invest";
    return view ("visitors.invest", $data);
}


public function testimony()
{
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data=[];
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;
    $data['title']="testimony";
    return view ("visitors.testimony", $data);
}

public function postcontact(Request $request)
{   # code...
    $name = $request->name;
    $email = $request->email;
    $message = $request->message;
    $domain = request()->getHost();
    $email = "topedgeglobalinvestment@gmail.com";
    $mailtitle = "contact message from $name";
$emaildata=['data'=> $email,'email_body'=>$message,'email_header'=>$mailtitle];

Mail::to($email)->send(new Adminmail($emaildata));

    $company_detail = Sitesetting::where('id', 1)->first();

$data=[];
$data['company_detail'] = $company_detail;
$data['title']="About Us";
    return redirect()->route("contact")->with("success","message sent, we will respond to you as soon as we can");
}


}
