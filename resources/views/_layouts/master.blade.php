<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    @vite('resources/css/app.css')
    {{-- @vite('resources/js/alpine.min.js') --}}

    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <title>{{ $title }} | TracerStudy FMIPA</title>

</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-[#F8FAFB] font-poppins">
        @include('_layouts.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden bg-white ">
            @include('_layouts.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[#F8FAFB]">
                <div class="container mx-auto px-6 py-8">
                    @yield('body')
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascript">
 
    const p1 = document.getElementById("p1a");
    const p2 = document.getElementById("p2a");
    const p3 = document.getElementById("p3a");
    const p4 = document.getElementById("p4a");
    const p5 = document.getElementById("p5");
    const p6 = document.getElementById("p6a");
    const p7 = document.getElementById("p7a");
    const p8a = document.getElementById("p8a");
    const p8b = document.getElementById("p8b");
    const p8c = document.getElementById("p8c");
    const p9 = document.getElementById("p9a");
    const p10 = document.getElementById("p10a");
        $(document).ready(function(){ 
            for(let i = 2; i < 11; i++){
                $("#pertanyaan" + i).hide();
                p1.required = true;

                
          }
        });

        $("#p1a").click(function() {
            $("#pertanyaan2").show();
            $("#pertanyaan3").show();
            $("#pertanyaan4").show();
            $("#pertanyaan5").show();
            $("#pertanyaan7").show();
            $("#pertanyaan10").show();

            p2.required = true;
            p2e.required = true;
            p3.required = true;
            p4.required = true;
            p5.required = true;
            p7.required = true;
            p10.required = true;


            $("#pertanyaan6").hide();
            $("#pertanyaan8").hide();
            $("#pertanyaan9").hide();
            p6.required = false;
            p8a.required = false;
            p8b.required = false;
            p8c.required = false;
            p9.required = false;

        });

        $("#p1b").click(function() {
            $("#pertanyaan2").show();
            $("#pertanyaan3").show();
            $("#pertanyaan6").show();
            $("#pertanyaan4").show();
            $("#pertanyaan5").show();
            $("#pertanyaan7").show();
            $("#pertanyaan10").show();
            p2.required = true;
            p2e.required = true;
            p3.required = true;
            p4.required = true;
            p6.required = true;
            p5.required = true;
            p7.required = true;
            p10.required = true;


            $("#pertanyaan8").hide();
            $("#pertanyaan9").hide();
            p8a.required = false;
            p8b.required = false;
            p8c.required = false;
            p9.required = false;
        });

        $("#p1c").click(function() {
            $("#pertanyaan8").show();
            $("#pertanyaan9").show();
            $("#pertanyaan10").show();
            p8a.required = true;
            p8b.required = true;
            p8c.required = true;
            p9.required = true;
            p10.required = true;



            $("#pertanyaan2").hide();
            $("#pertanyaan3").hide();
            $("#pertanyaan4").hide();
            $("#pertanyaan5").hide();
            $("#pertanyaan6").hide();
            $("#pertanyaan7").hide();
            p2.required = false;
            p2e.required = false;
            p3.required = false;
            p4.required = false;
            p6.required = false;
            p5.required = false;
            p7.required = false;
           
        });

        $("#p1d").click(function() {
            $("#pertanyaan2").hide();
            $("#pertanyaan3").hide();
            $("#pertanyaan4").hide();
            $("#pertanyaan5").hide();
            $("#pertanyaan6").hide();
            $("#pertanyaan7").hide();
            $("#pertanyaan8").hide();
            $("#pertanyaan9").hide();
            $("#pertanyaan10").hide();
            p2.required = false;
            p2e.required = false;
            p3.required = false;
            p4.required = false;
            p6.required = false;
            p5.required = false;
            p7.required = false;
            p8a.required = false;
            p8b.required = false;
            p8c.required = false;
            p9.required = false;
            p10.required = false;

            p2.checked = false;
            p3.checked = false;
            p4.checked = false;
            p6.checked = false;
            p5.checked = false;
            p7.checked = false;
            p8a.checked = false;
            p8b.checked = false;
            p8c.checked = false;
            p9.checked = false;
            p10.checked = false;
        });

        $("#p1e").click(function() {
            $("#pertanyaan2").hide();
            $("#pertanyaan2").hide();
            $("#pertanyaan3").hide();
            $("#pertanyaan4").hide();
            $("#pertanyaan5").hide();
            $("#pertanyaan6").hide();
            $("#pertanyaan7").hide();
            $("#pertanyaan8").hide();
            $("#pertanyaan9").hide();
            $("#pertanyaan10").hide();
            p2.required = false;
            p2e.required = false;
            p3.required = false;
            p4.required = false;
            p6.required = false;
            p5.required = false;
            p7.required = false;
            p8a.required = false;
            p8b.required = false;
            p8c.required = false;
            p9.required = false;
            p10.required = false;

            p2.checked = false;
            p3.checked = false;
            p4.checked = false;
            p6.checked = false;
            p5.checked = false;
            p7.checked = false;
            p8a.checked = false;
            p8b.checked = false;
            p8c.checked = false;
            p9.checked = false;
            p10.checked = false;
        });

    </script>

    <script>
        // Mendapatkan elemen radio dan input
        const radioa = document.getElementById('p2a');
        const radiob = document.getElementById('p2b');
        const input = document.getElementById('p2c');
        const p2d = document.getElementById('p2d');
        const p4g = document.getElementById('p4g');
        const p4h = document.getElementById('p4h');

        const p1e = document.getElementById('p1e');
        const pertanyaan2 = document.getElementById('pertanyaan2');

        // Menambahkan event change pada elemen radio
        radioa.addEventListener('change', function() {
            // Memeriksa apakah radio dicentang atau tidak
            if (radioa.checked === true) {
                // Jika dicentang, mengaktifkan elemen input
                input.classList.remove("bg-gray-100", "cursor-not-allowed");
                input.disabled = false;
                input.required = true;
                p2d.disabled = true;
                p2d.classList.add('bg-gray-100','cursor-not-allowed');
                p2d.value = "";
            }
        });

        radiob.addEventListener('change', function() {
            // Memeriksa apakah radio dicentang atau tidak
            if (this.checked) {
                // Jika dicentang, mengaktifkan elemen input
                input.classList.add('bg-gray-100','cursor-not-allowed');
                input.disabled = true;
                input.value = "";
                p2d.disabled = false;
                p2d.required = true;
      
                p2d.classList.remove("bg-gray-100", "cursor-not-allowed");
            }
        });

        p4h.addEventListener('change', function() {
             console.log(this.checked == false )
            if (this.checked) {
                p4i.disabled = false;
                p4i.autofocus = true;
                p4i.classList.remove("bg-gray-100", "cursor-not-allowed");
            }else if (!this.checked) {
                p4i.disabled = true;
            }
        });

        // p1e.addEventListener('change', function() {
        //      console.log(this.checked == false )
        //     if (this.checked) {
        //         pertanyaan2.disabled = false;
        //         p4i.autofocus = true;
        //         p4i.classList.remove("bg-gray-100", "cursor-not-allowed");
        //     }else if (!this.checked) {
        //         p4i.disabled = true;
        //     }
        // });

    </script>






    {{-- <script>
        const searchInput = document.getElementById("search");
const tableBody = document.querySelector("table tbody");

searchInput.addEventListener("input", (event) => {
  const searchTerm = event.target.value.toLowerCase();
  const rows = tableBody.rows;

  for (let i = 0; i < rows.length; i++) {
    const row = rows[i];
    const match = row.innerText.toLowerCase().indexOf(searchTerm) > -1;
    row.style.display = match ? "" : "none";
  }
});

    </script> --}}
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>