<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Documentation | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Documentation Favicon -->
    <link href="https://fabrx.co/preview/muse-dashboard/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!-- Documentation Plugins CSS -->
    <link href="{{ asset('assets/vendor/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" type="text/css"
          media="all">
    <!-- Documentation Theme CSS -->
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100 analytics-template">

<nav class="navbar navbar-vertical navbar-expand-lg navbar-light">
    <a class="navbar-brand mx-auto d-none d-lg-block my-0 my-lg-4" href="{{ route('home') }}">
        <img src="https://img.icons8.com/color/96/000000/figma--v1.png"/>
        <img src="https://img.icons8.com/color/48/000000/figma--v1.png" class="muze-icon"/>
    </a>
    <div class="navbar-collapse">
        <ul class="navbar-nav mb-2" id="accordionExample" data-simplebar>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                   aria-expanded="true" aria-controls="sidebarDashboards">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <g data-name="icons/tabler/chart" transform="translate(0)">
                            <rect data-name="Icons/Tabler/Chart background" width="16" height="16" fill="none"/>
                            <path
                                d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z"
                                transform="translate(0 1)" fill="#1e1e1e"/>
                        </g>
                    </svg> &nbsp;<span class="ms-2">Documentation</span>
                </a>
                <div class="collapse collapse-box show" id="sidebarDashboards" data-bs-parent="#accordionExample">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active">Outils</a>
                        </li>
                        <li class="nav-item">
                            <a href="#0" class="nav-link">Création</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Documentation Main Content -->
