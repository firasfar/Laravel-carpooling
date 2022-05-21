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
            {{ __('Ajoute Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('Ajoute_Post') }}"> 
                        @csrf
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">Depart</label>
                          <input type="text" class="form-control" id="validationCustom01"  required placeholder="nom de depart" name="depart">
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Arriver</label>
                          <input type="text" class="form-control" id="validationCustom02"  required placeholder="nom de arriver" name="arriver">
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustomUsername" class="form-label">Date de depart</label>
                          <div class="input-group has-validation">
                            
                            <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="date">
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Heure</label>
                            <input type="time" class="form-control" id="validationCustom01" required name="heure">
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Frais de covoiturege par presonne</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="10 TND" required name="frais">
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Nombre de place disponible dans voiture</label>
                            <div class="input-group has-validation">
                              
                              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="4" name="nb_place">
                              <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">posté</button>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
