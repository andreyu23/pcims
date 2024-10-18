<div class="py-12 pt-4">
    <div class="row mt-5">

            <table class="datatable-init nowrap table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Trimester</th>
                        <th>Date of Visit</th>
                        <th>Age in Months</th>
                        <th>AOG</th>
                        <th>Blood Pressure</th>
                        <th>Weight</th>
                        <th>Presentation</th>
                        <th>FHB</th>
                        <th>Fundal Height</th>
                        <th>Fever</th>
                        <th>Edema</th>
                        <th>Vaginal Bleeding</th>
                        <th>Pallor</th>
                        <th>Laboratory Test Results</th>
                        <th>Service Given / Action Taken</th>
                        <th>Ferrous Sulfate / Folic Acid</th>
                        <th>Calcium Carbonate</th>
                        <th width="100" class="text-center"> Action </th>
                </thead>
                <tbody>
                    @foreach ($info as $value)
                @csrf
                    <tr>
                        <td>{{$value['id']}}</td>
                        <td>{{$value['prenatal_trimester']}}</td>
                        <td>{{$value['prenatal_date_of_visit']}}</td>
                        <td>{{$value['prenatal_age_in_months']}}</td>
                        <td>{{$value['prenatal_AOG']}}</td>
                        <td>{{$value['prenatal_blood_pressure']}}</td>
                        <td>{{$value['prenatal_weight']}}</td>
                        <td>{{$value['prenatal_presentation']}}</td>
                        <td>{{$value['prenatal_FHB']}}</td>
                        <td>{{$value['prenatal_fundal_height']}}</td>
                        <td>{{$value['prenatal_fever']}}</td>
                        <td>{{$value['prenatal_edema']}}</td>
                        <td>{{$value['prenatal_vaginal_bleeding']}}</td>
                        <td>{{$value['prenatal_pallor']}}</td>
                        <td>{{$value['prenatal_lab_test_res']}}</td>
                        <td>{{$value['prenatal_service_given']}}</td>
                        <td>{{$value['prenatal_sulfate_folic']}}</td>
                        <td>{{$value['prenatal_calcium_carbon']}}</td>
                        <td>
                            <button class="btn btn-xs btn-light}">
                                <em class="icon ni ni-edit"> </em>
                            </button>
                                <button type="submit" class="btn btn-xs btn-danger text-white">
                                    <em class="icon ni ni-trash"></em>
                                </button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
