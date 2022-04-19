@extends('layouts.app')

@section('title')
    {{ $item->name }}
@endsection

@section('content')
    <div class="px-3 px-xxl-5 py-5 py-lg-4 border-bottom border-gray-200 after-header">
        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col">
                    <span
                        class="text-uppercase tiny text-gray-600 Montserrat-font font-weight-semibold">Documentation</span>
                    <h1 class="h2 mb-0 lh-sm">{{ $item->name }}</h1>
                </div>
                <div class="col-auto d-flex align-items-center my-2 my-sm-0">
                    <a href="{{ route('home') }}" class="btn btn-lg btn-warning">
                        <svg class="me-2" data-name="Icons/Tabler/Paperclip Copy 2" xmlns="http://www.w3.org/2000/svg"
                             width="14" height="14" viewBox="0 0 18 18">
                            <rect data-name="Icons/Tabler/Bolt background" width="18" height="18" fill="none"/>
                            <path
                                d="M6.377,18a.7.7,0,0,1-.709-.6l-.006-.1V11.537H.709A.7.7,0,0,1,.1,11.193a.673.673,0,0,1-.014-.672l.054-.083L7.693.274,7.755.2,7.828.141,7.913.087,7.981.055l.087-.03L8.16.006,8.256,0h.037l.059.005.04.007.052.011.045.014.043.016.052.023.089.055.016.011A.765.765,0,0,1,8.756.2L8.82.273l.055.083.033.067.03.085L8.957.6l.007.094V6.461h4.952a.7.7,0,0,1,.613.345.672.672,0,0,1,.013.672l-.053.082L6.942,17.714A.691.691,0,0,1,6.377,18ZM7.548,2.821,2.1,10.153H6.369a.7.7,0,0,1,.7.6l.006.093v4.331l5.449-7.331H8.256a.7.7,0,0,1-.7-.6l-.007-.094Z"
                                transform="translate(2.25 0)" fill="#1E1E1E"/>
                        </svg>
                        <span>Toutes les apps</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 p-xxl-5">
        <div class="container-fluid px-0 d-block d-sm-none">
            <div class="row pb-2">
                <div class="col-xl-12 mb-4">
                    <div class="card rounded-12 shadow-dark-80 border border-gray-200 h-100">
                        <div class="card-body p-0 justify-content-center d-flex w-100">
                            <div class="p-3 p-xl-4">
                                <div class="row align-items-center py-2 px-md-3 px-xl-0 px-xxl-3">
                                    <div class="col-auto">
                                        <span class="avatar">
                                            <img src="https://img.icons8.com/color/144/000000/google-wallet.png"/>
                                        </span>
                                    </div>
                                    <div class="col ps-0 ps-md-1">
                                        <h4 class="mb-1 font-weight-semibold">
                                            <a href="#" class="text-black-600">{{ $item->name }}</a>
                                        </h4>
                                        <p class="card-text small text-gray-600 lh-sm">
                                            <img class="me-1"
                                                 src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/clock.svg"
                                                 alt="Clock">
                                            Crée {{ \Carbon\Carbon::make($item->documentation()->first()->created_at)->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nav -->
            <div class="text-center">
                <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-description-h-tab" data-bs-toggle="pill"
                           href="#pills-description-h" role="tab"
                           aria-controls="pills-description-h-tab" style="max-width: 7.8rem; font-size: 12px"
                           aria-selected="true">Description du
                            module</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-api-h-tab" data-bs-toggle="pill"
                           href="#pills-api-h" role="tab"
                           aria-controls="pills-api-h-tab" style="max-width: 7.8rem; font-size: 12px"
                           aria-selected="false">API points de
                            transmission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-cas-h-tab" data-bs-toggle="pill"
                           href="#pills-cas-h" role="tab"
                           aria-controls="pills-cas-h" style="max-width: 7.8rem; font-size: 12px" aria-selected="false">Cas
                            d'utilisation</a>
                    </li>
                    @if(Auth::user()->role()->first()->name === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" id="pills-fontend-tab" data-bs-toggle="pill"
                               href="#pills-fontend" role="tab"
                               aria-controls="pills-fontend" style="max-width: 7.8rem; font-size: 12px"
                               aria-selected="false">Composant
                                Frontal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-backend-tab" data-bs-toggle="pill"
                               href="#pills-backend" role="tab"
                               aria-controls="pills-backend" style="max-width: 7.8rem; font-size: 12px"
                               aria-selected="false">Service Backend</a>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="card rounded-12 shadow-dark-80 border border-gray-200 mt-3 h-100 p-4 w-100">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-description-h" role="tabpanel"
                         aria-labelledby="pills-description-tab">
                        <DescriptionModule
                            user-admin="{{ Auth::user()->role()->first()->name }}"
                            :documentation="{{ $item->documentation()->first() }}"></DescriptionModule>
                    </div>

                    <div class="tab-pane fade" id="pills-api-h" role="tabpanel"
                         aria-labelledby="pills-api-tab">
                        <API user-admin="{{ Auth::user()->role()->first()->name }}"
                             :documentation="{{ $item->documentation()->first() }}"></API>
                    </div>

                    <div class="tab-pane fade" id="pills-cas" role="tabpanel"
                         aria-labelledby="pills-cas-tab">
                        <CasUtilisation user-admin="{{ Auth::user()->role()->first()->name }}"
                                        :documentation="{{ $item->documentation()->first() }}"></CasUtilisation>
                    </div>
                    @if(Auth::user()->role()->first()->name === 'admin')
                        <div class="tab-pane fade" id="pills-frontend" role="tabpanel"
                             aria-labelledby="pills-frontend-tab">
                            <ComposantFrontal
                                :documentation="{{ $item->documentation()->first() }}"></ComposantFrontal>
                        </div>
                        <div class="tab-pane fade" id="pills-backend" role="tabpanel"
                             aria-labelledby="pills-backend-tab">
                            <ServiceBackend
                                :documentation="{{ $item->documentation()->first() }}"></ServiceBackend>
                        </div>
                    @endif
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <div class="container-fluid px-0 d-none d-lg-block">
            <div class="row pb-2">
                <div class="col-xl-12 mb-4">
                    <div class="card rounded-12 shadow-dark-80 border border-gray-200 h-100">
                        <div class="card-body p-0 justify-content-center d-flex w-100">
                            <div class="p-3 p-xl-4">
                                <div class="row align-items-center py-2 px-md-3 px-xl-0 px-xxl-3">
                                    <div class="col-auto">
                                        <span class="avatar">
                                            <img src="https://img.icons8.com/color/144/000000/google-wallet.png"/>
                                        </span>
                                    </div>
                                    <div class="col ps-0 ps-md-1">
                                        <h4 class="mb-1 font-weight-semibold">
                                            <a href="#" class="text-black-600">{{ $item->name }}</a>
                                        </h4>
                                        <p class="card-text small text-gray-600 lh-sm">
                                            <img class="me-1"
                                                 src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/clock.svg"
                                                 alt="Clock">
                                            Crée {{ \Carbon\Carbon::make($item->documentation()->first()->created_at)->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-xl-12 mb-4">
                    <div class="d-flex align-items-start p-4">
                        <div class="nav nav-verticle flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical" style="min-width: 16rem;">
                            <a class="nav-link" style="margin-bottom: 20px; padding: 0;" role="tab">Documentation
                                utilisateur</a>
                            <a class="nav-link active" style="margin-bottom: 20px" id="v-pills-description-tab"
                               data-bs-toggle="pill" href="#v-pills-description"
                               role="tab" aria-controls="v-pills-description" aria-selected="true">Description du
                                module</a>
                            <a class="nav-link" style="margin-bottom: 20px" id="v-pills-api-tab"
                               data-bs-toggle="pill" href="#v-pills-api"
                               role="tab" aria-controls="v-pills-api" aria-selected="false">API points de
                                transmission</a>
                            <a class="nav-link" style="margin-bottom: 20px" id="v-pills-cas-tab"
                               data-bs-toggle="pill" href="#v-pills-cas"
                               role="tab" aria-controls="v-pills-cas" aria-selected="false">Cas d'utilisation</a>
                            @if(Auth::user()->role()->first()->name === 'admin')
                                <a class="nav-link" style="margin-bottom: 20px; padding: 0;" id="v-pills-home-tab"
                                   role="tab" aria-controls="v-pills-home" aria-selected="true">Documentation
                                    développeur</a>
                                <a class="nav-link" style="margin-bottom: 20px" id="v-pills-home-tab"
                                   data-bs-toggle="pill" href="#v-pills-frontend"
                                   role="tab" aria-controls="v-pills-frontend" aria-selected="true">Composant
                                    Frontal</a>
                                <a class="nav-link" style="margin-bottom: 20px" id="v-pills-profile-tab"
                                   data-bs-toggle="pill" href="#v-pills-backend"
                                   role="tab" aria-controls="v-pills-backend" aria-selected="false">Service Backend</a>
                            @endif
                        </div>
                        <div class="card rounded-12 shadow-dark-80 border border-gray-200 h-100 p-4 w-100">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-description" role="tabpanel"
                                     aria-labelledby="v-pills-description-tab">
                                    <DescriptionModule
                                        user-admin="{{ Auth::user()->role()->first()->name }}"
                                        :documentation="{{ $item->documentation()->first() }}"></DescriptionModule>
                                </div>
                                <div class="tab-pane fade" id="v-pills-api" role="tabpanel"
                                     aria-labelledby="v-pills-api-tab">
                                    <API user-admin="{{ Auth::user()->role()->first()->name }}"
                                         :documentation="{{ $item->documentation()->first() }}"></API>
                                </div>
                                <div class="tab-pane fade" id="v-pills-cas" role="tabpanel"
                                     aria-labelledby="v-pills-cas-tab">
                                    <CasUtilisation user-admin="{{ Auth::user()->role()->first()->name }}"
                                                    :documentation="{{ $item->documentation()->first() }}"></CasUtilisation>
                                </div>
                                @if(Auth::user()->role()->first()->name === 'admin')
                                    <div class="tab-pane fade" id="v-pills-frontend" role="tabpanel"
                                         aria-labelledby="v-pills-frontend-tab">
                                        <ComposantFrontal
                                            :documentation="{{ $item->documentation()->first() }}"></ComposantFrontal>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-backend" role="tabpanel"
                                         aria-labelledby="v-pills-backend-tab">
                                        <ServiceBackend
                                            :documentation="{{ $item->documentation()->first() }}"></ServiceBackend>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
