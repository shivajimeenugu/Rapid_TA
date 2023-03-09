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
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <script src="https://cdn.tailwindcss.com"></script>
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
code += '<i id="from_pincode_refresh_logo" class="fa fa-redo-alt"></i>\n';
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
code += '<i id="to_pincode_refresh_logo" class="fa fa-redo-alt"></i>\n';
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
code += '<input  class="opacity-0" type="radio" id="mode_bike" name="mode" value="bike" >\n';
code += '<label  id="bike_lable" class="rounded px-3 py-2 items-center flex " for="mode_bike"><i class="fa fa-motorcycle"></i></label>\n';
code += '</div>\n';
code += '<div class="">\n';
code += '<input  class="opacity-0" type="radio" id="mode_bus" name="mode" value="bus">\n';
code += '<label  id="bus_lable" class="rounded px-3 py-2 items-center flex" for="mode_bus"><i class="fa fa-bus"></i></label>\n';
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
code +=  '<div id="model_error"></div>\n';
code += '<div class="flex justify-between px-5">\n';
code += '<button onClick="adding_done()" class="text-white right-2.5 bottom-2.5 bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"> Cancle </button>\n';
code += '<button id="addBillBtn" onClick="add_bill()" class="text-white right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"> Add </button>\n';
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
code += '<div id="recentBillDiv"></div>';
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
    Window.modelerrorcount=0;
    get_bills();

    return false;
    });


    function adding_done()
    {
        Swal.close();
        get_bills();
    }

    // function mode_style(btn)
    // {
    //     if(btn=="bike_lable")
    //     {
    //         console
    //         $("bus-lable").removeClass().addClass("text-[#545454]");
    //         $(btn).addClass("bg-blue-7000 text-white");
    //     }
    //     else if(btn=="bus_lable")
    //     {
    //         $("bike-lable").removeClass().addClass("text-[#545454]");
    //         $(btn).addClass("bg-blue-7000 text-white");
    //     }
    //     else{

    //     }

    // }
    function update_pincobde(host,pincode_input)
        {
            if(String(pincode_input).length>5)
            {
                $.ajax({
                type: 'GET',
                url: "https://api.postalpincode.in/pincode/"+pincode_input,
                beforeSend: function() {
                    // Show a loading message or perform other setup actions
                    var sel_logo= host==1?'#from_pincode_refresh_logo':'#to_pincode_refresh_logo';
                    // console.log(sel)
                    $(sel_logo).addClass("animate-spin");

                },
                success:function(data){
                // alert(data);
                if(data[0]['Status']=="Success")
                {
                    var sel_logo= host==1?'#from_pincode_refresh_logo':'#to_pincode_refresh_logo';
                    // console.log(sel)
                    $(sel_logo).removeClass("animate-spin");


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
                    $(sel).html("<option>Enter Valid Pincode😒</option>");
                }

                //  console.log(data);

                //  console.log(data[0]['Status']);
                }
            });
            }
            else{
                var sel= host==1?'#from_place':'#to_place';
                $(sel).html("<option>Enter Valid Pincode😒</option>");
            }


        }


        function add_bill()
        {

            console.log("Adding Bill");
            var date=$('#date').val();
            var from_pincode=$('#from_pincode').val();
            var to_pincode=$('#to_pincode').val();

            var from_place=$('#from_place').val();
            var to_place=$('#to_place').val();

            var mode = $('input[name="mode"]:checked').val();
            var km = $('#km').val();
            var da = $('#da').val();
            var amount = $('#amount').val();

            if(date=="" || from_pincode=="" || to_pincode=="" || from_place==""|| to_place=="" || mode==undefined || mode=="" || mode==null  || km=="" || amount=="" )
            {
                console.log("[blank field] Adding Bill");
                $("#model_error").show();
                $("#model_error").html("Must Fill All Fields [MSG_ID:<b>"+Window.modelerrorcount+"</b>]");
                Window.modelerrorcount=Window.modelerrorcount+1;
            }
            else{
                $("#model_error").hide();
            // recentBillHtml='';
            // recentBillHtml += '<div class="bg-[#eff6ff] mt-2 p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">\n';
            // recentBillHtml += '<div class="ctop flex justify-between items-center">\n';
            // recentBillHtml += '<div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full">Recent</div>\n';
            // recentBillHtml += '<div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i>'+date+'</div>\n';
            // recentBillHtml += '<div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>\n';
            // recentBillHtml += '</div>\n';
            // recentBillHtml += '<div class="from-to pt-3 flex justify-evenly font-medium">\n';
            // recentBillHtml += '<div class="from">'+from_place+'</div>\n';
            // if(mode=="bike")
            // {
            //     recentBillHtml += '<div class="">-- <i class="text-blue-700 fa fa-motorcycle"></i> --</div>\n';

            // }
            // else{
            //     recentBillHtml += '<div class="">-- <i class="text-blue-700 fa fa-bus"></i> --</div>\n';
            // }

            // recentBillHtml += '<div class="to">'+to_place+'</div>\n';
            // recentBillHtml += '</div>\n';
            // recentBillHtml += '<div class="cbottom pt-3 flex">\n';
            // recentBillHtml += '<div class="flex justify-between w-9/12 font-medium">\n';
            // recentBillHtml += '<div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>'+da+'/-</div>\n';
            // recentBillHtml += '<div class="km"></i>'+km+'KM</div>\n';
            // recentBillHtml += '<div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> '+amount+'/-</i></div>\n';
            // recentBillHtml += '</div>\n';
            // var sum =Number.parseInt(da)+Number.parseInt(amount);
            // recentBillHtml += '<div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp'+sum+'/-</div>\n';
            // recentBillHtml += '</div>\n';
            // recentBillHtml += '</div>\n';

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
            // console.log(recentBillHtml);
            // Window.recentBill=recentBillHtml;
            $.ajax({
                type: 'GET',
                url: surl,
                beforeSend: function() {
                    document.getElementById("addBillBtn").disabled = true;
                    // Show a loading message or perform other setup actions
                    $('#addBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-orange-700 border border-orange-700 rounded appearance-none cursor-pointer select-none hover:border-orange-800 hover:bg-orange-800 focus:border-orange-300 focus:outline-none focus:ring-2 focus:ring-orange-300 disabled:pointer-events-none disabled:opacity-75');
                    $('#addBillBtn').html('<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-spin" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" /></svg><span>Adding</span>');
                },
                success:function(data){
                console.log(data);

                    // get_recent_bills();
                    document.getElementById("addBillBtn").disabled = false;
                    if(data["status"]=="success")
                    {
                        $('#recentBillDiv').html(data["data"]);
                        $('#date').val("");
                        $('#from_pincode').val("");
                        $('#to_pincode').val("");

                        $('#from_place').val("");
                        $('#to_place').val("");

                        // $('input[name="mode"]:checked').val("");
                        // $('input:radio[name="mode"]').attr('checked', false);


                        $('#km').val("");
                        $('#da').val("");
                        $('#amount').val("");

                        $('#addBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-green-700 border border-green-700 rounded appearance-none cursor-pointer select-none hover:border-green-800 hover:bg-green-800 focus:border-green-300 focus:outline-none focus:ring-2 focus:ring-green-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#addBillBtn').html('<i class="fa fa-check"></i><span>Done</span>');

                        setTimeout(function() {
                            $('#addBillBtn').removeClass().addClass('text-white right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2');
                            $('#addBillBtn').html('Add');
                        }, 3000);
                    }
                    else if(data["status"]=="warning")
                    {
                        $('#addBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-yellow-700 border border-yellow-700 rounded appearance-none cursor-pointer select-none hover:border-yellow-800 hover:bg-yellow-800 focus:border-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#addBillBtn').html('<i class="fa fa-exclamation"></i><span>Retry</span>');
                    }
                    else if(data["status"]=="error")
                    {
                        $('#addBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-red-700 border border-red-700 rounded appearance-none cursor-pointer select-none hover:border-red-800 hover:bg-red-800 focus:border-red-300 focus:outline-none focus:ring-2 focus:ring-red-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#addBillBtn').html('<i class="fa fa-exclamation"></i><span> Error Retry</span>');

                    }


                    // addBillTost(data["status"],data["message"]+" 👍");
                },

                statusCode: {
                    500: function() {
                        document.getElementById("addBillBtn").disabled = false;
                        // $("#billswraper").html("<b>Internal Server Error 😑</b>");
                        $('#addBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-red-700 border border-red-700 rounded appearance-none cursor-pointer select-none hover:border-red-800 hover:bg-red-800 focus:border-red-300 focus:outline-none focus:ring-2 focus:ring-red-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#addBillBtn').html('<i class="fa fa-exclamation"></i></i><span>Server Error Retry</span>');
                    }
                }




            });
            }



        }



        function update_bill(id)
        {

            console.log("Updating Bill");
            var date=$('#date').val();
            var from_pincode=$('#from_pincode').val();
            var to_pincode=$('#to_pincode').val();

            var from_place=$('#from_place').val();
            var to_place=$('#to_place').val();

            var mode = $('input[name="mode"]:checked').val();
            var km = $('#km').val();
            var da = $('#da').val();
            var amount = $('#amount').val();

            if(date=="" || from_pincode=="" || to_pincode=="" || from_place==""|| to_place=="" || mode==undefined || mode=="" || mode==null  || km=="" || amount=="" )
            {
                console.log("[blank field] Adding Bill");
                $("#model_error").show();
                $("#model_error").html("Must Fill All Fields [MSG_ID:<b>"+Window.modelerrorcount+"</b>]");
                Window.modelerrorcount=Window.modelerrorcount+1;
            }
            else{
                $("#model_error").hide();


            var surl = "{{ config('app.apiurl') }}updateBill?bdate="+date
                +"&bfrompincode="+from_pincode
                +"&bfromplace="+from_place
                +"&btopincode="+to_pincode
                +"&btoplace="+to_place
                +"&bmode="+mode
                +"&bkm="+km
                +"&bda="+da
                +"&bamount="+amount
                +"&id="+id
                ;
            console.log(surl);
            // console.log(recentBillHtml);
            // Window.recentBill=recentBillHtml;
            $.ajax({
                type: 'GET',
                url: surl,
                beforeSend: function() {
                    document.getElementById("updateBillBtn").disabled = true;
                    // Show a loading message or perform other setup actions
                    $('#updateBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-orange-700 border border-orange-700 rounded appearance-none cursor-pointer select-none hover:border-orange-800 hover:bg-orange-800 focus:border-orange-300 focus:outline-none focus:ring-2 focus:ring-orange-300 disabled:pointer-events-none disabled:opacity-75');
                    $('#updateBillBtn').html('<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-spin" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" /></svg><span>Updating</span>');
                },
                success:function(data){
                console.log(data);

                    // get_recent_bills();
                    document.getElementById("updateBillBtn").disabled = false;
                    if(data["status"]=="success")
                    {
                        // $('#recentBillDiv').html(data["data"]);

                        $('#updateBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-green-700 border border-green-700 rounded appearance-none cursor-pointer select-none hover:border-green-800 hover:bg-green-800 focus:border-green-300 focus:outline-none focus:ring-2 focus:ring-green-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#updateBillBtn').html('<i class="fa fa-check"></i><span>Done</span>');

                        setTimeout(function() {
                            NormalTost(data["status"],data["message"])
                        }, 2000);

                        $('#editbtn_'+id).removeClass().addClass('mx-2 fa fa-pen text-green-700 font-medium');
                        adding_done();
                    }
                    else if(data["status"]=="warning")
                    {
                        $('#updateBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-yellow-700 border border-yellow-700 rounded appearance-none cursor-pointer select-none hover:border-yellow-800 hover:bg-yellow-800 focus:border-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#updateBillBtn').html('<i class="fa fa-exclamation"></i><span>Retry</span>');
                    }
                    else if(data["status"]=="error")
                    {
                        $('#updateBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-red-700 border border-red-700 rounded appearance-none cursor-pointer select-none hover:border-red-800 hover:bg-red-800 focus:border-red-300 focus:outline-none focus:ring-2 focus:ring-red-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#updateBillBtn').html('<i class="fa fa-exclamation"></i><span> Error Retry</span>');

                    }


                    // addBillTost(data["status"],data["message"]+" 👍");
                },

                statusCode: {
                    500: function() {
                        document.getElementById("updateBillBtn").disabled = false;
                        // $("#billswraper").html("<b>Internal Server Error 😑</b>");
                        $('#updateBillBtn').removeClass().addClass('inline-flex items-center justify-center w-auto px-3 py-2 space-x-2 text-sm font-medium text-white transition bg-red-700 border border-red-700 rounded appearance-none cursor-pointer select-none hover:border-red-800 hover:bg-red-800 focus:border-red-300 focus:outline-none focus:ring-2 focus:ring-red-300 disabled:pointer-events-none disabled:opacity-75');
                        $('#updateBillBtn').html('<i class="fa fa-exclamation"></i></i><span>Server Error Retry</span>');
                    }
                }




            });
            }



        }





        function edit_bill(anthanaistam)
        {
            var getBillById_URL = "{{ config('app.apiurl') }}getBillById?id="+anthanaistam;
            // alert(anthanaistam);
            $.ajax({
                type: 'GET',
                url: getBillById_URL,
                beforeSend: function() {
                    // Show a loading message or perform other setup actions
                    $('#editbtn_'+anthanaistam).removeClass().addClass('mx-2 fa fa-sync-alt animate-spin text-blue-700 font-medium');
                    // $('#editbtn_'+anthanaistam).html('<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-spin" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" /></svg><span>Adding</span>');
                },
                success:function(data){
                    console.log(data);
                    var edit_model_code = '<div class="fmain">\n';
                    edit_model_code += '<div class="fwraper bg-[#eff6ff] py-5 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">\n';
                    edit_model_code += '<div class="fhead rounded-sm flex justify-center items-center text-white bg-blue-700">\n';
                    edit_model_code += '<div class="shadow font-medium">Edit TA</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="fbody mt-1 px-5">\n';
                    edit_model_code += '<div class="flex-cols">\n';
                    edit_model_code += '<div class="">Enter Date</div>\n';
                    edit_model_code += '<input class="outline-none p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="date" name="date" id="date" value="'+data["data"].bdate+'" required>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex flex-col mt-1">\n';
                    edit_model_code += '<div class="">Enter From</div>\n';
                    edit_model_code += '<div class="flex justify-evenly">\n';
                    edit_model_code += '<div class="items-center flex">\n';
                    edit_model_code += '<label for="from_mode">Pincode&nbsp</label>\n';
                    edit_model_code += '<input type="radio" name="from_mode" id="from_mode" checked></div>\n';
                    edit_model_code += '<div class="">\n';
                    edit_model_code += '<label for="from_mode">Name&nbsp</label>\n';
                    edit_model_code += '<input type="radio" name="from_mode" id="from_mode" disabled></div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex gap-y-1 flex-col">\n';
                    edit_model_code += '<div class="flex">\n';
                    edit_model_code += '<div class="relative w-full">\n';
                    edit_model_code += '<input value="'+data["data"].bfrompincode+'"  onkeyup="update_pincobde(1,this.value)" type="number" id="from_pincode" name="from_pincode" class="block p-1 w-full text-sm outline-none rounded-r-lg rounded-l-lg border-[1px] border-blue-500 hover:border-blue-700" required>\n';
                    edit_model_code += '<button id="from_pincode_refresh" class="absolute top-0 right-0 p-1 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">\n';
                    edit_model_code += '<i id="from_pincode_refresh_logo" class="fa fa-redo-alt"></i>\n';
                    edit_model_code += '</button>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<select name="from_place" id="from_place" class="outline-none p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700">\n';
                    edit_model_code += '<option value="'+data["data"].bfromplace+'" selected >'+data["data"].bfromplace+'</option>\n';
                    edit_model_code += '</select>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex flex-col mt-1">\n';
                    edit_model_code += '<div class="">Enter To</div>\n';
                    edit_model_code += '<div class="flex justify-evenly">\n';
                    edit_model_code += '<div class="items-center flex">\n';
                    edit_model_code += '<label for="to_mode">Pincode&nbsp</label>\n';
                    edit_model_code += '<input type="radio" name="to_mode" id="to_mode" checked required></div>\n';
                    edit_model_code += '<div class="">\n';
                    edit_model_code += '<label for="to_mode">Name&nbsp</label>\n';
                    edit_model_code += '<input type="radio" name="to_mode" id="to_mode" disabled required></div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex gap-y-1 flex-col">\n';
                    edit_model_code += '<div class="flex">\n';
                    edit_model_code += '<div class="relative w-full">\n';
                    edit_model_code += '<input value="'+data["data"].btopincode+'" onkeyup="update_pincobde(2,this.value)" type="number" id="to_pincode" name="to_pincode" class="block p-1 w-full text-sm outline-none rounded-r-lg rounded-l-lg border-[1px] border-blue-500 hover:border-blue-700" required>\n';
                    edit_model_code += '<button  id="to_pincode_refresh" class="absolute top-0 right-0 p-1 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">\n';
                    edit_model_code += '<i id="to_pincode_refresh_logo" class="fa fa-redo-alt"></i>\n';
                    edit_model_code += '</button>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<select name="to_place" id="to_place" class="outline-none p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700">\n';
                    edit_model_code += '<option value="'+data["data"].btoplace+'" selected>'+data["data"].btoplace+'</option>\n';
                    edit_model_code += '</select>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex-cols mt-1 w-full">\n';
                    edit_model_code += '<div class="">Select Mode</div>\n';
                    edit_model_code += '<div class="flex radio-toolbar justify-evenly">\n';

                    if(data["data"].bmode =="bike")
                    {
                        edit_model_code += '<div class="">\n';
                        edit_model_code += '<input  class="opacity-0" type="radio" id="mode_bike" name="mode" value="bike" checked>\n';
                        edit_model_code += '<label  id="bike_lable" class="rounded px-3 py-2 items-center flex " for="mode_bike"><i class="fa fa-motorcycle"></i></label>\n';
                        edit_model_code += '</div>\n';

                        edit_model_code += '<div class="">\n';
                        edit_model_code += '<input  class="opacity-0" type="radio" id="mode_bus" name="mode" value="bus">\n';
                        edit_model_code += '<label  id="bus_lable" class="rounded px-3 py-2 items-center flex" for="mode_bus"><i class="fa fa-bus"></i></label>\n';
                        edit_model_code += '</div>\n';

                    }
                    else if(data["data"].bmode =="bus")
                    {
                        edit_model_code += '<div class="">\n';
                        edit_model_code += '<input  class="opacity-0" type="radio" id="mode_bike" name="mode" value="bike" >\n';
                        edit_model_code += '<label  id="bike_lable" class="rounded px-3 py-2 items-center flex " for="mode_bike"><i class="fa fa-motorcycle"></i></label>\n';
                        edit_model_code += '</div>\n';

                        edit_model_code += '<div class="">\n';
                        edit_model_code += '<input  class="opacity-0" type="radio" id="mode_bus" name="mode" value="bus" checked>\n';
                        edit_model_code += '<label  id="bus_lable" class="rounded px-3 py-2 items-center flex" for="mode_bus"><i class="fa fa-bus"></i></label>\n';
                        edit_model_code += '</div>\n';
                    }
                    else{

                        edit_model_code += '<div class="">\n';
                        edit_model_code += '<input  class="opacity-0" type="radio" id="mode_bike" name="mode" value="bike" >\n';
                        edit_model_code += '<label  id="bike_lable" class="rounded px-3 py-2 items-center flex " for="mode_bike"><i class="fa fa-motorcycle"></i></label>\n';
                        edit_model_code += '</div>\n';

                        edit_model_code += '<div class="">\n';
                        edit_model_code += '<input  class="opacity-0" type="radio" id="mode_bus" name="mode" value="bus" >\n';
                        edit_model_code += '<label  id="bus_lable" class="rounded px-3 py-2 items-center flex" for="mode_bus"><i class="fa fa-bus"></i></label>\n';
                        edit_model_code += '</div>\n';
                    }





                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex-cols mt-1 w-full">\n';
                    edit_model_code += '<div class="">Enter KM</div>\n';
                    edit_model_code += '<input value="'+data["data"].bkm+'" class="outline-none block w-full p-1 rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="number" name="km" id="km">\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex-cols mt-1">\n';
                    edit_model_code += '<div class="">Enter DA</div>\n';
                    edit_model_code += '<input value="'+data["data"].bda+'" class="outline-none p-1 block w-full rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="number" name="da" id="da">\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="flex-cols mt-1">\n';
                    edit_model_code += '<div class="">Enter Amount</div>\n';
                    edit_model_code += '<input value="'+data["data"].bamount+'" class="outline-none p-1 block w-full rounded-md border-[1px] border-blue-500 hover:border-blue-700" type="number" name="amount" id="amount">\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '<div class="ffoter pt-3">\n';
                    edit_model_code +=  '<div id="model_error" class="bg-red-500 text-white font-bold" ></div>\n';
                    edit_model_code += '<div class="flex justify-between px-5">\n';
                    edit_model_code += '<button onClick="adding_done()" class="text-white right-2.5 bottom-2.5 bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"> Cancle </button>\n';
                    edit_model_code += '<button id="updateBillBtn" onClick="update_bill(\''+anthanaistam+'\')" class="text-white right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"> Update </button>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    edit_model_code += '</div>\n';
                    // edit_model_code += '<div id="recentBillDiv"></div>';
                    edit_model_code += '</div>';
                    Swal.fire({
                    html:edit_model_code,
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        background: 'transparent'
                    })
                },
                statusCode: {
                    500: function() {
                        $('#editbtn_'+anthanaistam).removeClass().addClass('mx-2 fa fa-sync-alt text-red-700 font-medium');
                        NormalTost("error","Internal Server Error 😑");
                        // $("#billswraper").html("<b>Internal Server Error 😑</b>");
                    }
                }

            });
        }



        function delete_bill(anthanaistam)
        {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                        var deleteBill_URL = "{{ config('app.apiurl') }}deleteBill?id="+anthanaistam;
                        $.ajax({
                        type: 'GET',
                        url: deleteBill_URL,
                        beforeSend: function() {
                            // Show a loading message or perform other setup actions
                            $('#deletebtn_'+anthanaistam).removeClass().addClass('mx-2 fa fa-sync-alt animate-spin text-blue-700 font-medium');
                            // $('#editbtn_'+anthanaistam).html('<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-spin" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" /></svg><span>Adding</span>');
                        },
                        success:function(data){
                            get_bills();
                            console.log(data);
                            Swal.fire(
                            'Deleted!',
                            'Your recoed has been deleted.',
                            'success'
                            )
                        },
                        statusCode: {
                            500: function() {
                                $('#deletebtn_'+anthanaistam).removeClass().addClass('mx-2 fa fa-sync-alt text-red-700 font-medium');
                                NormalTost("error","Internal Server Error 😑");
                                // $("#billswraper").html("<b>Internal Server Error 😑</b>");
                            }
                        }

                    });
                }
                })




        }

        function get_bills()
        {
            var surl = "{{ config('app.apiurl') }}getBills";
            console.log(surl);
            $("#billswraper").html("<b>Bills Loading..😇</b>");
            $.ajax({
                type: 'GET',
                url: surl,
                success:function(data){
                    // NormalTost(data["status"],data["message"]);
                    $("#billswraper").html(data["data"]);
                },
                statusCode: {
                    500: function() {
                        NormalTost("error","Internal Server Error 😑");
                        $("#billswraper").html("<b>Internal Server Error 😑</b>");
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
