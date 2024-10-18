<x-slot name="header">{{ __('Health Office') }} </x-slot>
<x-slot name="subHeader">{{ __('You can fill up health office form here.') }} </x-slot>



<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_brngy">Barangay / Catchment<b class="text-danger">*</b></label>
            <span class="form-note"> Specify the barangay or catchment here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" name="inp_brngy" class="form-control" id="inp_brngy" placeholder="Enter barangay or catchment here.." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_municipality"> Municipality <b class="text-danger">*</b></label>
                        <span class="form-note"> Specify the municipality here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_municipality"class="form-control" id="inp_municipality" placeholder="Enter municipality here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_prov"> Province <b class="text-danger">*</b></label>
                        <span class="form-note"> Specify the province here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_prov"class="form-control" id="inp_prov" placeholder="Enter the province here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ref"> Referral Unit <b class="text-danger">*</b></label>
                <span class="form-note">Specify the referral unit here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_ref" class="form-control" id="inp_ref" placeholder="Enter the referral unit here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_bemoc"> Name of Facility with Basic Emergency Obstetric Care / BEmOC <b class="text-danger">*</b></label>
                        <span class="form-note"> Specify the name of facility with basic emergency obstetric  here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_bemoc"class="form-control" id="inp_bemoc" placeholder="Enter the name of facility with basic emergency obstetric here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_bemoc_add"> Address <b class="text-danger">*</b></label>
                      <span class="form-note"> Specify the address here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_bemoc_add" class="form-control" id="inp_bemoce_add" placeholder="Enter the address here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_cemoc"> Name of Facility with Comprehensive Emergency Obstetric Care / CEmOC <b class="text-danger">*</b></label>
                <span class="form-note"> Specify the name of facility with comprehensive emergency obstetric  here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_cemoc"class="form-control" id="inp_cemoc" placeholder="Enter the name of facility with comprehensive emergency obstetric here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_cemoc_add"> Address <b class="text-danger">*</b></label>
                <span class="form-note"> Specify the address here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_cemoc_add" class="form-control " id="inp_cemoc_add" placeholder="Enter the address here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-xxl-3 col-md-6">
            <div class="form-group">
               <label class="form-label inline-block"> <b> CHI in Charge </b></label>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_nom"> Name of Midwife <b class="text-danger">*</b></label>
                 <span class="form-note"> Specify the name of midwife here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_nom"class="form-control" id="inp_nom" placeholder="Enter the name the of midwife here.." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_dsa"> Duty Station and Address <b class="text-danger">*</b></label>
                        <span class="form-note"> Specify the duty station and address here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" name="inp_dsa"class="form-control" id="inp_dsa" placeholder="Enter the duty station and address here.." required>
            </div>
        </div>
    </div>

                <div class="col-lg-5">
                </div>
                <div class="col-lg-7 justify-end" style="float: right">
                    <hr>
                    <div class="form-group mt-2 mb-2 justify-end">
                        <button type="reset" class="btn btn-danger bg-dark mx-3">
                            <em class="icon ni ni-repeat"></em>
                             Reset
                        </button>
                        <button  type="submit" class="btn btn-primary">
                            <em class="icon ni ni-save"></em>
                             Submit Form
                        </button>
                    </div>
                </div>
