<?php

return [
    'artists' => [
        [
            'id'   => 1,
            'name' => 'Leonardo Da Vinci'
        ],
        [
            'id'   => 2,
            'name' => 'Vincent van Gogh'
        ],
        [
            'id'   => 3,
            'name' => 'Pablo Picasso'
        ],
        [
            'id'   => 4,
            'name' => 'Botticelli'
        ],
        [
            'id'   => 5,
            'name' => 'Caravaggio'
        ],
        [
            'id'   => 6,
            'name' => 'Michelangelo'
        ],
        [
            'id'   => 7,
            'name' => 'Paul Gauguin'
        ],
        [
            'id'   => 8,
            'name' => 'Pierre-Auguste Renoir'
        ]
    ],
    'museums' => [
        [
            'id'     => 1,
            'name'   => 'National Gallery',
            'nation' => 'Inghilterra'
        ],
        [
            'id'     => 2,
            'name'   => 'Cenacolo',
            'nation' => 'Italia'
        ],
        [
            'id'     => 3,
            'name'   => 'Louvre',
            'nation' => 'Francia'
        ],
        [
            'id'     => 4,
            'name'   => 'MoMa New York',
            'nation' => 'Stati Uniti'
        ],
        [
            'id'     => 5,
            'name'   => 'Galleria degli Uffizi',
            'nation' => 'Italia'
        ],
        [
            'id'     => 6,
            'name'   => 'Museo d\'Orsay',
            'nation' => 'Francia'
        ],
        [
            'id'     => 7,
            'name'   => 'Museo Nacional Centro e Arte Reina Sofia',
            'nation' => 'Spagna'
        ]
    ],
    'artworks' => [
        [
            'artist_id' => 1,
            'museum_id' => 3,
            'name'      => 'Gioconda',
            'year'      => 1503
        ],
        [
            'artist_id' => 1,
            'museum_id' => 3,
            'name'      => 'La vergine delle rocce',
            'year'      => 1483
        ],
        [
            'artist_id' => 2,
            'museum_id' => 4,
            'name'      => 'Notte Stellata',
            'year'      => 1889
        ],
        [
            'artist_id' => 2,
            'museum_id' => 1,
            'name'      => 'Girasoli',
            'year'      => 1888
        ],
        [
            'artist_id' => 4,
            'museum_id' => 3,
            'name'      => 'Nascita di Venere',
            'year'      => 1486
        ],
        [
            'artist_id' => 4,
            'museum_id' => 1,
            'name'      => 'Natività mistica',
            'year'      => 1501
        ],
        [
            'artist_id' => NULL,
            'museum_id' => 4,
            'name'      => 'La persistenza della memoria',
            'year'      => 1931
        ],
        [
            'artist_id' => 4,
            'museum_id' => 5,
            'name'      => 'La nascita di Venere',
            'year'      => 1485
        ],
        [
            'artist_id' => NULL,
            'museum_id' => NULL,
            'name'      => 'Il bacio',
            'year'      => 1859
        ],
        [
            'artist_id' => NULL,
            'museum_id' => 4,
            'name'      => 'Gli amanti',
            'year'      => 1928
        ],
        [
            'artist_id' => NULL,
            'museum_id' => 3,
            'name'      => 'La libertà che guida il popolo',
            'year'      => 1830
        ],
        [
            'artist_id' => 2,
            'museum_id' => 6,
            'name'      => 'Autoritratto',
            'year'      => 1889
        ],
        [
            'artist_id' => NULL,
            'museum_id' => 6,
            'name'      => 'I papaveri',
            'year'      => 1873
        ],
        [
            'artist_id' => NULL,
            'museum_id' => 6,
            'name'      => 'L\'assenzio',
            'year'      => 1875
        ]
    ]
];