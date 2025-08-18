<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
  
  <title>UNION Student System</title> 

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> 
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" /> 
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script> 
  <!-- Main Styling -->
  <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />

  <!-- Nepcha Analytics -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>

<body
  class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500 flex flex-col min-h-screen">
  <!-- sidenav  -->
  <aside
    class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
        sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" target="_blank">
        <img src="./assets/img/logo-ct.png"
          class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">UNION Dashboard</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors"
            href="{{ route('home') }}">
            <div
              class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 45 40" xmlns="http://www.w3.org/2000/svg">
                <title>shop</title>
                <g fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(-1716, -439)">
                    <g transform="translate(1716, 291)">
                      <g transform="translate(0, 148)">
                        <path class="opacity-60"
                          d="M46.72,10.74 L40.84,0.95 C40.49,0.36 39.85,0 39.17,0 L7.83,0 C7.15,0 6.51,0.36 6.16,0.95 L0.28,10.74 C0.10,11.05 0,11.39 0,11.75 C-0.01,16.07 3.48,19.57 7.80,19.58 L7.82,19.58 C9.75,19.59 11.62,18.87 13.05,17.58 C16.02,20.26 20.53,20.26 23.49,17.58 C26.46,20.26 30.98,20.26 33.95,17.58 C36.24,19.65 39.54,20.17 42.37,18.91 C45.19,17.65 47.01,14.84 47,11.75 C47,11.39 46.90,11.05 46.72,10.74 Z" />
                        <path
                          d="M39.20,22.49 C37.38,22.49 35.58,22.01 33.95,21.10 L33.92,21.11 C31.14,22.68 27.93,22.93 24.98,21.80 C24.48,21.61 23.98,21.37 23.50,21.10 L23.47,21.11 C20.70,22.69 17.48,22.93 14.54,21.80 C14.03,21.61 13.53,21.37 13.05,21.10 C11.43,22.02 9.63,22.49 7.82,22.49 C7.17,22.48 6.52,22.42 5.88,22.29 L5.88,44.72 C5.88,45.95 6.75,46.95 7.83,46.95 L19.58,46.95 L19.58,33.61 L27.42,33.61 L27.42,46.95 L39.17,46.95 C40.25,46.95 41.13,45.95 41.13,44.72 L41.13,22.28 C40.49,22.41 39.84,22.48 39.20,22.49 Z" />
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">
              Dashboard
            </span>
          </a>
        </li>


        <li class="mt-0.5 w-full">
          <button type="button"
            class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors w-full text-left"
            onclick="document.getElementById('studentsDropdown').classList.toggle('hidden')">
            <div
              class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                <title>office</title>
                <g stroke="none" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869, -293)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716, 291)">
                      <g transform="translate(153, 2)">
                        <path class="fill-slate-800 opacity-60"
                          d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                        </path>
                        <path class="fill-slate-800"
                          d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 ease-soft">Students</span>
          </button>

          <!-- Dropdown menu -->
          <ul id="studentsDropdown" class="hidden pl-12">
            <li>
              <a href="{{ route('students.index') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">
                All Students
              </a>
            </li>
             @if(Auth::user()->role === 'admin')  
            <li>
            <a href="{{ route('students.create') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">
                Add Student
              </a>
            </li>
            @endif
          </ul>
        </li>



        <li class="mt-0.5 w-full">
          <button
            class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors w-full text-left"
            onclick="document.getElementById('doctorsDropdown').classList.toggle('hidden')">
            <div
              class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 43 36" xmlns="http://www.w3.org/2000/svg">
                <title>credit-card</title>
                <g stroke="none" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169, -745)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716, 291)">
                      <g transform="translate(453, 454)">
                        <path class="fill-slate-800 opacity-60"
                          d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                        </path>
                        <path class="fill-slate-800"
                          d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 ease-soft">Doctors</span>
          </button>

          <!-- Dropdown menu -->
          <ul id="doctorsDropdown" class="hidden pl-12">
            <li><a href="{{ route('doctors.index') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">All Doctors</a></li>
            @if(Auth::user()->role === 'admin')
            <li><a href="{{ route('doctors.create') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">Add Doctor</a></li>
            @endif
          </ul>
        </li>


        <li class="mt-0.5 w-full">
          <button
            class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors w-full text-left"
            onclick="document.getElementById('coursesDropdown').classList.toggle('hidden')">
            <div
              class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                <title>box-3d-50</title>
                <g stroke="none" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319, -291)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716, 291)">
                      <g transform="translate(603, 0)">
                        <path class="fill-slate-800"
                          d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                        </path>
                        <path class="fill-slate-800 opacity-60"
                          d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z">
                        </path>
                        <path class="fill-slate-800 opacity-60"
                          d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 0,12.7739139 0,12.929159 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 ease-soft">Courses</span>
          </button>

          <!-- Dropdown -->
          <ul id="coursesDropdown" class="hidden pl-12">
            <li><a href="{{ route('courses.index') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">All Courses</a></li>
            @if(Auth::user()->role === 'admin')
            <li><a href="{{ route('courses.create') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">Add Course</a></li>
            @endif
          </ul>
        </li>


        <li class="mt-0.5 w-full">
          <button
            class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors w-full text-left"
            onclick="document.getElementById('departmentsDropdown').classList.toggle('hidden')">
            <div
              class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <title>settings</title>
                <g stroke="none" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020, -442)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716, 291)">
                      <g transform="translate(304, 151)">
                        <polygon class="fill-slate-800 opacity-60"
                          points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                        </polygon>
                        <path class="fill-slate-800 opacity-60"
                          d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z">
                        </path>
                        <path class="fill-slate-800"
                          d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 ease-soft">Departments</span>
          </button>

          <!-- Dropdown -->
          <ul id="departmentsDropdown" class="hidden pl-12">
            <li><a href="{{ route('departments.index') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">All Departments</a></li>
            @if(Auth::user()->role === 'admin')
            <li><a href="{{ route('departments.create') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">Add Department</a></li>
            @endif
          </ul>
        </li>

        @if(Auth::user()->role === 'admin')
        <li class="mt-0.5 w-full">
          <button
            class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors w-full text-left"
            onclick="document.getElementById('employeesDropdown').classList.toggle('hidden')">
           <div
             class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <svg width="12px" height="12px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>users</title>
              <g stroke="none" fill="none" fill-rule="evenodd">
                <g fill="#FFFFFF" fill-rule="nonzero">
                  <path class="fill-slate-800 opacity-60" 
                    d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0Z" />
                  <path class="fill-slate-800" 
                    d="M3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" />
                </g>
              </g>
            </svg>
          </div>
            <span class="ml-1 duration-300 opacity-100 ease-soft">Employees</span>
               </button>

          <!-- Dropdown -->
          <ul id="employeesDropdown" class="hidden pl-12">
            <li><a href="{{ route('employees.index') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">All Employees</a></li>
            <li><a href="{{ route('employees.create') }}" class="block py-2 text-sm text-slate-500 hover:text-slate-700">Add Employee</a></li>
          </ul>
        </li>
        @endif

        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">
            Account pages
          </h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
            href="{{ route('profile') }}">
            <div
              class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 46 42" xmlns="http://www.w3.org/2000/svg">
                <title>customer-support</title>
                <g stroke="none" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717, -291)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716, 291)">
                      <g transform="translate(1, 0)">
                        <path class="fill-slate-800 opacity-60"
                          d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                        </path>
                        <path class="fill-slate-800"
                          d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                        </path>
                        <path class="fill-slate-800"
                          d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 ease-soft">Profile</span>
          </a>
        </li>

  </aside>

  <!-- end sidenav -->


    @yield('content')

    
  <!-- fixed plugin -->
  <div fixed-plugin>
    <a fixed-plugin-button
      class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
      <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <!-- -right-90 in loc de 0-->
    <div fixed-plugin-card
      class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
      <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
        <div class="float-left">
          <h5 class="mt-4 mb-0">UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-right mt-6">
          <button fixed-plugin-close-button
            class="inline-block p-0 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      <div class="flex-auto p-6 pt-0 sm:pt-4">
        <!-- Sidebar Backgrounds -->
        <!-- <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)">
          <div class="my-2 text-left" sidenav-colors>
            <span
              class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-purple-700 to-pink-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              active-color data-color-from="purple-700" data-color-to="pink-500" onclick="sidebarColor(this)"></span>
            <span
              class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              data-color-from="gray-900" data-color-to="slate-800" onclick="sidebarColor(this)"></span>
            <span
              class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-cyan-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              data-color-from="blue-600" data-color-to="cyan-400" onclick="sidebarColor(this)"></span>
            <span
              class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-green-600 to-lime-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              data-color-from="green-600" data-color-to="lime-400" onclick="sidebarColor(this)"></span>
            <span
              class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-500 to-yellow-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              data-color-from="red-500" data-color-to="yellow-400" onclick="sidebarColor(this)"></span>
            <span
              class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-600 to-rose-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              data-color-from="red-600" data-color-to="rose-400" onclick="sidebarColor(this)"></span>
          </div>
        </a> -->

        <div class="mt-4">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm leading-normal">
            Choose between 2 different sidenav types.
          </p>
        </div>
        <div class="flex">
          <button transparent-style-btn
            class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500"
            data-class="bg-transparent" active-style>
            Transparent
          </button>
          <button white-style-btn
            class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
            data-class="bg-white">
            White
          </button>
        </div>


        <p class="block mt-2 text-sm leading-normal xl:hidden">
          You can change the sidenav type just on desktop view.
        </p>
        <!-- Navbar Fixed -->
        <div class="mt-4">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="min-h-6 mb-0.5 block pl-0">
          <input navbarFixed
            class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
            type="checkbox" />
        </div>
        <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />

        <a class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none"
          href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
          target="_blank">View documentation</a>
        <div class="w-full text-center">
          <a class="github-button" href="https://github.com/MhmdMousa22" data-icon="octicon-star" data-size="large"
            data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-4">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20UNION%20Student%20System%20made%20by%20%40Mhmd_Ibrahim22&hashtags=webdesign,dashboard,backend,frontend,tailwindcss,bootstrap,soft_ui_dashboard"
            class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
            target="_blank">
            <i class="mr-1 fab fa-twitter"></i> Tweet
          </a>

          <!-- don't forget to edit -->
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tailwind"
            class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
            target="_blank">
            <i class="mr-1 fab fa-facebook-square"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>