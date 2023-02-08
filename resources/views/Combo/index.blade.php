<x-app-layout>
    <div class=" bg-red-100 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
   
        <div class="grid grid-cols-10 gap-4 ">
            
        
            <div class=" col-span-7 p-3  shadow-lg">  

                <img class="float-left object-scale-down h-60 w-40" src="https://media.istockphoto.com/id/1015667456/es/foto/barcelona-espa%C3%B1a-hermosa-vista-colorido-del-parque-guell-la-creaci%C3%B3n-del-gran-arquitecto.jpg?s=612x612&w=0&k=20&c=H_No3BVb_7fXzpGL0LE8KMFS5e_mUgNlf7UtYivNUqo="> <p class="ml-3">
                
                        
                @foreach ($combos as $combo)
                    <div class="text-lg text-red-900 leading-8 font-bold">  {{$combo->nombre}} </div>
                    
                    <div> <a class="leading-2 font-bold ">Descripcion: </a> {{$combo->descripcion}}</div> 

                    <div>  <a class="leading-2 font-bold "> Precio: </a> {{$combo->precio}} </div>

                  </p>
                        
                   

                @endforeach 
            </div>

            <div class=" col-span-3 shadow-lg">

            </div>
     
        </div>

    </div>

</x-app-layout>  