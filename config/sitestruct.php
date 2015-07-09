<?php

return [
    //Блоки лэндинга с описанием полей и вложенным описанием группы чего-нибудь, если она присутствует в блоке
    //Пока группа в блок предусмотрена только одна, если будет больше групп в блоке, то делать 2 блок с тем же имененм, только префиксованный и добавлять группу туда

    'remember_day' => [
        'title' => 'Ты ведь помнишь, какой сегодня день?',
        'stringfields' => ['phrase_answer', 'citsign_coco'],
        'textfields' => ['remark', 'citation_coco'],
        'images' => ['coco']
    ],

    'flora_club' => [
        'title' => 'Цветочный клуб Флора Экспресс',
        'stringfields' => ['subtitle_1', 'subtitle_2', 'echophrase'],
        'textfields' => ['descr_1', 'descr_2'],
        'group' => [
            'stringfields' => ['title', 'remark']
        ]
    ],

    'without_emb' => [
        'title' => 'Без конфуза в праздник',
        'stringfields' => ['slogan', 'subtitle'],
        'textfields' => ['descr', 'remark'],
        'group' => [
            'stringfields' => ['title'],
            'textfields' => ['descr', 'remark'],
            'images' => ['picture']
        ]
    ],

    'ten_bouquets' => [
        'title' => '10 букетов — бесплатно',
        'stringfields' => ['slogan'],
        'textfields' => ['descr', 'remark']
    ],

    'bouquets_perfect' => [
        'title' => 'Букеты — идеальные',
        'textfields' => ['descr', 'remark_1', 'remark_2', 'remark_3', 'remark_4'],
        'group' => [
            'images' => ['picture']
        ]
    ],

    'useful_letters' => [
        'title' => 'Полезные письма',
        'stringfields' => ['link_1', 'link_2', 'link_3'],
        'textfields' => ['descr']
    ],

    'quality_service' => [
        'title' => 'Удобный и качественный сервис',
        'stringfields' => ['slogan', 'subtitle'],
        'textfields' => ['descr_1', 'descr_2', 'descr_3'],
        'group' => [
            'stringfields' => ['title'],
            'textfields' => ['descr'],
            'images' => ['picture'],
            'numbs' => []
        ]
    ],

    'happy_customers' => [
        'title' => 'Более 200 000 счастливых клиентов',
        'textfields' => ['descr'],
        'group' => [
            'stringfields' => ['title', 'link'],
            'textfields' => ['descr'],
            'images' => ['picture']
        ]
    ],

    'join_the_club' => [
        'title' => 'Вступить в клуб',
        'stringfields' => ['slogan'],
        'textfields' => ['descr', 'remark']
    ]

];