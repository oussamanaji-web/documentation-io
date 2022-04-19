@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')

    <div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col">
                        <span
                            class="text-uppercase tiny text-gray-600 Montserrat-font font-weight-semibold">Mes produits</span>
                    <h1 class="h2 mb-0 lh-sm">Apps</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 p-xxl-5">
        <div class="container-fluid px-0">
            <div class="pb-2 pt-3 mb-4 mb-xl-5">
                <form>
                    <div class="row align-items-center">
                        <div class="col">
                            <div
                                class="input-group input-group-xl bg-white border border-gray-300 rounded px-3 me-2 me-xl-4">
                                <button type="button" class="border-0 bg-transparent p-1"><img
                                        src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/search@14.svg"
                                        alt="Search"></button>
                                <input type="search" class="form-control border-0" placeholder="Recherchez…">
                            </div>
                        </div>
                        @if(Auth::user()->role()->first()->name === 'admin')
                            <div class="col-12 col-md-auto mt-3 mt-md-0 d-grid">
                                <a href="#0" class="btn btn-xl btn-primary text-nowrap ms-xl-2">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 14 14">
                                        <rect data-name="Icons/Tabler/Add background" width="14" height="14"
                                              fill="none"/>
                                        <path
                                            d="M6.329,13.414l-.006-.091V7.677H.677A.677.677,0,0,1,.585,6.329l.092-.006H6.323V.677A.677.677,0,0,1,7.671.585l.006.092V6.323h5.646a.677.677,0,0,1,.091,1.348l-.091.006H7.677v5.646a.677.677,0,0,1-1.348.091Z"
                                            fill="#ffffff"/>
                                    </svg>
                                    Ajouter une app
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
            <div class="row group-cards">
                @foreach($apps as $item)
                    <div class="col-xl-6 mb-4">
                        <div class="card rounded-12 shadow-dark-80 border border-gray-200 h-100">
                            <div class="card-body p-0">
                                <div class="p-3 p-xl-4">
                                    <div class="row align-items-center pt-2 pb-4 mb-3 px-md-2">
                                        <div class="col-auto">
                                            <span class="avatar">
                                              <img src="https://img.icons8.com/color/144/000000/google-wallet.png"/>
                                            </span>
                                        </div>
                                        <div class="col ps-0 ps-md-1">
                                            <h4 class="mb-1 font-weight-semibold">
                                                <a href="{{ route('documentation.show', $item->slug) }}"
                                                   class="text-black-600">{{ $item->name }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
