@extends('p_code.back_end.layouts.app_back_end')
@section('content')
<div class="container-xl">
    <div class="row align-items-center justify-content-between mb-1">
        @include('p_code.back_end.commons.breadcrumb')
        <div class="col-auto">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto d-flex">
                    <a class="btn app-btn-secondary ml-1" href="#">Settings</a>
                    <div class="dropdown">
                        <button class="btn app-btn-secondary dropdown-toggle ml-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-4">
        {{-- -------code----- --}}
    </div>

</div>
<script>
    $(document).ready(function(){
       //....code.
    });
</script>
@endsection