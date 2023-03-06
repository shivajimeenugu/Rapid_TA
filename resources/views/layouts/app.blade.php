<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
        .radio-toolbar input[type="radio"] {
        opacity: 0;
        position: fixed;
        width: 0;
        }

        .radio-toolbar input[type="radio"]:checked + label {
        background-color: blue;
        color: white;
        /* border-color: #4c4; */
        }
    </style>

    <script>
        const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
    </script>

</head>
<body class=" h-screen antialiased leading-none font-sans">
    <div id="app ">
        @include("nav")
        <main class=" h-full bg-gray-100">
            @yield('content')
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


{{-- <script type="module" >

import pincode from "{{ asset('js/pincode-master/lib/pincode.js') }}";
console.log(pincode);
</script> --}}
<script>


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}


function toggleModal() {
//   document.getElementById('modal').classList.toggle('hidden')
var code = '<div class="fmain">\n';
code += '<div class="fwraper bg-[#eff6ff] py-5 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">\n';
code += '<div class="fhead rounded-sm flex justify-center items-center text-white bg-blue-700">\n';
code += '<div class="shadow font-medium">Add TA</div>\n';
code += '</div>\n';
code += '<div class="fbody mt-1 px-5">\n';
code += '<div class="flex-cols">\n';
code += '<div class="">Enter Date</div>\n';
code += '<input class="outline-none p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="date" name="date" id="date" required>\n';
code += '</div>\n';
code += '<div class="flex flex-col mt-1">\n';
code += '<div class="">Enter From</div>\n';
code += '<div class="flex justify-evenly">\n';
code += '<div class="items-center flex">\n';
code += '<label for="from_mode">Pincode&nbsp</label>\n';
code += '<input type="radio" name="from_mode" id="from_mode" checked></div>\n';
code += '<div class="">\n';
code += '<label for="from_mode">Name&nbsp</label>\n';
code += '<input type="radio" name="from_mode" id="from_mode" disabled></div>\n';
code += '</div>\n';
code += '<div class="flex gap-y-1 flex-col">\n';
code += '<div class="flex">\n';
code += '<div class="relative w-full">\n';
code += '<input  onkeyup="update_pincobde(1,this.value)" type="number" id="from_pincode" name="from_pincode" class="block p-1 w-full text-sm outline-none rounded-r-lg rounded-l-lg border-[1px] border-blue-500 hover:border-blue-700" required>\n';
code += '<button id="from_pincode_refresh" class="absolute top-0 right-0 p-1 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">\n';
code += '<i class="fa fa-redo-alt"></i>\n';
code += '</button>\n';
code += '</div>\n';
code += '</div>\n';
code += '<select name="from_place" id="from_place" class="outline-none p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700">\n';
code += '<option value=""></option>\n';
code += '</select>\n';
code += '</div>\n';
code += '</div>\n';
code += '<div class="flex flex-col mt-1">\n';
code += '<div class="">Enter To</div>\n';
code += '<div class="flex justify-evenly">\n';
code += '<div class="items-center flex">\n';
code += '<label for="to_mode">Pincode&nbsp</label>\n';
code += '<input type="radio" name="to_mode" id="to_mode" checked required></div>\n';
code += '<div class="">\n';
code += '<label for="to_mode">Name&nbsp</label>\n';
code += '<input type="radio" name="to_mode" id="to_mode" disabled required></div>\n';
code += '</div>\n';
code += '<div class="flex gap-y-1 flex-col">\n';
code += '<div class="flex">\n';
code += '<div class="relative w-full">\n';
code += '<input  onkeyup="update_pincobde(2,this.value)" type="number" id="to_pincode" name="to_pincode" class="block p-1 w-full text-sm outline-none rounded-r-lg rounded-l-lg border-[1px] border-blue-500 hover:border-blue-700" required>\n';
code += '<button  id="to_pincode_refresh" class="absolute top-0 right-0 p-1 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">\n';
code += '<i class="fa fa-redo-alt"></i>\n';
code += '</button>\n';
code += '</div>\n';
code += '</div>\n';
code += '<select name="to_place" id="to_place" class="outline-none p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700">\n';
code += '<option value=""></option>\n';
code += '</select>\n';
code += '</div>\n';
code += '</div>\n';
code += '<div class="flex-cols mt-1 w-full">\n';
code += '<div class="">Select Mode</div>\n';
code += '<div class="flex radio-toolbar justify-evenly">\n';
code += '<div class="">\n';
code += '<input class="opacity-0" type="radio" id="mode_bike" name="mode" value="bike" >\n';
code += '<label class="rounded px-3 py-2 items-center flex" for="mode_bike"><i class="fa fa-motorcycle"></i></label>\n';
code += '</div>\n';
code += '<div class="">\n';
code += '<input class="opacity-0" type="radio" id="mode_bus" name="mode" value="bus">\n';
code += '<label class="rounded px-3 py-2 items-center flex" for="mode_bus"><i class="fa fa-bus"></i></label>\n';
code += '</div>\n';
code += '</div>\n';
code += '</div>\n';
code += '<div class="flex-cols mt-1 w-full">\n';
code += '<div class="">Enter KM</div>\n';
code += '<input class="outline-none block w-full p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="number" name="km" id="km">\n';
code += '</div>\n';
code += '<div class="flex-cols mt-1">\n';
code += '<div class="">Enter DA</div>\n';
code += '<input class="outline-none p-1 block w-full rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="number" name="da" id="da">\n';
code += '</div>\n';
code += '<div class="flex-cols mt-1">\n';
code += '<div class="">Enter Amount</div>\n';
code += '<input class="outline-none p-1 block w-full rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="number" name="amount" id="amount">\n';
code += '</div>\n';
code += '</div>\n';
code += '<div class="ffoter pt-3">\n';
code += '<div class="flex justify-between px-5">\n';
code += '<button onClick="adding_done()" class="text-white right-2.5 bottom-2.5 bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"> Cancle </button>\n';
code += '<button onClick="add_bill()" class="text-white right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"> Add </button>\n';
code += '</div>\n';
code += '</div>\n';
code += '</div>\n';
// code += '<div class="bg-[#eff6ff] mt-2 p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">\n';
// code += '<div class="ctop flex justify-between items-center">\n';
// code += '<div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full">Recent</div>\n';
// code += '<div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>\n';
// code += '<div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>\n';
// code += '</div>\n';
// code += '<div class="from-to pt-3 flex justify-evenly font-medium">\n';
// code += '<div class="from">Tiruvuru</div>\n';
// code += '<div class="">-- <i class="text-blue-700 fa fa-motorcycle"></i> --</div>\n';
// code += '<div class="to">Vijayawada</div>\n';
// code += '</div>\n';
// code += '<div class="cbottom pt-3 flex">\n';
// code += '<div class="flex justify-between w-9/12 font-medium">\n';
// code += '<div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>\n';
// code += '<div class="km"></i>25KM</div>\n';
// code += '<div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>\n';
// code += '</div>\n';
// code += '<div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>\n';
// code += '</div>\n';
// code += '</div>\n';
code += Window.recentBill;
code += '</div>';
Swal.fire({
//   title: '<strong>HTML <u>example</u></strong>',
//   icon: '',
  html:code,
    allowOutsideClick: false,
    showConfirmButton: false,

    background: 'transparent'
//   showCloseButton: true,
//   showCancelButton: true,
//   focusConfirm: false,
//   confirmButtonText:
//     '<i class="fa fa-thumbs-up"></i> Great!',
//   confirmButtonAriaLabel: 'Thumbs up, great!',
//   cancelButtonText:
//     '<i class="fa fa-thumbs-down"></i>',
//   cancelButtonAriaLabel: 'Thumbs down'
})
}
</script>
    <script>

        const btn = document.querySelector(".mobile-menu-button");
              const close = document.querySelector(".close");
              const sidebar = document.querySelector(".sidebar");
              // add our event listener for the click
              btn.addEventListener("click", () => {
              sidebar.classList.toggle("-translate-x-full");
              });
              close.addEventListener("click", () => {
              sidebar.classList.add("-translate-x-full");
              });
              close.addEventListener("click", () => {
              sidebar.classList.add("lg:hidden");
              });
              btn.addEventListener("click", () => {
              sidebar.classList.toggle("lg:hidden");
              });
    </script>


