<x-app-layout>
   
    <div class=" bg-white mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
      
            <div class=" shadow-2xl gap-4">
            
                    @foreach ($beneficios as $beneficio)
                        <div>
                            <h1 class="text-4x1 leading-8 font-bold">{{$beneficio->nombre}}</h1>
                        </div>

                        <div>
                        <h1>Descripcion: {{$beneficio->descripcion}}</h1>
                        </div> 

                        <div>
                        <h1>beneficio disponible todos los {{$beneficio->dia->dia}}</h1>
                        </div>

                        <div>
                        <h1>Descuento: {{$beneficio->descuento}}</h1>
                        </div>

                        <article class="w-full h-80 bg-cover bg-center">
                        <img src="{{Storage::url($beneficio->image->url)}}" alt="hola">
                        </article>
                    @endforeach 
            </div>
            
          
    </div>

  
    </x-app-layout>  