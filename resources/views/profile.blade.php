
<html><head><link rel="stylesheet" href="{{asset('css/app1.css')}}"></head>
<body>
  <script src="{{asset('js/app1.js')}}"></script>
</body></html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-3 row">
                      <table><tr><td><img src="{{Storage::url(Auth::user()->image)}}" class="rounded float-start" width="200" height="200"></td><td></td></tr></table>
                      
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->nom}}">
                        </div>
                        <label for="staticEmail" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->prenom}}">
                        </div>
                        <label for="staticEmail" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->telephone}}">
                        </div>
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->email}}">
                        </div>
                        <label for="staticEmail" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->role}}">
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
