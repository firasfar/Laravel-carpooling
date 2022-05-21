
<html><head><link rel="stylesheet" href="{{asset('css/app1.css')}}"></head></html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($posts as $post)
                    @foreach ( $users as $user)
                       @if ($user->id==$post->id_postes)
                    <div class="card">
                        <div class="card-header">
                            <div class="text-end">Depart: Le {{$post->date}} a {{$post->heure}}   </div>
                            <div class="text-start">{{$user->nom}} {{$user->prenom}}</div>
                                        
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">Depart : {{$post->depart}}</h5>
                        <h5 class="card-title">Destination : {{$post->arriver}}</h5>
                        <?php $m=0; 
                          $touve=0?>
                        @foreach ( $a_post as $k)
                           @if ($k->id_posts==$post->id)
                           @if ($m<=$post->nb_place)
                           <?php  $m=$m+1; 
                            if(Auth::user()->id==$k->id_users){$touve=1;}?>    
                           @endif
                           @endif 
                        @endforeach
                        <h5 class="card-title">Nombre de place disponible : {{$m}} / {{$post->nb_place}}</h5>
                        <div class="text-end">Frait :  {{$post->frais}} TND </div>
                        @if ($m>=$post->nb_place)
                        <div class="alert alert-danger" role="alert">Nombre de place compler</div>  
                        @else
                        @if($touve==1)
                        <div class="alert alert-success" role="alert">Felisitation tu as reserver une place</div> 
                        @else
                        @if(Auth::user()->id!=$post->id_postes)
                        
                        <a href="{{route('reserver_une_place',['k'=>$post->id,'m'=>$m])}}" class="btn btn-primary">Reservé une place</a>
                        @endif
                        @endif
                        <?php $touve=0?>
                        @endif
                        </div>
                    </div>
                    @endif 
                    @endforeach
                    <br>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
