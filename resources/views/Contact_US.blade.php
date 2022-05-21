
<html><head><link rel="stylesheet" href="{{asset('css/app1.css')}}"></head></html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact_US') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($contact as $k)
                    
                    <div class="card">
                        <div class="card-header">
                            
                            <div class="text-start">{{$k->nom}}</div>
                                        
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">Email : {{$k->email}}</h5>
                        <h5 class="card-title">Message : {{$k->message}}</h5>
                    <br>
                    
                    
                         </div>
                         @endforeach
                         <br>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
