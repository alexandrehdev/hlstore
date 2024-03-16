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


if( ! function_exists('getProductSubtypes')){

    
    function getProductSubtypes()
    {  
        
        $data = [
            [
                "title" => "Autos e peças",
                "name" => "auto",
                "url" => "https://www.svgrepo.com/show/513282/car.svg"
            ],
            [
                "title" => "Imóveis",
                "name" => "property",
                "url" => "https://www.svgrepo.com/show/513309/house.svg"
            ],
            [
                "title" => "Casa, Decoração e Utensílios",
                "name" => "decoration",
                "url" => "https://www.svgrepo.com/show/475276/table.svg"
            ],
            [
                "title" => "Móveis",
                "name" => "furniture",
                "url" => "https://www.svgrepo.com/show/206574/wardrobe-closet.svg"
            ],
            [
                "title" => "Eletro",
                "name" => "electronics",
                "url" => "https://www.svgrepo.com/show/410652/wash.svg"
            ],
            [
                "title" => "Materiais de Construção",
                "name" => "construction",
                "url" => "https://www.svgrepo.com/show/485388/hammer.svg"
            ],
            [
                "title" => "Celulares e Telefonia",
                "name" => "phone",
                "url" => "https://www.svgrepo.com/show/508311/mobile.svg"
            ],
            [
                "title" => "Informática",
                "name" => "computing",
                "url" => "https://www.svgrepo.com/show/288488/motherboard.svg"
            ],
            [
                "title" => "Games",
                "name" => "games",
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
                "name" => "fashion",
                "url" => "https://www.svgrepo.com/show/234666/clothes-shirt.svg"
            ],
            [
                "title" => "Comércio e escritório",
                "name" => "commerce",
                "url" => "https://www.svgrepo.com/show/530656/office-chair.svg"
            ],
            [
                "title" => "Música e hobbies",
                "name" => "music",
                "url" => "https://www.svgrepo.com/show/499695/electric-guitar.svg"
            ],
            [
                "title" => "Esportes e lazer",
                "name" => "sports",
                "url" => "https://www.svgrepo.com/show/421901/ball-basket-basketball.svg"
            ],
            [
                "title" => "Animais de estimação",
                "name" => "pet",
                "url" => "https://www.svgrepo.com/show/500086/dog.svg"
            ],
            [
                "title" => "Agro e indústria",
                "name" => "agri",
                "url" => "https://www.svgrepo.com/show/407638/tractor.svg"
            ]
        ];

        return $data;

    }
}