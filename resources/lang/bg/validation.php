<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => 'Трябва да приемете :attribute.',
    'active_url' => 'Полето :attribute не съдържа валиден URL адрес.',
    'after' => 'Полето :attribute трябва да съдържа дата след :date.',
    'alpha' => 'Полето :attribute трябва да съдържа само букви.',
    'alpha_dash' => 'Полето :attribute трябва да съдържа само букви, цифри, долна черта и тире.',
    'alpha_num' => 'Полето :attribute трябва да съдържа само букви и цифри.',
    'array' => 'Полето :attribute трябва да бъде масив.',
    'before' => 'Полето :attribute трябва да съдържа дата преди :date.',
    'between' => [
        'numeric' => 'Полето :attribute трябва да съдържа стойност между :min и :max.',
        'file' => 'Файлът :attribute трябва да бъде между :min и :max килобайта.',
        'string' => 'Полето :attribute трябва да съдържа между :min и :max знака.',
        'array' => 'Полето :attribute трябва да има между :min и :max елемента.',
    ],
    'boolean' => 'Полето :attribute трябва да съдържа Да или Не',
    'confirmed' => 'Полето :attribute не е потвърдено.',
    'date' => 'Полето :attribute не съдържа валидна дата.',
    'date_format' => 'Полето :attribute не е във формат :format.',
    'different' => 'Полетата :attribute и :other трябва да са различни.',
    'digits' => 'Полето :attribute трябва да съдържа :digits цифри.',
    'digits_between' => 'Полето :attribute трябва да съдържа между :min и :max цифри.',
    'dimensions' => 'Размерът на изображението :attribute е невалиден.',
    'distinct' => 'Полето :attribute съдържа дублирана стойност.',
    'email' => 'Полето :attribute е в невалиден формат.',
    'exists' => 'Избранато поле :attribute вече съществува.',
    'file' => 'Полето :attribute трябва да съдържа файл.',
    'filled' => 'Полето :attribute е задължително.',
    'image' => 'Полето :attribute трябва да съдържа изображение.',
    'in' => 'Избраното поле :attribute е невалидно.',
    'in_array' => 'Стойността на полето :attribute не се съдържа в стойността на :other.',
    'integer' => 'Полето :attribute трябва да съдържа цяло число.',
    'ip' => 'Полето :attribute трябва да съдържа IP адрес.',
    'json' => 'Полето :attribute трябва да съдържа JSON стойност.',
    'max' => [
        'numeric' => 'Полето :attribute не трябва да надвишава :max.',
        'file' => 'Файлът :attribute не трябва да надвишава :max килобайта.',
        'string' => 'Полето :attribute не трябва да надвишава :max знака.',
        'array' => 'Полето :attribute не трябва да съдържа повече от :max елемента.',
    ],
    'mimes' => 'Файлът :attribute трябва да бъде от тип: :values.',
    'min' => [
        'numeric' => 'Полето :attribute не трябва да съдържа стойност по-малка от :min.',
        'file' => 'Файлът :attribute трябва да бъде с размер от най-малко :min килобайта.',
        'string' => 'Полето :attribute трябва да съдържа най-малко :min знака.',
        'array' => 'Полето :attribute трябва има най-малко :min елемента.',
    ],
    'not_in' => 'Избраното поле :attribute е невалидно.',
    'numeric' => 'Полето :attribute трябва да съдържа число.',
    'present' => 'Полето :attribute трябва да присъства.',
    'regex' => 'Полето :attribute е в невалиден формат.',
    'required' => 'Полето :attribute е задължително.',
    'required_if' => 'Полето :attribute се изисква, когато :other е :value.',
    'required_unless' => 'Полето :attribute се изисква, освен ако :other е сред :values.',
    'required_with' => 'Полето :attribute се изисква, когато :values има стойност.',
    'required_with_all' => 'Полето :attribute се изисква, когато :values имат стойност.',
    'required_without' => 'Полето :attribute се изисква, когато :values няма стойност.',
    'required_without_all' => 'Полето :attribute се изисква, когато никое от полетата :values няма стойност.',
    'same' => 'Полетата :attribute и :other трябва да съвпадат.',
    'size' => [
        'numeric' => 'Полето :attribute трябва да бъде :size.',
        'file' => 'Файлът :attribute трябва да бъде :size килобайта.',
        'string' => 'Полето :attribute трябва да съдържа :size знака.',
        'array' => 'Полето :attribute трябва да има :size елемента.',
    ],
    'string' => 'Полето :attribute трябва да съдържа знакова стойност.',
    'timezone' => 'Полето :attribute трябва да съдържа валидна часова зона.',
    'unique' => 'Полето :attribute вече съществува.',
    'url' => 'Полето :attribute е в невалиден формат.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Име',
        'username' => 'Потребител',
        'email' => 'Имейл',
        'first_name' => 'Име',
        'last_name' => 'Фамилия',
        'password' => 'Парола',
        'city' => 'Град',
        'country' => 'Държава',
        'address' => 'Адрес',
        'phone' => 'Телефон',
        'mobile' => 'Мобилен телефон',
        'age' => 'Възраст',
        'sex' => 'Пол',
        'gender' => 'Пол',
        'day' => 'Ден',
        'month' => 'Месец',
        'year' => 'Година',
        'hour' => 'Час',
        'minute' => 'Минута',
        'second' => 'Секунда',
        'title' => 'Заглавие',
        'content' => 'Съдържание',
        'description' => 'Описание',
        'excerpt' => 'Откъс',
        'date' => 'Дата',
        'time' => 'Време',
        'available' => 'Достъпен',
        'size' => 'Размер',
        'recaptcha_response_field' => 'Проверка за ботове',
        'subject' => 'Заглавие',
        'message' => 'Съобщение',
    ],

];
