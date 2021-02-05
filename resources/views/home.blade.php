@extends('layouts.app')

@section('content')
<div class="container pb-0">
    <div class="row justify-content-center">
        <ul class="nav nav-pills nav-pills-icons nav-pills-info" role="tablist">
            <!--color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                        -->
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                    <i class="material-icons">person_search</i>
                    PERSONAL
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
                    <i class="material-icons">qr_code_scanner</i>
                    ESCANEAR QR
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#tasks-1" role="tab" data-toggle="tab">
                    <i class="material-icons">picture_as_pdf</i>
                    REPORTES
                </a>
            </li>
        </ul>
        <div class="tab-content tab-space m-2">
            <div class="tab-pane active" id="dashboard-1">
              Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
              <br><br>
              Dramatically visualize customer directed convergence without revolutionary ROI.
            </div>
        </div>
    </div>
</div>
@endsection
