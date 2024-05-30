<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asset-Management</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Script -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <button  id="toggleSidebarMobile" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm  rounded-lg sm:hidden  focus:outline-none focus:ring-2  text-gray-400 hover:bg-indigo-600 focus:ring-indigo-500 hover:text-slate-200"  onclick="Openbar()">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
     </button>

     <aside id="cta-button-sidebar" class="sidebar fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto  bg-gray-900">
            <div class="flex justify-between py-4">
                <span class="ms-3 text-slate-200 font-semibold">Asset Management</span>
                <button type="button" class="close-sidebar absolute p-2 rounded-lg bg-indigo-500 hover:bg-indigo-600 flex items-center justify-center -right-4 opacity-0  sm:hidden"  onclick="Openbar()">
                    <ion-icon name="arrow-back-circle" class="text-xl text-slate-200"></ion-icon>
                </button>
            </div>
           <ul class="space-y-2 font-medium">

              <li>
               <a href="{{ route('assets.index') }}" class="flex items-center p-2  hover:text-indigo-400 rounded-lg text-white hover:bg-gray-700 group transition ease-in-out duration-150">
                  <ion-icon name="briefcase" class="text-2xl"></ion-icon>
                    <span class="ms-3">Asset</span>
                 </a>
              </li>
              <li>
               <a href="{{ route('purchase.index') }}" class="flex items-center p-2  hover:text-indigo-400 rounded-lg text-white  hover:bg-gray-700 group transition ease-in-out duration-150">
                     <ion-icon name="wallet" class="text-2xl "></ion-icon>
                     <span class="flex-1 ms-3 whitespace-nowrap">Purchase</span>
                 </a>
              </li>
              <li>
                  <a href="#" class="flex items-center p-2  hover:text-indigo-400 rounded-lg text-white  hover:bg-gray-700 group transition ease-in-out duration-150">
                     <ion-icon name="document-text" class="text-2xl"></ion-icon>
                     <span class="flex-1 ms-3 whitespace-nowrap">reports</span>
                 </a>
              </li>
              <li>
               <a href="#" class="flex items-center p-2  hover:text-indigo-400 rounded-lg text-white  hover:bg-gray-700 group transition ease-in-out duration-150">
                  <ion-icon name="person" class="text-2xl"></ion-icon>
                    <span class="flex-1 ms-3 whitespace-nowrap">User</span>
                 </a>
              </li>
              <li>
                  <a href="#" class="flex items-center p-2  hover:text-rose-400 rounded-lg text-white  hover:bg-gray-700 group transition ease-in-out duration-150">
                     <ion-icon name="log-out" class="text-2xl"></ion-icon>
                     <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                 </a>
              </li>
        </div>
     </aside>

     @yield('content')
     @yield('script')
     <script>
        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('-translate-x-full');
            document.querySelector('.close-sidebar').classList.toggle('opacity-0');
        }
     </script>
</body>
</html>
