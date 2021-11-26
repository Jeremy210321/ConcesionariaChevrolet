<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $autos = [
        [
            "Nombre"=>'86',
            "Precio"=>'27,060',
            "Descripcion"=>'Explora la figura aerodinámica sofisticada y deportiva de este auto de Toyota. Checa las ruedas de aleación de 18 plg y el Sistema de Escape de Rendimiento TRD.',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2020/86/base.png?bg=fff&fm=webp&q=90&w=768'
        ],[
            "Nombre"=>'Avalon',
            "Precio"=>'36,125',
            "Descripcion"=>'Este Toyota tiene un rendimiento excepcional con su Suspensión de Adaptación Variable (AVS) disponible y motor V6 de 3.5L y 301 hp. Con Toyota Safety Sense P (TSS-P)',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/avalon/base.png?bg=fff&fm=webp&q=90&w=768'

        ],[
            "Nombre"=>'Avalon Hybrid',
            "Precio"=>'37,100',
            "Descripcion"=>'Este auto de Toyota tiene un tren de tracción híbrido y una imagen tan impresionante que llama la atención a donde vayas.',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/avalonhybrid/base.png?bg=fff&fm=webp&q=90&w=768'

        ],
        [
            "Nombre"=>'Camry ',
            "Precio"=>'25,045 ',
            "Descripcion"=>'Hazte notar con este auto de Toyota, conocido por su impresionante y elegante diseño exterior. Y conecta tu iPhone  compatible con la nueva integración de Apple CarPlay  de Toyota.',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/camry/base.png?bg=fff&fm=webp&q=90&w=768'
        ],[
            "Nombre"=>'Camry Hybrid ',
            "Precio"=>'27,270',
            "Descripcion"=>'Eficiencia y lujo. Este auto de Toyota ecológico avanzado viene con motor Dynamic Force y con función Apple CarPlay  incluida. Todo con el inconfundible diseño y estilo híbrido.',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/camryhybrid/base.png?bg=fff&fm=webp&q=90&w=768'

        ],[
            "Nombre"=>'Corolla Hatchback',
            "Precio"=>'20,715',
            "Descripcion"=>'Con este auto de Toyota tienes la diversión asegurada. Viene con una suspensión totalmente nueva, Transmisión Dynamic Shift-CVT con paddle shifters y nuestro conjunto de características de seguridad avanzada.',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/corollahatchback/base.png?bg=fff&fm=webp&q=90&w=768'

        ],[
            "Nombre"=>'Mirai ',
            "Precio"=>'49,500',
            "Descripcion"=>'Este  Toyota es el futuro de los vehículos de combustible alternativo. Este Toyota funciona completamente con una celda de combustible de hidrógeno, y su única emisión es el agua.',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/mirai/base.png?bg=fff&fm=webp&q=90&w=768'
        ],[
            "Nombre"=>'Prius',
            "Precio"=>'24,525',
            "Descripcion"=>'El suave manejo y el diseño ultramoderno y ecológico de este auto de Toyota son únicos. Explora pantalla multimedia HD de 11.6 plg disponible para una conectividad intuitiva. ',
            "img"=>'https://www.toyota.com/imgix/content/dam/toyota/jellies/relative/2021/prius/base.png?bg=fff&fm=webp&q=90&w=768'

        ]
        

    ];
    $url=["image"=>"https://i.ibb.co/LxV3G8B/toyota.png"];
    return view('modelos',compact('autos','url'));
    }
}
