<x-app-layout>
    <x-slot name="header">
        <h2>
           <strong> {{ __('Phone') }}<span style="color: #e99c2e;">{{'Bin'}}</span></strong>
        </h2>
    </x-slot>

    <div class="container">
                @yield('content')
        
</x-app-layout>