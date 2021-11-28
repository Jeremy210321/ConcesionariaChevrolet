<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function personal()
    {
        $persons =
        [
            ["Nombre"=>'David',
            "Apellido"=>'Cacuango',
            "Contacto"=>'0994697466',
            "Web"=>'https://github.com/David20022502',
            "img"=>'https://avatars.githubusercontent.com/u/66538886?v=4'
         
            ],
            ["Nombre"=>'Denisse',
            "Apellido"=>'Cumbal',
            "Contacto"=>'0995135081',
            "Web"=>'https://github.com/Noe19',
            "img"=>'https://i.ibb.co/ctcpgcr/image.png'
            
            ],
            ["Nombre"=>'Iván',
            "Apellido"=>'Fraga',
            "Contacto"=>'0939338670',
            "Web"=>'https://github.com/ivanfraga',
            "img"=>'https://avatars.githubusercontent.com/u/66655592?v=4 '
          
            ],
            ["Nombre"=>'Daniel',
            "Apellido"=>'Guachamín',
            "Contacto"=>'0998663322',
            "Web"=>'https://github.com/DanielGuachamin',
            "img"=>'https://avatars.githubusercontent.com/u/66534512?v=4 '
          
            ],
            ['Nombre' => 'Jeremy',
            'Apellido' => 'León',
            "Contacto"=>'0984530789',
            "Web"=>'https://github.com/Jeremy210321',
            "img"=>'https://avatars.githubusercontent.com/u/66692550?v=4'
             ],
             ["Nombre"=>'Kevin',
            "Apellido"=>'Pulupa',
            "Contacto"=>'0963024756',
            "Web"=>'https://github.com/Kev-Daniel',
            "img"=>'https://avatars.githubusercontent.com/u/68386574?v=4'
            ],
            ["Nombre"=>'Cindy',
            "Apellido"=>'Yazán',
            "Contacto"=>'0986997371',
            "Web"=>'https://github.com/Cindyk2052',
            "img"=>'https://i.ibb.co/Sc2DV0h/image.png'
            ]
        
        ];


        return view('personal',compact('persons'));
    }
}