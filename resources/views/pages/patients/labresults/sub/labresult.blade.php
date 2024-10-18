<x-slot name="header">{{ __('Laboratory Results') }} </x-slot>
<x-slot name="subHeader">{{ __('You can fill up laboratory results form here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_cbc"> CBC / HGB <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the CBC or HGB  here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_cbc" id="inp_cbc" placeholder="Enter CBC or HGB here..." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_urine"> Urinalysis <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the urinalysis here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_urine" id="inp_urine" placeholder="Enter urinalysis result here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ultra"> Ultrasound <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the ultrasound here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ultra" id="inp_ultra" placeholder="Enter ultrasound result here..." required>
            </div>
        </div>
    </div>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_others"> Others (Please, specify) <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the other results here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_others" id="inp_others" placeholder="Enter other results here..." required>
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