<script>
    async function addBillTost(ico,msg)
    {


        Toast.fire({
            icon: ico,
            title: msg
        })


        await sleep(1000);
        toggleModal()
    }


    async function NormalTost(ico,msg)
    {


        Toast.fire({
            icon: ico,
            title: msg
        })

    }
</script>

<script>



    $(document).ready(function(){

    // alert("HI")

    get_bills();

    return false;
    });


    function adding_done()
    {
        Swal.close();
        get_bills();
    }

    function update_pincobde(host,pincode_input)
        {
            if(String(pincode_input).length>5)
            {
                $.ajax({
                type: 'GET',
                url: "https://api.postalpincode.in/pincode/"+pincode_input,

                success:function(data){
                // alert(data);
                if(data[0]['Status']=="Success")
                {
                    var count_text=data[0]['Message'];
                    var str = count_text;
                    var pos = str.search(":");
                    var res = str.substring(pos+1,str.length);
                    var count=parseInt(res);
                    var obj2=data[0]['PostOffice'];
                    var village="";
                    for(i=0;i<count;i++)
                    {
                        village+="<option value="+obj2[i]['Name']+">"+obj2[i]['Name']+"</option>";
                    }

                    var sel= host==1?'#from_place':'#to_place';
                    // console.log(sel)
                    $(sel).html(village);
                }
                else{
                    var sel= host==1?'#from_place':'#to_place';
                    $(sel).html("<option>Enter Valid Pincode</option>");
                }

                //  console.log(data);

                //  console.log(data[0]['Status']);
                }
            });
            }
            else{
                var sel= host==1?'#from_place':'#to_place';
                $(sel).html("<option>Enter Valid Pincode</option>");
            }


        }


        function add_bill()
        {


            var date=$('#date').val();
            var from_pincode=$('#from_pincode').val();
            var to_pincode=$('#to_pincode').val();

            var from_place=$('#from_place').val();
            var to_place=$('#to_place').val();

            var mode = $('input[name="mode"]:checked').val();
            var km = $('#km').val();
            var da = $('#da').val();
            var amount = $('#amount').val();

            recentBillHtml='';
            recentBillHtml += '<div class="bg-[#eff6ff] mt-2 p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">\n';
            recentBillHtml += '<div class="ctop flex justify-between items-center">\n';
            recentBillHtml += '<div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full">Recent</div>\n';
            recentBillHtml += '<div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i>'+date+'</div>\n';
            recentBillHtml += '<div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>\n';
            recentBillHtml += '</div>\n';
            recentBillHtml += '<div class="from-to pt-3 flex justify-evenly font-medium">\n';
            recentBillHtml += '<div class="from">'+from_place+'</div>\n';
            if(mode=="bike")
            {
                recentBillHtml += '<div class="">-- <i class="text-blue-700 fa fa-motorcycle"></i> --</div>\n';

            }
            else{
                recentBillHtml += '<div class="">-- <i class="text-blue-700 fa fa-bus"></i> --</div>\n';
            }

            recentBillHtml += '<div class="to">'+to_place+'</div>\n';
            recentBillHtml += '</div>\n';
            recentBillHtml += '<div class="cbottom pt-3 flex">\n';
            recentBillHtml += '<div class="flex justify-between w-9/12 font-medium">\n';
            recentBillHtml += '<div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>'+da+'/-</div>\n';
            recentBillHtml += '<div class="km"></i>'+km+'KM</div>\n';
            recentBillHtml += '<div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> '+amount+'/-</i></div>\n';
            recentBillHtml += '</div>\n';
            var sum =Number.parseInt(da)+Number.parseInt(amount);
            recentBillHtml += '<div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp'+sum+'/-</div>\n';
            recentBillHtml += '</div>\n';
            recentBillHtml += '</div>\n';

            var surl = "{{ config('app.apiurl') }}addbill?bdate="+date
                +"&bfrompincode="+from_pincode
                +"&bfromplace="+from_place
                +"&btopincode="+to_pincode
                +"&btoplace="+to_place
                +"&bmode="+mode
                +"&bkm="+km
                +"&bda="+da
                +"&bamount="+amount;
            console.log(surl);
            console.log(recentBillHtml);
            Window.recentBill=recentBillHtml;
            $.ajax({
                type: 'GET',
                url: surl,
                success:function(data){
                    // get_recent_bills();

                    addBillTost(data["status"],data["message"]);
                }
            });

        }


        function get_bills()
        {
            var surl = "{{ config('app.apiurl') }}getBills";
            console.log(surl);

            $.ajax({
                type: 'GET',
                url: surl,
                success:function(data){
                    NormalTost(data["status"],data["message"]);
                    $("#billswraper").html(data["data"]);
                },
                statusCode: {
                    500: function() {
                        NormalTost("error","Internal Server Error");
                        $("#billswraper").html("<b>Internal Server Error</b>");
                    }
                }

            });

            get_recent_bills()

        }


        function get_recent_bills()
        {
            var surl = "{{ config('app.apiurl') }}getRecentBill";
            console.log(surl);

            $.ajax({
                type: 'GET',
                url: surl,
                success:function(data){
                    // NormalTost(data["status"],data["message"]);
                    $("#recentBill").html(data["data"]);
                    Window.recentBill=data["data"];
                },
                statusCode: {
                    500: function() {
                        // NormalTost("error","Internal Server Error");
                        // $("#billswraper").html("<b>Internal Server Error</b>");
                        console.log("failed to load recent bill");
                    }
                }

            });

        }


</script>




</body>
</html>
