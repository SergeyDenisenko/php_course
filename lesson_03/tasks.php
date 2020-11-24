<?php

define(BR, "<br/>\n");

// exercise 1

$i = 0;

while ($i <= 100) {
    if (($i % 3) === 0) {
        echo $i . BR;
    }
    $i++;
}

// exercise 2

$i = 0;

do {

    if ($i === 0) {
        echo $i . ' - это ноль.' . BR;
    } elseif (($i % 2) === 0) {
        echo $i . ' - чётное число.' . BR;
    } else {
        echo $i . ' - нечётное число' . BR;
    }
    $i++;

} while ($i <= 10);

// exercise 3

$city = array(
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин', 'Сасово', 'Ряжск'],
    'Амурская область' => ['Благовещенск', 'Белогорск ', 'Свободный', 'Тында']
);

$str = BR;

foreach ($city as $key => $value) {
    $str .= $key . ':' . BR;
    $countCity = count($city[$key]);
    for ($i = 0, $c = 1; $i < $countCity; $i++, $c++) {
        if ($c == $countCity) {
            $str .= $city[$key][$i] . '.' . BR . BR;
        } else {
            $str .= $city[$key][$i] . ', ';
        }
    }
}

echo $str;

// exercise 4

function transliteration($string, $method = '')
{
    $method_default = 'ISO';
    $map = [
        // ГОСТ 7.79-2000
        'GOST' => [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'x', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'shh', 'ъ' => '', 'ы' => 'y\'', 'ь' => '`',
            'э' => 'e`', 'ю' => 'yu', 'я' => 'ya'
        ],

        // ISO 9 - 1995
        'ISO' => [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'ё', 'ж' => 'ž', 'з' => 'z', 'и' => 'i',
            'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'č',
            'ш' => 'š', 'щ' => 'ŝ', 'ъ' => '', 'ы' => 'y', 'ь' => '`',
            'э' => 'è', 'ю' => 'û', 'я' => 'â'
        ],

        // Transliteration of names for a Russian passport
        'RP' => [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'ye', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '`',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ай' => 'ay', 'ей' => 'ey',
            'ий' => 'iy', 'ой' => 'oy', 'уй' => 'uy', 'ый' => 'yy', 'эй' => 'ey',
            'юй' => 'yuy', 'ёй' => 'yay'
        ],

        // US State Department Transliteration
        'US' => [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'ye', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '`',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
        ]
    ];

    $tmp = [];
    $method = array_key_exists($method, $map) ? $method : $method_default;

    foreach ($map[$method] as $key => $value) {
        if (mb_strlen($value) == 3) {
            $tmp['rus_tmp_3'][] = $key;
            $tmp['eng_tmp_3'][] = $value;
        } elseif (mb_strlen($value) == 2) {
            $tmp['rus_tmp_2'][] = $key;
            $tmp['eng_tmp_2'][] = $value;
        } else {
            $tmp['rus_tmp'][] = $key;
            $tmp['eng_tmp'][] = $value;
        }
    };

    $tmp['rus'] = array_merge($tmp['rus_tmp_3'], $tmp['rus_tmp_2'], $tmp['rus_tmp']);
    $tmp['eng'] = array_merge($tmp['eng_tmp_3'], $tmp['eng_tmp_2'], $tmp['eng_tmp']);

    $result = str_ireplace($tmp['rus'], $tmp['eng'], $string);

    if ($result == $string) {
        $result = str_ireplace($tmp['eng'], $tmp['rus'], $string);
    }

    return $result;
};

echo transliteration('привет') . BR;
echo transliteration('TeSt') . BR;
echo transliteration('sasha', 'RP') . BR;

// exercise 5

function lineEdit($string)
{
    return str_replace(' ', '_', $string);
};

echo lineEdit('Hello World!') . BR;

// exercise 7

for ($i = 0; $i < 10; print $i++){};

// exercise 8

$str = '';
$tmp = '';
$strArray = [];

foreach ($city as $key => $value) {
    $str .= $key . ':' . BR;
    $countCity = count($city[$key]);
    for ($i = 0, $c = 1; $i < $countCity; $i++, $c++) {
        $tmp = $city[$key][$i];
        if (mb_substr($tmp, 0, 1) == 'К') {
            $strArray[] = $tmp;
        };
        if ($c === $countCity) {
            $str .= implode(', ', $strArray);
            $str .= '.' . BR . BR;
            $strArray = [];
        }
    }
}

echo $str;

// exercise 9