<div class="main-content">
    <div class="header border-bottom border-gray-200 header-fixed">
        <div class="container-fluid px-0">
            <div class="header-body px-3 px-xxl-5 py-3 py-lg-4">
                <div class="row align-items-center">
                    <a href="javascript:void(0);" class="muze-hamburger d-block d-lg-none col-auto">
                        <img src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/hamburger1.svg" alt="img">
                        <img src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/close1.svg"
                             style="width:20px;" class="menu-close" alt="img">
                    </a>
                    <a class="navbar-brand mx-auto d-lg-none col-auto px-0" href="{{ route('home') }}">
                        <img src="https://img.icons8.com/color/48/000000/figma--v1.png"/>
                    </a>
                    <div class="col d-flex align-items-center">
                        <a href="javascript:void(0);"
                           class="back-arrow bg-white circle circle-sm shadow border border-gray-200 rounded mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 16 16">
                                <g data-name="icons/tabler/chevrons-left" transform="translate(0)">
                                    <rect data-name="Icons/Tabler/Chevrons Left background" width="16" height="16"
                                          fill="none"/>
                                    <path
                                        d="M14.468,14.531l-.107-.093-6.4-6.4a.961.961,0,0,1-.094-1.25l.094-.107,6.4-6.4a.96.96,0,0,1,1.451,1.25l-.094.108L10,7.36l5.72,5.721a.961.961,0,0,1,.094,1.25l-.094.107a.96.96,0,0,1-1.25.093Zm-7.68,0-.107-.093-6.4-6.4a.961.961,0,0,1-.093-1.25l.093-.107,6.4-6.4a.96.96,0,0,1,1.45,1.25l-.093.108L2.318,7.36l5.72,5.721a.96.96,0,0,1,.093,1.25l-.093.107a.96.96,0,0,1-1.25.093Z"
                                        transform="translate(0 1)" fill="#6C757D"/>
                                </g>
                            </svg>
                        </a>
                        <div class="ps-3 header-search">
                            <form>
                                <div class="input-group bg-white border border-gray-300 rounded py-1 px-3">
                                    <img src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/search@14.svg"
                                         alt="Search">
                                    <input type="search" class="form-control border-0" placeholder="Recherche...">
                                </div>
                            </form>
                            <span class="muze-search d-lg-none ms-3">
                <svg id="icons_tabler_close" data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 16 16">
                  <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"/>
                  <path
                      d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z"
                      transform="translate(2 2)" fill="#1e1e1e"/>
                </svg>
              </span>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light top-header-nav">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav" id="accordionExample2">
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarDashboards2"
                                           data-bs-toggle="collapse" role="button" aria-expanded="false"
                                           aria-controls="sidebarDashboards2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 16 16">
                                                <g data-name="icons/tabler/chart" transform="translate(0)">
                                                    <rect data-name="Icons/Tabler/Chart background" width="16"
                                                          height="16" fill="none"/>
                                                    <path
                                                        d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z"
                                                        transform="translate(0 1)" fill="#1e1e1e"/>
                                                </g>
                                            </svg> &nbsp;<span class="ms-2">Dashboards</span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarDashboards2"
                                             data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="analytics.html" class="nav-link active">Analytics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="project-management.html" class="nav-link">Project
                                                        management</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="festive.html" class="nav-link">Festive</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarPages3" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="sidebarPages3">
                                            <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg"
                                                 width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Icons/Tabler/Page background" width="16" height="16"
                                                      fill="none"/>
                                                <path
                                                    d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z"
                                                    transform="translate(2 1)" fill="#1e1e1e"/>
                                            </svg> &nbsp;<span class="ms-2">Pages</span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarPages3"
                                             data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column" id="submenu4">
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#AccountPage3"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="AccountPage3">Account</a>
                                                    <div class="collapse collapse-box" id="AccountPage3"
                                                         data-bs-parent="#submenu4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="settings.html" class="nav-link">Settings</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="billing.html" class="nav-link">Billing</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="invoice.html" class="nav-link">Invoice</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="api-keys.html" class="nav-link">API keys</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#UserProfile2"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="UserProfile2">User Profile</a>
                                                    <div class="collapse collapse-box" id="UserProfile2"
                                                         data-bs-parent="#submenu4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="user-profile-general.html" class="nav-link">General</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="user-profile-activity.html" class="nav-link">Activity</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="user-profile-friends.html" class="nav-link">Friends</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="user-profile-groups.html" class="nav-link">Groups</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Projectspage2"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="Projectspage2">Projects</a>
                                                    <div class="collapse collapse-box" id="Projectspage2"
                                                         data-bs-parent="#submenu4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="all-projects.html" class="nav-link">All
                                                                    projects</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="new-project.html" class="nav-link">New
                                                                    project</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="project-details.html" class="nav-link">Project
                                                                    detail</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="teams.html" class="nav-link">Teams</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="help-center.html" class="nav-link">Help page</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="empty-state.html" class="nav-link">Empty State</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarAuthentication2"
                                           data-bs-toggle="collapse" role="button" aria-expanded="false"
                                           aria-controls="sidebarAuthentication2">
                                            <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg"
                                                 width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Icons/Tabler/Plug background" width="16" height="16"
                                                      fill="none"/>
                                                <path
                                                    d="M6.7,16a2.378,2.378,0,0,1-2.373-2.234l0-.145V12.541H3.244A3.241,3.241,0,0,1,0,9.47L0,9.3V4.109a.649.649,0,0,1,.561-.643L.649,3.46H1.73V.649A.649.649,0,0,1,3.021.561l.005.088V3.46H6.919V.649A.649.649,0,0,1,8.211.561l.005.088V3.46H9.3a.649.649,0,0,1,.643.561l.006.088V9.3a3.241,3.241,0,0,1-3.071,3.239l-.173,0H5.621v1.081A1.081,1.081,0,0,0,6.593,14.7l.11.005H9.3a.649.649,0,0,1,.088,1.292L9.3,16Zm0-4.757A1.951,1.951,0,0,0,8.644,9.431l0-.134V4.757H1.3V9.3A1.951,1.951,0,0,0,3.11,11.239l.133,0H6.7Z"
                                                    transform="translate(3)" fill="#1e1e1e"/>
                                            </svg> &nbsp;<span class="ms-2">Authentication</span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarAuthentication2"
                                             data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column" id="submenu5">
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Signinpage2"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="Signinpage2">Sign in</a>
                                                    <div class="collapse collapse-box" id="Signinpage2"
                                                         data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="signin-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="signin-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Signuppage2"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="Signuppage2">Sign up</a>
                                                    <div class="collapse collapse-box" id="Signuppage2"
                                                         data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="signup-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="signup-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Resetpassword2"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="Resetpassword2">Reset password</a>
                                                    <div class="collapse collapse-box" id="Resetpassword2"
                                                         data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="reset-password-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="reset-password-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Emailverification2"
                                                       data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                       aria-controls="Emailverification2">Email verification</a>
                                                    <div class="collapse collapse-box" id="Emailverification2"
                                                         data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="verify-email-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="verify-email-cover.html"
                                                                   class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="404-error.html" class="nav-link">Error 404</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="500-error.html" class="nav-link">Error 500</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarApps2" data-bs-toggle="collapse"
                                           role="button" aria-expanded="false" aria-controls="sidebarApps2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 16 16">
                                                <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
                                                    <rect data-name="Icons/Tabler/apps background" width="16"
                                                          height="16" fill="none"/>
                                                    <path
                                                        d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z"
                                                        transform="translate(0 0)" fill="#1e1e1e"/>
                                                </g>
                                            </svg> &nbsp;<span class="ms-2 position-relative">Apps <sup
                                                    class="status bg-warning position-absolute">&nbsp;</sup></span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarApps2"
                                             data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="file-manager.html" class="nav-link">File manager</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="chat.html" class="nav-link">Chat</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="calendar.html" class="nav-link">Calendar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="https://fabrx.co/preview/muse-dashboard/documentation/index.html"
                                           target="_blank">
                                            <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg"
                                                 width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Icons/Tabler/Paperclip background" width="16"
                                                      height="16" fill="none"/>
                                                <path
                                                    d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z"
                                                    transform="translate(1)" fill="#1e1e1e"/>
                                            </svg> &nbsp;<span class="ms-2">Docs</span> <span
                                                class="docs-version">v1.0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-auto d-flex flex-wrap align-items-center icon-blue-hover ps-0">
                        <a href="#" class="d-lg-none muze-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                                <rect id="Icons_Tabler_Search_background" data-name="Icons/Tabler/Search background"
                                      width="14" height="14" fill="none"/>
                                <path data-name="Combined Shape"
                                      d="M13.141,13.895l-.06-.052L9.1,9.859A5.569,5.569,0,1,1,9.859,9.1l3.983,3.983a.539.539,0,0,1-.7.813ZM1.077,5.564A4.487,4.487,0,1,0,5.564,1.077,4.492,4.492,0,0,0,1.077,5.564Z"
                                      fill="#1e1e1e"/>
                            </svg>
                        </a>
                        <div class="dropdown profile-dropdown">
                            <a href="#" class="avatar avatar-sm avatar-circle ms-4 ms-xxl-5" data-bs-toggle="dropdown"
                               aria-expanded="false" id="dropdownMenuButton">
                                <img class="avatar-img" src="../assets/img/avatar1.png" alt="Avatar">
                                <span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li class="pt-2 px-4">
                                    <span
                                        class="fs-16 font-weight-bold text-black-600 Montserrat-font me-2">Bruce Lee</span><img
                                        src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/fill-check.svg"
                                        alt="icon">
                                    <small class="text-gray-600 pb-3 d-block">lee@bruce.com</small>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-item" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false" id="Status" href="#">
                                        <svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16" viewBox="0 0 16 16">
                                            <rect id="Icons_Tabler_Circle_background"
                                                  data-name="Icons/Tabler/Circle background" width="16" height="16"
                                                  fill="none"/>
                                            <path id="Oval"
                                                  d="M6,12a6,6,0,1,1,6-6A6.007,6.007,0,0,1,6,12ZM6,1.384A4.616,4.616,0,1,0,10.616,6,4.621,4.621,0,0,0,6,1.384Z"
                                                  transform="translate(2 2)" fill="#495057"/>
                                        </svg>
                                        <span class="ms-2">Status</span><img
                                            src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/right-arrow@10.svg"
                                            alt="Right Arrow" class="ms-auto"></a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Status">
                                        <li><a class="dropdown-item" href="#"><span class="status online"></span><span
                                                    class="ms-2">Available</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span class="status dnd"></span><span
                                                    class="ms-2">Busy</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span class="status away"></span><span
                                                    class="ms-2">Away</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span class="status offline"></span><span
                                                    class="ms-2">Offline</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16" viewBox="0 0 16 16">
                                            <rect id="Icons_Tabler_User_background"
                                                  data-name="Icons/Tabler/User background" width="16" height="16"
                                                  fill="none"/>
                                            <path
                                                d="M11.334,16H.667a.665.665,0,0,1-.661-.568L0,15.343v-1.75A4.179,4.179,0,0,1,4.029,9.44l.193,0H7.778A4.186,4.186,0,0,1,12,13.4l0,.191v1.75a.661.661,0,0,1-.576.651ZM4.222,10.749a2.869,2.869,0,0,0-2.884,2.683l-.005.162v1.094h9.334V13.594A2.857,2.857,0,0,0,8.1,10.767l-.162-.013-.164,0ZM6,8.314A4.2,4.2,0,0,1,1.778,4.157a4.223,4.223,0,0,1,8.445,0A4.2,4.2,0,0,1,6,8.314Zm0-7A2.87,2.87,0,0,0,3.111,4.157a2.889,2.889,0,0,0,5.778,0A2.87,2.87,0,0,0,6,1.313Z"
                                                transform="translate(2)" fill="#495057"/>
                                        </svg>
                                        <span class="ms-2">Profile</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/Bookmark background" width="16" height="16"
                                                  fill="none"/>
                                            <path
                                                d="M.687,16a.686.686,0,0,1-.681-.595L0,15.314V2.514A2.516,2.516,0,0,1,2.361,0l.153,0H8a2.516,2.516,0,0,1,2.51,2.361l0,.153v12.8A.688.688,0,0,1,9.827,16a.671.671,0,0,1-.27-.057L9.475,15.9,5.257,13.37,1.039,15.9A.684.684,0,0,1,.687,16Zm4.57-4.115a.678.678,0,0,1,.256.05l.1.048L9.142,14.1V2.514A1.139,1.139,0,0,0,8.116,1.377L8,1.372H2.514L2.4,1.377A1.147,1.147,0,0,0,1.377,2.4l-.005.116V14.1L4.9,11.983A.687.687,0,0,1,5.257,11.885Z"
                                                transform="translate(3)" fill="#495057"/>
                                        </svg>
                                        <span class="ms-2">Bookmarks</span></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 16 16">
                                            <path data-name="Combined Shape"
                                                  d="M6.027,14.449a.8.8,0,0,0-1.193-.494,2.025,2.025,0,0,1-1.063.31,2.086,2.086,0,0,1-1.779-1.069,1.961,1.961,0,0,1,.051-2.03.8.8,0,0,0-.493-1.193,2.03,2.03,0,0,1,0-3.945.8.8,0,0,0,.494-1.193,1.962,1.962,0,0,1-.052-2.03,2.086,2.086,0,0,1,1.78-1.071,2.022,2.022,0,0,1,1.062.31.8.8,0,0,0,1.193-.493,2.03,2.03,0,0,1,3.945,0,.808.808,0,0,0,.472.551.788.788,0,0,0,.305.06.8.8,0,0,0,.417-.117,2.024,2.024,0,0,1,1.062-.31,2.087,2.087,0,0,1,1.78,1.07,1.963,1.963,0,0,1-.052,2.03.8.8,0,0,0,.494,1.192,2.03,2.03,0,0,1,0,3.946.8.8,0,0,0-.494,1.193,1.962,1.962,0,0,1,.052,2.03,2.086,2.086,0,0,1-1.779,1.07,2.025,2.025,0,0,1-1.063-.31.8.8,0,0,0-.722-.056.8.8,0,0,0-.471.55,2.03,2.03,0,0,1-3.945,0Zm0-1.687a2.03,2.03,0,0,1,1.2,1.4.8.8,0,0,0,1.553,0A2.029,2.029,0,0,1,11.8,12.9l.077.042a.78.78,0,0,0,.341.08.822.822,0,0,0,.7-.421.773.773,0,0,0-.02-.8l-.078-.141a2.03,2.03,0,0,1,1.333-2.889.8.8,0,0,0,0-1.552A2.031,2.031,0,0,1,12.9,4.195l.042-.076a.768.768,0,0,0-.042-.757.813.813,0,0,0-.68-.387.793.793,0,0,0-.418.122l-.141.078a2.038,2.038,0,0,1-.916.219,2.02,2.02,0,0,1-.777-.155,2.039,2.039,0,0,1-1.2-1.4l-.029-.1a.8.8,0,0,0-1.524.1A2.027,2.027,0,0,1,4.195,3.1l-.076-.041a.78.78,0,0,0-.341-.08.822.822,0,0,0-.7.422.772.772,0,0,0,.021.8l.078.141A2.029,2.029,0,0,1,1.841,7.223a.8.8,0,0,0,0,1.553A2.029,2.029,0,0,1,3.1,11.8l-.041.077a.768.768,0,0,0,.042.757.815.815,0,0,0,.68.387.791.791,0,0,0,.418-.122l.141-.078a2.027,2.027,0,0,1,1.693-.064ZM4.923,8A3.077,3.077,0,1,1,8,11.077,3.081,3.081,0,0,1,4.923,8ZM6.154,8A1.846,1.846,0,1,0,8,6.154,1.848,1.848,0,0,0,6.154,8Z"
                                                  fill="#495057"/>
                                        </svg>
                                        <span class="ms-2">Settings</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        @yield('content')
    </div>
    <div class="pe-5 ps-5 mb-4">
        <footer class="pt-xl-5 mt-lg-2">
            <div class="container-fluid px-0 border-top border-gray-200 pt-2 pt-lg-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="fs-16 text-gray-600 my-2">{{ date('Y') }} &copy; CodyTeam - All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar">
                            <li><a href="#0">About</a></li>
                            <li><a href="#0">Support</a></li>
                            <li><a href="#0">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<!-- Documentation Javascript Plugins -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('assets/vendor/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/theme-custom.js') }}"></script>
</body>

</html>
