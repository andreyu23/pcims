<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">
        <h3 class="nk-block-title page-title">
            Patient Information /
            <strong class="text-primary small">Cristy Sabanal</strong>
        </h3>
    </x-slot>
    <x-slot name="subHeader">
        {{ __('A patient is any recipient of health care services that are performed by healthcare professionals. ') }}
    </x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block">
        <div class="card">
            <div class="card-aside-wrap">
                <div class="card-content">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link" href="/prenatal/details">
                                <em class="icon ni ni-user-circle"></em>
                                <span>Patient Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/prenatalvisit">
                                <em class="icon ni ni-calendar"></em>
                                <span>Prenatal Visits</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/labresult">
                                <em class="icon ni ni-activity-alt"></em>
                                <span>Laboratory Results</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <em class="icon ni ni-capsule"></em>
                                <span>Health Problems</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <em class="icon ni ni-caution"></em>
                                <span>Risk Identified</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <em class="icon ni ni-pen"></em>
                                <span>Tetanus Toxoid</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/covid">
                                <em class="icon ni ni-covid"></em>
                                <span>Vaccinations History</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dental">
                                <em class="icon ni ni-dental"></em>
                                <span>Dental Check-ups</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/family">
                                <em class="icon ni ni-user-list"></em>
                                <span>Family Planning</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/healthoffice">
                                <em class="icon ni ni-building"></em>
                                <span>Health Office</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/labor">
                                <em class="icon ni ni-alert"></em>
                                <span>Labor and Delivery</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <em class="icon ni ni-external-alt"></em>
                                <span>Others</span>
                            </a>
                        </li>
                    </ul>
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block">
                                <h6 class="title overline-title text-dark text-base">
                                    Patient Details
                                </h6>
                                <p>You can update the patient information here.</p>
                            </div>
                            <div class="nk-divider divider md"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('info.save') }}" method="POST" autocomplete="off">
                                @csrf
                                @include('pages.patients.sub.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


{{-- <x-app-layout>
<form action="{{ route('info.save') }}" method="POST">
    @csrf
    @include('pages.information.sub.form')
</form>
<hr>
@include('pages.information.sub.infotable')
</x-app-layout> --}}
