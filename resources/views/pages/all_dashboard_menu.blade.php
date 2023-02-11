<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashbords</h2>
    </x-slot>
    <style>
    .dashboard_menu_head{
        padding: 5px;
    }
    .dashboard_menu{
        border: 1px solid #818cf8;
        border-radius: 5px;
        padding: 40px 5px;
        margin: 10px 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 25px;
    }
    .dashboard_menu:hover{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard_menu_head bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('code.dashboard')}}" class="dashboard_menu"><h1>Code Example</h1></a>
                <a href="{{route('code.dashboard')}}" class="dashboard_menu"><h1>Code Example</h1></a>
                <a href="{{route('code.dashboard')}}" class="dashboard_menu"><h1>Code Example</h1></a>
                <a href="{{route('code.dashboard')}}" class="dashboard_menu"><h1>Code Example</h1></a>
            </div>
        </div>
    </div>
</x-app-layout>