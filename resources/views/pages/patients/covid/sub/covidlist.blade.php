
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Covid Vaccine</th>
                <th>Vaccine Dose</th>
                <th>Booster Dose</th>
                <th>Additional Booster</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($covid as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['covid_vaccine']}}</td>
                <td>{{$value['covid_dose']}}</td>
                <td>{{$value['covid_booster']}}</td>
                <td>{{$value['covid_add_booster']}}</td>
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
