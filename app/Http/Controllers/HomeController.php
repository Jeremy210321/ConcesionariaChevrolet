<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $homemodels=[
            [
                "title"=>"Beat",
                "description"=>"Todos tenemos algo que nos mueve por dentro, como aquellos que viajan contigo o todo lo que te gusta. ¿Cuál es el Beat que mueve tu vida? ",
                "image"=>"http://1.bp.blogspot.com/-sQxTUl1ZL5s/U6BdE5KxVwI/AAAAAAAAA-U/GiCSo1dSa0M/s1600/campan%CC%83a-facebook-nuevos-sail-JUNIO.jpg"

            ],
            [
                "title"=>"Mantenimiento",
                "description"=>"Más seguridad para tu familia, por llevar t carro a la revison , tiene un descuento del 25% en cambio de aceite ",
                "image"=>"https://images1.autocasion.com/unsafe/900x600/actualidad/wp-content/uploads/2018/11/Facebook_1200x628px-2.jpg"

            ],[
                "title"=>"Nuevos Modelos",
                "description"=>"Nuca fue tan facil cambiar un vehículo, damos tu carro viejo y por un 30% de credito para un nuevo y más comodo",
                "image"=>"https://media.ultimahora.com/adjuntos/161/imagenes/009/947/0009947014.jpg?0000-00-00-00-00-00"

            ]
            ];
            return view('home',compact('homemodels'));
    }
}
