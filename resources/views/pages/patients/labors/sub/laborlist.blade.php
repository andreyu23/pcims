
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Date of Delivery</th>
                <th>Type of delivery</th>
                <th>Place of Delivery</th>
                <th>Birth of Delivery</th>
                <th>Baby Birth Weight</th>
                <th>Live Birth</th>
                <th>Gender</th>
                <th>Healthy Baby</th>
                <th>Post-partum Hemorrhage 500CC+</th>


                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($labor as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['lad_date_delivery']}}</td>
                <td>{{$value['lad_type_delivery']}}</td>
                <td>{{$value['lad_place_delivery']}}</td>
                <td>{{$value['lad_birth_delivery']}}</td>
                <td>{{$value['lad_birth_weight']}}</td>
                <td>{{$value['lad_live_birth']}}</td>
                <td>{{$value['lad_gender']}}</td>
                <td>{{$value['lad_healthy']}}</td>
                <td>{{$value['lad_post_partum']}}</td>


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
