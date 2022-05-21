
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
            {{ __('Gerer post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @foreach ($posts as $post)
                    @foreach ( $users as $user)
                       @if ($user->id==$post->id_postes)
                       @if (Auth::user()->id==$user->id)
                           
                       
                    <div class="card">
                        <div class="card-header">
                            <div class="text-end">Depart: Le {{$post->date}} a {{$post->heure}}   </div>
                            <div class="text-start">{{$user->nom}} {{$user->prenom}}</div>
                                       
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">Depart : {{$post->depart}}</h5>
                        <h5 class="card-title">Destination : {{$post->arriver}}</h5>
                        <h5 class="card-title">Nombre de place disponible : {{$post->nb_place}}</h5>
                        <div class="text-end">Frait :  {{$post->frais}} TND </div>
                        <a href="{{route('Gerer_post_ajoute',['id'=>$post->id])}}" class="btn btn-danger">Suprimer</a>
                        <!--table de user post-!-->
                        
                        <table class="table table-sm table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Telephone</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php  $m=0;  ?>
                                @foreach ($a_post as $k)
                                @if($k->id_posts==$post->id)
                                <tr>
                                    <?php  $m=$m+1;  ?>
                                <th scope="row">{{$m}}</th>
                                    @foreach ($users as $f )
                                    @if ($k->id_users==$f->id)
                                    <td>{{$f->nom}}</td>
                                    <td>{{$f->prenom}}</td>
                                    <td>{{$f->telephone}}</td>    
                                    @endif  
                                    @endforeach
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    @endif
                    @endif 
                    @endforeach
                    <br>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
