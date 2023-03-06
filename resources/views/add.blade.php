@extends('layouts.app')

@section('content')

<div class=" h-full flex justify-center ">
    <div class=" w-full h-full pb-16 bag ">
        <div class="pb-4 mt-4">
            <div class="p-2 px-2 mt-2 ml-4 mr-4 text-2xl  items-center flex justify-between">
                <button class="mobile-menu-button "><i class="fas fa-align-left"></i></button>
                <a onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="#" class="text-xl font-bold text-gray-700">
                Sign Out</a>
            </div>

        </div>

        <div class=" px-5">
            <div class="flex justify-between">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark1:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark1:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark1:bg-gray-700 dark1:border-gray-600 dark1:placeholder-gray-400 dark1:text-white dark1:focus:ring-blue-500 dark1:focus:border-blue-500" placeholder="Search TA" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark1:bg-blue-600 dark1:hover:bg-blue-700 dark1:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                <button type="submit" class="text-white w-[18%]  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-1 dark1:bg-blue-600 dark1:hover:bg-blue-700 dark1:focus:ring-blue-800" onclick="toggleModal()"><i class="fa fa-plus text-[20px]"></i></button>
            </div>
        </div>

        <div class="cardMain flex px-5 pt-2 pb-4 h-[75%]">
            <div class="p-3 cardsWarap overflow-y-auto border-1 rounded-lg border-gray-500 bg-white  h-full drop-shadow-2xl w-full">

                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                    <div class="ctop flex justify-between items-center">
                        <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">1</div>
                        <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>
                        <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                    </div>

                    <div class="from-to pt-3 flex justify-evenly font-medium">
                        <div class="from">Tiruvuru</div>
                        <div class=" ">-- <i class="text-blue-700  fa fa-motorcycle"></i> --</div>
                        <div class="to">Vijayawada</div>
                    </div>

                    <div class="cbottom pt-3 flex">
                        <div class="flex justify-between w-9/12 font-medium">
                            <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>
                            <div class="km"></i>25KM</div>
                            <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>
                        </div>
                        <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>
                    </div>
                </div>

                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                    <div class="ctop flex justify-between items-center">
                        <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">2</div>
                        <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>
                        <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                    </div>

                    <div class="from-to pt-3 flex justify-evenly font-medium">
                        <div class="from">Tiruvuru</div>
                        <div class=" ">-- <i class="text-blue-700  fa fa-motorcycle"></i> --</div>
                        <div class="to">Vijayawada</div>
                    </div>

                    <div class="cbottom pt-3 flex">
                        <div class="flex justify-between w-9/12 font-medium">
                            <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>
                            <div class="km"></i>25KM</div>
                            <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>
                        </div>
                        <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>
                    </div>
                </div>

                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                    <div class="ctop flex justify-between items-center">
                        <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">3</div>
                        <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>
                        <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                    </div>

                    <div class="from-to pt-3 flex justify-evenly font-medium">
                        <div class="from">Tiruvuru</div>
                        <div class=" ">-- <i class="text-blue-700  fa fa-motorcycle"></i> --</div>
                        <div class="to">Vijayawada</div>
                    </div>

                    <div class="cbottom pt-3 flex">
                        <div class="flex justify-between w-9/12 font-medium">
                            <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>
                            <div class="km"></i>25KM</div>
                            <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>
                        </div>
                        <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>
                    </div>
                </div>

                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                    <div class="ctop flex justify-between items-center">
                        <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">4</div>
                        <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>
                        <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                    </div>

                    <div class="from-to pt-3 flex justify-evenly font-medium">
                        <div class="from">Tiruvuru</div>
                        <div class=" ">-- <i class="text-blue-700  fa fa-motorcycle"></i> --</div>
                        <div class="to">Vijayawada</div>
                    </div>

                    <div class="cbottom pt-3 flex">
                        <div class="flex justify-between w-9/12 font-medium">
                            <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>
                            <div class="km"></i>25KM</div>
                            <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>
                        </div>
                        <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>
                    </div>
                </div>

                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                    <div class="ctop flex justify-between items-center">
                        <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">5</div>
                        <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>
                        <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                    </div>

                    <div class="from-to pt-3 flex justify-evenly font-medium">
                        <div class="from">Tiruvuru</div>
                        <div class=" ">-- <i class="text-blue-700  fa fa-motorcycle"></i> --</div>
                        <div class="to">Vijayawada</div>
                    </div>

                    <div class="cbottom pt-3 flex">
                        <div class="flex justify-between w-9/12 font-medium">
                            <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>
                            <div class="km"></i>25KM</div>
                            <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>
                        </div>
                        <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>
                    </div>
                </div>

                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                    <div class="ctop flex justify-between items-center">
                        <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">6</div>
                        <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> 03-04-2023</div>
                        <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                    </div>

                    <div class="from-to pt-3 flex justify-evenly font-medium">
                        <div class="from">Tiruvuru</div>
                        <div class=" ">-- <i class="text-blue-700  fa fa-motorcycle"></i> --</div>
                        <div class="to">Vijayawada</div>
                    </div>

                    <div class="cbottom pt-3 flex">
                        <div class="flex justify-between w-9/12 font-medium">
                            <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>100/-</div>
                            <div class="km"></i>25KM</div>
                            <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> 2000/-</i></div>
                        </div>
                        <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp2125/-</div>
                    </div>
                </div>



            </div>
        </div>

        <div class="flex justify-center items-center py-4 ">
            <button type="submit" class="text-white p-3  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1 dark1:bg-blue-600 dark1:hover:bg-blue-700 dark1:focus:ring-blue-800">Submit To Manager</button>
        </div>

    </div>

</div>

@endsection
