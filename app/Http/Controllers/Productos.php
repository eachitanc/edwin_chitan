<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productos extends Controller
{
    //
    public function prod_gatos(){
        $producto = [
            array('img' => 'https://cdn.coordiutil.com/imagen-smart_1kg-1958545-1000-750-1-100.jpg', 'nom_prod' => 'Smart 1kg', 'codigo' => 'pg001','precio' => 6031 ),
            array('img' => 'https://s3.us-east-1.amazonaws.com/laikapp/images_products/7722ea7aa2b055cbd71c92efb0c3d7fc.png', 'nom_prod' => 'Mirringo Gatos Adultos', 'codigo' => 'pg002','precio' => 41055 ),
            array('img' => 'https://tennis.vteximg.com.br/arquivos/ids/1122803-1048-1600/image-12a7930e33e349a191ef02b01c18a191.jpg?v=637343199975400000', 'nom_prod' => 'Cepillo', 'codigo' => 'pg003','precio' => 52480 ),
            array('img' => 'https://http2.mlstatic.com/D_NQ_NP_847604-MCO43532793920_092020-O.webp', 'nom_prod' => 'Rascador Gimnasio', 'codigo' => 'pg004','precio' => 68000 ),
            array('img' => 'https://http2.mlstatic.com/D_NQ_NP_943719-MCO31061377024_062019-O.webp', 'nom_prod' => 'Rascador Para Gato', 'codigo' => 'pg005','precio' => 25000 ),
            array('img' => 'https://http2.mlstatic.com/D_NQ_NP_805970-MCO43484127143_092020-O.webp', 'nom_prod' => 'Guacal Cargado', 'codigo' => 'pg006','precio' => 74490 )
        ];
        return view('productos.gatos', compact('producto')) ;
    }
    public function prod_perros(){
        $producto = [
            array('img' => 'https://walky.com.co/wp-content/uploads/2020/02/arnes-pechera-perro-walky-deportiva-fucsia-personalizado.jpg.webp', 'nom_prod' => 'Pechera Personalizada', 'codigo' => 'pp001','precio' => 125000 ),
            array('img' => 'https://i0.wp.com/tiendapurpura.com.co/wp-content/uploads/2019/09/tienda-purpura-cepillo-dental.jpg?fit=800%2C757&ssl=1', 'nom_prod' => 'Cepillo Dientes', 'codigo' => 'pp002','precio' => 34900 ),
            array('img' => 'https://i1.wp.com/tiendapurpura.com.co/wp-content/uploads/2020/09/comida-perro-hill%C2%B4s-adult-sensitive-stomach-skin-155lb-2.jpg?w=380&ssl=1', 'nom_prod' => 'Hills Adult', 'codigo' => 'pp003','precio' => 175850 ),
            array('img' => 'https://tennis.vteximg.com.br/arquivos/ids/1122795-1048-1600/image-53523a408e7b40fa906285b2a7f0bac3.jpg?v=637343199801070000', 'nom_prod' => 'Control de olores', 'codigo' => 'pp004','precio' => 26000 ),
            array('img' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTXB43tCewzNH5BLds-qjtiTKClwyCN2CmHhIpVnwL-cEdxbHPX_OaTyGlaBKLQYbjhvVXrmSSASIc&usqp=CAc', 'nom_prod' => 'Tapete entrenador', 'codigo' => 'pp005','precio' => 74900 ),
            array('img' => 'https://http2.mlstatic.com/D_NQ_NP_972257-MCO32062092345_092019-O.webp', 'nom_prod' => 'Collar Adiestramiento', 'codigo' => 'pp006','precio' => 159990 )
        ];
        return view('productos.perros', compact('producto')) ;
    }
}
