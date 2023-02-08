<x-app-layout>
    @php
   
    // SDK de Mercado Pago
    require base_path('/vendor/autoload.php');

    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 75.56;
    $preference->items = array($item);

    $preference->back_urls = array(
        "success" => "https://www.tu-sitio/success",
        "failure" => "http://www.tu-sitio/failure",
        "pending" => "http://www.tu-sitio/pending"
    );
    $preference->auto_return = "approved";

    $preference->save();

    @endphp
    <div class="bg-white mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
        
        <div class="grid  gap-4 shadow-2xl">
                @foreach ($peliculas as $pelicula)
                    <div>
                        <h1 class="text text-2xl text-gray-600 leading-8 font-bold">
                        <a href="{{route('Cartelera.show', $pelicula)}}">
                            {{$pelicula->nombre}}
                        </a></h1>
                        <article class="w-full h-80 bg-cover bg-center">
                        <img src="{{Storage::url($pelicula->image->url)}}" alt="hola">
                    </article>
                    </div>
                    
                    
                @endforeach 
        </div>
        <div class="cho-container">
            
        </div>
    </div>
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
    const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
        locale: 'es-AR'
    });

    mp.checkout({
        preference: {
        id: '{{ $preference->id }}'
        },
        render: {
        container: '.cho-container',
        label: 'Pagar',
        }
    });

    </script>
</x-app-layout>  