
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Dental Check-up</th>
                <th>Dental Caries</th>
                <th>Others</th>
                <th>Malnourished Mother</th>
                <th>Other Illness / Problem</th>
                <th>Action Taken</th>
                <th>Referred To</th>
                <th>Name of Food Given</th>
                <th>Days of Feeding</th>
                <th>WT</th>
                <th>Remarks</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($dental as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['dental_check']}}</td>
                <td>{{$value['dental_caries']}}</td>
                <td>{{$value['dental_others']}}</td>
                <td>{{$value['dental_malnourish']}}</td>
                <td>{{$value['dental_other_problem']}}</td>
                <td>{{$value['dental_action']}}</td>
                <td>{{$value['dental_refer']}}</td>
                <td>{{$value['dental_food']}}</td>
                <td>{{$value['dental_days']}}</td>
                <td>{{$value['dental_wt']}}</td>
                <td>{{$value['dental_remarks']}}</td>
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
