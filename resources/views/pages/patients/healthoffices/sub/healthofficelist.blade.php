
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Barangay / Catchment</th>
                <th>Municipality</th>
                <th>Province</th>
                <th>Referral Unit</th>
                <th>Name of Facility with Basic Obstetric Care</th>
                <th>Address</th>
                <th>Name of Facility with Comprehensive Obstetric Care</th>
                <th>Address</th>
                <th>Name of Midwife</th>
                <th>Duty Station and Address</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($health as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['ho_barangay']}}</td>
                <td>{{$value['ho_municipality']}}</td>
                <td>{{$value['ho_province']}}</td>
                <td>{{$value['ho_ref_unit']}}</td>
                <td>{{$value['ho_bemoc']}}</td>
                <td>{{$value['ho_bemoc_add']}}</td>
                <td>{{$value['ho_cemoc']}}</td>
                <td>{{$value['ho_cemoc_add']}}</td>
                <td>{{$value['ho_mw_name']}}</td>
                <td>{{$value['ho_duty_station']}}</td>
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
