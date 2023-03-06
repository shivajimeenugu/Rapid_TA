@extends('layouts.app')

@section('content')
<div class=" h-full flex justify-center ">
        <div class=" w-full h-full pb-16 bag">
            <div class="pb-8 mt-4">
                <div class="p-2 px-2 mt-2 ml-4 mr-4 text-2xl  items-center flex justify-between">
                    <button class="mobile-menu-button "><i class="fas fa-align-left"></i></button>
                    <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" href="{{route('logout')}}" class="text-xl font-bold text-gray-700">
                    Sign Out</a>
                </div>
                {{-- <div class="mx-8 mt-8 font-bold text-gray-700">
                    <p class="text-xl">Welcome</p>
                    <p class="text-2xl">{{Auth::user()->name}}</p>
                </div> --}}
            </div>




        </div>

    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection
