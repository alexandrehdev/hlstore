<?php

/**
 *
 */
if (! function_exists('getLoggedUser')) {

    /**
     * Return the current logged user
     *
     * @return void
     */
    function loggedUser() {
        return Illuminate\Support\Facades\Auth::user();
    }

}


if( ! function_exists('getSubtypes')){


    function getSubtypes()
    {

        $data = [
            [
                "title" => "Imóveis",
                "name" => "imoveis",
                "url" => "https://www.svgrepo.com/show/513309/house.svg"
            ],
            [
                "title" => "Casa, Decoração e Utensílios",
                "name" => "decoracao",
                "url" => "https://www.svgrepo.com/show/475276/table.svg"
            ],
            [
                "title" => "Móveis",
                "name" => "moveis",
                "url" => "https://www.svgrepo.com/show/206574/wardrobe-closet.svg"
            ],
            [
                "title" => "Eletro",
                "name" => "eletro",
                "url" => "https://www.svgrepo.com/show/410652/wash.svg"
            ],
            [
                "title" => "Materiais de Construção",
                "name" => "construcao",
                "url" => "https://www.svgrepo.com/show/485388/hammer.svg"
            ],
            [
                "title" => "Celulares e Telefonia",
                "name" => "celulares",
                "url" => "https://www.svgrepo.com/show/508311/mobile.svg"
            ],
            [
                "title" => "Informática",
                "name" => "informatica",
                "url" => "https://www.svgrepo.com/show/288488/motherboard.svg"
            ],
            [
                "title" => "Games",
                "name" => "jogos",
                "url" => "https://www.svgrepo.com/show/475521/arcade.svg"
            ],
            [
                "title" => "TVs e video",
                "name" => "tv",
                "url" => "https://www.svgrepo.com/show/526394/tv.svg"
            ],
            [
                "title" => "Áudio",
                "name" => "audio",
                "url" => "https://www.svgrepo.com/show/499710/audio.svg"
            ],
            [
                "title" => "Câmeras e Drones",
                "name" => "camera",
                "url" => "https://www.svgrepo.com/show/234653/photo-camera-photograph.svg"
            ],
            [
                "title" => "Moda e beleza",
                "name" => "moda",
                "url" => "https://www.svgrepo.com/show/234666/clothes-shirt.svg"
            ],
            [
                "title" => "Comércio e escritório",
                "name" => "comercio",
                "url" => "https://www.svgrepo.com/show/530656/office-chair.svg"
            ],
            [
                "title" => "Música e hobbies",
                "name" => "musica",
                "url" => "https://www.svgrepo.com/show/499695/electric-guitar.svg"
            ],
            [
                "title" => "Esportes e lazer",
                "name" => "esportes",
                "url" => "https://www.svgrepo.com/show/421901/ball-basket-basketball.svg"
            ],
            [
                "title" => "Animais de estimação",
                "name" => "pet",
                "url" => "https://www.svgrepo.com/show/500086/dog.svg"
            ],
            [
                "title" => "Agro e indústria",
                "name" => "agro",
                "url" => "https://www.svgrepo.com/show/407638/tractor.svg"
            ]
        ];

        return $data;

    }
}
