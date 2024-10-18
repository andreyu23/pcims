
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>CBC / HGB</th>
                <th>Urinalysis</th>
                <th>Ultrasound</th>
                <th>Others</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($info as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['lab_cbc']}}</td>
                <td>{{$value['lab_urine']}}</td>
                <td>{{$value['lab_ultrasound']}}</td>
                <td>{{$value['lab_others']}}</td>
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
