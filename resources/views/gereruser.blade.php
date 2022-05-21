@if (Auth::user()->role=='super_user'||Auth::user()->role=='admin_user')
<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    </head>
    <body>
        <script src="{{asset('js/app1.js')}}"></script>
    </body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gerer User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo de profile</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $m=0?>
                            @foreach ($users as $l )
                            @if($l->id!=Auth::user()->id && $l->role!='super_user')
                            <tr>
                                <?php $m = $m + 1?>
                                <th scope ="row">{{$m}}</th>
                                <td><img src="{{Storage::url($l->image)}}" class="rounded float-start" width="50" height="50"></td>
                                <td>{{$l->nom}}</td>
                                <td>{{$l->prenom}}</td>
                                <td>{{$l->telephone}}</td>
                                <td>{{$l->email}}</td>
                                <td>{{$l->role}}</td>
                                @if (Auth::user()->role=='super_user')
                                <td><a href="{{route('Gerer_user_modifier',['id'=>$l->id])}}" class="btn btn-success">Modifier</a></td>
                                @endif
                                
                                <td><a href="{{route('Gerer_user_suprimer',['id'=>$l->id])}}" class="btn btn-danger">Suprimer</a></td>
                              </tr> 
                              @endif  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif