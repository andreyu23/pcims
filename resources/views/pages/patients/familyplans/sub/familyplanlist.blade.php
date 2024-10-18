
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Method of Choice</th>
                <th>Remarks</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($family as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['family_date']}}</td>
                <td>{{$value['family_method']}}</td>
                <td>{{$value['family_remarks']}}</td>
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
