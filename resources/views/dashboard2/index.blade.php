<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body class="bg-[#f5f7fc] font-poppins">
    <div class="flex flex-row">
        {{-- sidebar --}}
        <div class="w-64 h-screen bg-primary hidden md:block">
            <div>
                <img src="/images/logo1.png" alt="logo" class="w-56 flex mx-auto">
            </div>

            <div class="mt-4 p-4 text-white">
                <a href="/dashboard2"
                    class="block active-nav  p-3 text-sm  rounded-xl my-2 hover:bg-purple-soft hover:text-white transition ease-in-out duration-500">
                    <div class="flex items-center  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Dashboard
                    </div>
                </a>

                <a href="/profile"
                    class="block  p-3 text-sm rounded-xl my-2 hover:bg-purple-soft hover:text-white transition ease-in-out duration-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>

                        Profile
                    </div>
                </a>

                <a href="/kuisioner"
                    class="block p-3 text-sm rounded-xl my-2 hover:bg-purple-soft hover:text-white transition ease-in-out duration-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                        </svg>

                        Kuisioner
                    </div>
                </a>

            </div>
        </div>

        {{-- navbar --}}
        <div class="grow">
            <div class="p-7">

                <div class="flex justify-between border-b pb-5">
                    <div class="">
                        <h2 class="text-2xl font-semibold text-navy">Dashboard</h2>
                        <span class="text-sm text-slate-400">Sunday, 11 Desember 2022</span>
                    </div>


                    <div class="flex items-center gap-3 ">

                        <div class=" flex-col text-right hidden md:block">
                            <h2 class="text-md font-semibold text-navy">Welcome Back, <span class="font-light">Yatkun Oemar</span></h2>
                            <h6 class="text-xs text-softnavy">Administrator</h6>
                        </div>

                        <div class="w-14 h-14 rounded-full border-primary border-opacity-25 border-2 p-1 bg-cover">
                            <img src="/images/emoji.jpg" class="rounded-full ">
                        </div>
                    </div>
                </div>

                <div class="flex md:flex-row flex-col mt-5 space-x-0 space-y-2 md:space-y-0 md:space-x-4">
                    <div class="bg-white shadow-md shadow-slate-200 p-5 flex items-center grow rounded-lg">
                        <div class="bg-yellow-300 shadow-lg shadow-yellow-300/50 text-white p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </div>
                        <div class="flex flex-col ml-3">
                            <p class="text-lg">320</p>
                            <p class="text-slate-400 text-sm">Total alumni</p>
                        </div>
                    </div>

                    <div class="bg-white shadow-md shadow-slate-200 p-5 flex items-center grow rounded-lg">
                        <div class="bg-yellow-300 shadow-lg shadow-yellow-300/50 text-white p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </div>
                        <div class="flex flex-col ml-3">
                            <p class="text-lg">320</p>
                            <p class="text-slate-400 text-sm">Total alumni</p>
                        </div>
                    </div>

                


                </div>
            </div>

        </div>
    </div>


</body>

</html>
