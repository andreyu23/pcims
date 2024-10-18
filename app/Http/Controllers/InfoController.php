<?php

namespace App\Http\Controllers;
use App\Models\InfoModel;
use App\Models\PrenatalModel;
use App\Models\LabResultModel;
use App\Models\CovidModel;
use App\Models\DentalModel;
use App\Models\FamilyModel;
use App\Models\HealthOfficeModel;
use App\Models\LaborModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public static function index(){
        $info = InfoModel::get();
        return view('pages.information.index')->with(['info' => $info]);
    }

    public static function registration(){
        $info = InfoModel::get();
        return view('pages.information.registration')->with(['info' => $info]);
    }

    public static function details(){
        $info = InfoModel::get();
        return view('pages.patients.details')->with(['info' => $info]);
    }

    public static function store(Request $request){
        // Validate the request
        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_address' => 'required|string|max:255',
            'inp_civil_status' => 'required|string|max:255',
            'inp_religion' => 'required|string|max:255',
            'inp_philhealth' => 'required|string|max:255',
            'inp_philhealth_num' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_bloodtype' => 'required|string|max:255',
            'inp_birthdate' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:255',
            'inp_contact_num' => 'required|string|max:255',
            'inp_gavida' => 'required|string|max:255',
            'inp_term' => 'required|string|max:255',
            'inp_preterm' => 'required|string|max:255',
            'inp_abortion' => 'required|string|max:255',
            'inp_live' => 'required|string|max:255',
        ]);

        InfoModel::create([
            'info_name' => $request->inp_name,
            'info_address' => $request->inp_address,
            'info_civil_status' => $request->inp_civil_status,
            'info_religion' => $request->inp_religion,
            'info_philhealth' => $request->inp_philhealth,
            'info_philhealth_num' => $request->inp_philhealth_num,
            'info_age' => $request->inp_age,
            'info_bloodtype' => $request->inp_bloodtype,
            'info_birthdate' => $request->inp_birthdate,
            'info_weight' => $request->inp_weight,
            'info_contact_num' => $request->inp_contact_num,
            'info_gavida' => $request->inp_gavida,
            'info_term' => $request->inp_term,
            'info_preterm' => $request->inp_preterm,
            'info_abortion' => $request->inp_abortion,
            'info_live' => $request->inp_live,

        ]);

        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }
    public static function prenatalindex()
    {
        $info = PrenatalModel::get();
        return view('pages.patients.prenatalvisit')->with(['info' => $info]);
    }

    public static function prenatalstore(Request $request)
    {
        $request->validate([
            'inp_trimester' => 'required|string|max:255',
            'inp_dov' => 'required|date|max:55',
            'inp_aim' => 'required|string|max:255',
            'inp_bp' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:55',
            'inp_presentation' => 'required|string|max:255',
            'inp_fhb' => 'required|string|max:255',
            'inp_fh' => 'required|string|max:255',
            'inp_fever' => 'required|string|max:255',
            'inp_edema' => 'required|string|max:255',
            'inp_vb' => 'required|string|max:255',
            'inp_pal' => 'required|string|max:255',
            'inp_ltr' => 'required|string|max:255',
            'inp_sgat' => 'required|string|max:255',
            'inp_fsfa' => 'required|string|max:255',
            'inp_cc' => 'required|string|max:255',


        ]);

        PrenatalModel::create([
            'prenatal_trimester' => $request->inp_trimester,
            'prenatal_date_of_visit' => $request->inp_dov,
            'prenatal_age_in_months' => $request->inp_aim,
            'prenatal_AOG' => $request->inp_aog,
            'prenatal_blood_pressure' => $request->inp_bp,
            'prenatal_weight' => $request->inp_weight,
            'prenatal_presentation' => $request->inp_presentation,
            'prenatal_FHB' => $request->inp_fhb,
            'prenatal_fundal_height' => $request->inp_fh,
            'prenatal_fever' => $request->inp_fever,
            'prenatal_edema' => $request->inp_edema,
            'prenatal_vaginal_bleeding' => $request->inp_vb,
            'prenatal_pallor' => $request->inp_pal,
            'prenatal_lab_test_res' => $request->inp_ltr,
            'prenatal_service_given' => $request->inp_sgat,
            'prenatal_sulfate_folic' => $request->inp_fsfa,
            'prenatal_calcium_carbon' => $request->inp_cc,

        ]);

        return redirect()->back()->with('success', 'Pre-natal Visits submitted successfully!');
    }


    public static function labindex()
    {
        $info= LabResultModel::get();
        return view('pages.patients.labresult')->with(['info' => $info]);
    }

    public static function labstore(Request $request)
    {
        $request->validate([
            'inp_cbc' => 'required|string|max:255',
            'inp_urine' => 'required|string|max:255',
            'inp_ultra' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',

        ]);

        LabResultModel::create([
            'lab_cbc' => $request->inp_cbc,
            'lab_urine' => $request->inp_urine,
            'lab_ultrasound' => $request->inp_ultra,
            'lab_others' => $request->inp_others,



        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }


    public static function covidindex()
    {
        $covid = CovidModel::get();
        return view('pages.patients.covid')->with(['covid' => $covid]);
    }

    public static function covidstore(Request $request)
    {
        $request->validate([
            'inp_vaccine' => 'required|string|max:255',
            'inp_dose' => 'required|string|max:255',
            'inp_boost' => 'required|string|max:255',
            'inp_add_boost' => 'required|string|max:255',

        ]);

        CovidModel::create([
            'covid_vaccine' => $request->inp_vaccine,
            'covid_dose' => $request->inp_dose,
            'covid_booster' => $request->inp_boost,
            'covid_add_booster' => $request->inp_add_boost,



        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function dentalindex()
    {
        $dental = DentalModel::get();
        return view('pages.patients.dental')->with(['dental' => $dental]);
    }

    public static function dentalstore(Request $request)
    {
        $request->validate([
            'inp_check' => 'required|string|max:255',
            'inp_caries' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
            'inp_mm' => 'required|string|max:255',
            'inp_others_prob' => 'required|string|max:255',
            'inp_at' => 'required|string|max:255',
            'inp_ref_to' => 'required|string|max:255',
            'inp_nosf' => 'required|string|max:255',
            'inp_dof' => 'required|string|max:255',
            'inp_wt' => 'required|string|max:255',
            'inp_remarks' => 'required|string|max:255',


        ]);

        DentalModel::create([
            'dental_check' => $request->inp_check,
            'dental_caries'=> $request->inp_caries,
            'dental_others'=> $request->inp_others,
            'dental_malnourish'=> $request->inp_mm,
            'dental_other_problem'=> $request->inp_others_prob,
            'dental_action'=> $request->inp_at,
            'dental_refer'=> $request->inp_ref_to,
            'dental_food'=> $request->inp_nosf,
            'dental_days'=> $request->inp_dof,
            'dental_wt'=> $request->inp_wt,
            'dental_remarks'=> $request->inp_remarks,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function famindex()
    {
        $family = FamilyModel::get();
        return view('pages.patients.familyplanning')->with(['family' => $family]);
    }

    public static function famstore(Request $request)
    {
        $request->validate([
            'inp_date' => 'required|date|max:255',
            'inp_moc' => 'required|string|max:255',
            'inp_remarks' => 'required|string|max:255',

        ]);

        FamilyModel::create([
            'family_date' => $request->inp_date,
            'family_method' => $request->inp_moc,
            'family_remarks' => $request->inp_remarks,



        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }


    public static function healthoffice_index()
    {
        $health = HealthOfficeModel::get();
        return view('pages.patients.healthoffice')->with(['health' => $health]);
    }

    public static function healthoffice_store(Request $request)
    {
        $request->validate([
            'inp_brngy' => 'required|string|max:255',
            'inp_municipality' => 'required|string|max:255',
            'inp_prov' => 'required|string|max:255',
            'inp_ref' => 'required|string|max:255',
            'inp_nom' => 'required|string|max:255',
            'inp_dsa' => 'required|string|max:255',
            'inp_bemoc' => 'required|string|max:255',
            'inp_bemoc_add' => 'required|string|max:255',
            'inp_cemoc' => 'required|string|max:255',
            'inp_cemoc_add' => 'required|string|max:255',

        ]);

        HealthOfficeModel::create([
            'ho_barangay' => $request->inp_brngy,
            'ho_municipality' => $request->inp_municipality,
            'ho_province' => $request->inp_prov,
            'ho_ref_unit' => $request->inp_ref,
            'ho_mw_name' => $request->inp_nom,
            'ho_duty_station' => $request->inp_dsa,
            'ho_bemoc' => $request->inp_bemoc,
            'ho_bemoc_add' => $request->inp_bemoc_add,
            'ho_cemoc' => $request->inp_cemoc,
            'ho_cemoc_add' => $request->inp_cemoc_add,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function laborindex()
    {
        $labor = LaborModel::get();
        return view('pages.patients.labor')->with(['labor' => $labor]);
    }

    public static function laborstore(Request $request)
    {
        $request->validate([
            'inp_dod' => 'required|date|max:255',
            'inp_tod' => 'required|string|max:255',
            'inp_pod' => 'required|string|max:255',
            'inp_bod' => 'required|string|max:255',
            'inp_bbw' => 'required|string|max:255',
            'inp_lb' => 'required|string|max:255',
            'inp_gender' => 'required|string|max:255',
            'inp_hb' => 'required|string|max:255',
            'inp_pph' => 'required|string|max:255',

        ]);

        LaborModel::create([
            'lad_date_delivery' =>$request->inp_dod,
            'lad_type_delivery' =>$request->inp_tod,
            'lad_place_delivery' =>$request->inp_pod,
            'lad_birth_delivery' =>$request->inp_bod,
            'lad_birth_weight' =>$request->inp_bbw,
            'lad_live_birth' =>$request->inp_lb,
            'lad_gender' =>$request->inp_gender,
            'lad_healthy'=>$request->inp_hb,
            'lad_post_partum' =>$request->inp_pph,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }
}
