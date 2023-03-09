@extends('layouts.app')

@section('content')

<div class=" h-full justify-center ">
    <div class=" w-full h-full   pb-16  ">
        <div class="pb-4 pt-4">
            <div class="py-2 px-2 ml-4 mr-4 text-2xl  items-center flex justify-between">
                <button class="mobile-menu-button "><i class="fas fa-align-left"></i></button>

                {{-- <a onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="#" class="text-xl font-bold text-gray-700">
                Sign Out</a> --}}
                <i onclick="location.reload()" class="p-2 bg-white text-blue-700 rounded-full shadow-xl hover:bg-blue-700 hover:text-white hover:animate-spin"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" /></svg></i>
            </div>

        </div>

        <div class=" px-5 pb-2">
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

        <div id="billswraper" class=" hover1:bg-[#dbeafe] bg-white mx-3  h-[63vh]  rounded-xl overflow-x-auto  px-5 pt-2 pb-4 ">


            <b>Bills Loading..</b>
            {{-- <div id="billswraper2" class="p-3 overflow-hidden h-3/12 bg-green-500  border-1 rounded-lg border-gray-500    drop-shadow-2xl w-full">

            </div> --}}
        </div>

        <div class="flex justify-center items-center py-4 ">
            <button type="submit" class="text-white p-3  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm dark1:bg-blue-600 dark1:hover:bg-blue-700 dark1:focus:ring-blue-800">Submit To Manager</button>
        </div>

    </div>

</div>

@endsection
