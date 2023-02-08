<x-app-layout>
    <div class="bg-white mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
        
        <div class="grid  gap-4">
                @foreach ($horarios as $horario)
                    <div class="row">
                        <h1 class="text-4x1 leading-8 font-bold">
                            Funciones: <br>
                            {{$horario->pelicula->nombre}}:
                        {{$horario->dia->dia}} {{$horario->hora->hora}}
                        </a>
               
    </div>

                @endforeach 


    </div>
    </x-app-layout>  