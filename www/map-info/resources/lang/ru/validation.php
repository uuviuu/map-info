<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле :attribute должно быть передано.',
    'accepted_if' => 'Поле :attribute должно быть передано если :other  :value.',
    'active_url' => 'Поле :attribute содержит недействительный URL.',
    'after' => 'В поле :attribute должна быть дата после :date.',
    'after_or_equal' => 'В поле :attribute должна быть дата после или равняться :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры и дефис.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'В поле :attribute должна быть дата до :date.',
    'before_or_equal' => 'В поле :attribute должна быть дата до или равняться :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file' => 'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'string' => 'Количество символов в поле :attribute должно быть между :min и :max.',
        'array' => 'Количество элементов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean' => 'Поле :attribute должно иметь значение логического типа.',
    'confirmed' => 'Поле :attribute не совпадает с подтверждением.',
    'current_password' => 'Неверный пароль.',
    'date' => 'Поле :attribute не является датой.',
    'date_equals' => 'Поле :attribute должно содержать :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between' => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute содержит повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным электронным адресом.',
    'ends_with' => 'Поле :attribute должно содержать значение заканчивающееся на: :values.',
    'exists' => 'Выбранное значение для поля :attribute некорректно.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute обязательно для заполнения.',
    'gt' => [
        'numeric' => 'Поле :attribute должно содержать значение больше :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше :value килобайт.',
        'string' => 'Количество символов в поле :attribute должно быть больше :value.',
        'array' => 'Количество элементов в поле :attribute должно быть больше :value.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно содержать значение больше или равно :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше или равен :value килобайт.',
        'string' => 'Количество символов в поле :attribute должно быть больше или равно :value.',
        'array' => 'Количество элементов в поле :attribute должно быть больше или равно :value.',
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для поля :attribute ошибочно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Поле :attribute должно быть JSON строкой.',
    'lt' => [
        'numeric' => 'Поле :attribute должно содержать значение меньше :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше :value килобайт.',
        'string' => 'Количество символов в поле :attribute должно быть меньше :value.',
        'array' => 'Количество элементов в поле :attribute должно быть меньше :value.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно содержать значение меньше или равно :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше или равен :value килобайт.',
        'string' => 'Количество символов в поле :attribute должно быть меньше или равно :value.',
        'array' => 'Количество элементов в поле :attribute должно быть меньше или равно :value.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не может быть более :max.',
        'file' => 'Размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'string' => 'Количество символов в поле :attribute не может превышать :max.',
        'array' => 'Количество элементов в поле :attribute не может превышать :max.',
    ],
    'mimes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min' => [
        'numeric' => 'Поле должно быть не менее :min.',
        'file' => 'Размер файла в поле :attribute должен быть не менее :min Килобайт(а).',
        'string' => 'Количество символов в поле :attribute должно быть не менее :min.',
        'array' => 'Количество элементов в поле :attribute должно быть не менее :min.',
    ],
    'multiple_of' => 'Поле :attribute должно содержать значение кратное :value.',
    'not_in' => 'Выбранное значение для поля :attribute ошибочно.',
    'not_regex' => 'Поле :attribute имеет ошибочный формат.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно быть передано.',
    'regex' => 'Поле :attribute имеет ошибочный формат.',
    'required' => 'Поле :attribute обязательно',
    'required_if' => 'Поле :attribute обязательно',
    'required_unless' => 'Поле :attribute обязательно',
    'required_with' => 'Поле :attribute обязательно',
    'required_with_all' => 'Поле :attribute обязательно',
    'required_without' => 'Поле :attribute обязательно если отсутствует :values',
    'required_without_all' => 'Поле :attribute обязательно',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено если :other  :value.',
    'prohibited_unless' => 'Поле :attribute запрещено если :other  :values.',
    'same' => 'Значение поля :attribute должно совпадать с :other.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'file' => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'string' => 'Количество символов в поле :attribute должно быть равным :size.',
        'array' => 'Количество элементов в поле :attribute должно быть равным :size.',
    ],
    'starts_with' => 'Поле :attribute должно содержать значение начинающееся с: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Значение поля :attribute уже занято.',
    'uploaded' => 'Загрузка поля :attribute не удалась.',
    'url' => 'Поле :attribute имеет ошибочный формат.',
    'phone' => 'Поле :attribute имеет ошибочный формат.',
    'uuid' => 'Поле :attribute имеет ошибочный формат.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'Имя',
        'email' => 'Email',
        'password' => 'Пароль',
        'is_remember' => 'Запомнить',
        'article' => 'Артикул',
        'dealer' => 'Дилер',
        'price' => 'Цена',
        'address' => 'Адрес',
    ],

    'views' => [
        'page-title' => [
            'main' => 'Главная',
            'task-sql' => 'Задача #1. SQL',
            'task-php' => 'Задача #2. PHP',
        ],
        'page-description' => [
            'main-not-auth' => 'Авторизуйтесь или зарегистрируйтесь, чтобы проверить задачи.',
            'main-auth' => 'Выберите задачу: ',
            'task-sql' => 'Цель: для каждого артикула вывести поставщика или поставщиков с самой высокой ценой.',
            'task-php' => 'Цель: получить информацию о районе города, ближайшим станция метро, улице и дому по адресу, введённого пользователем в текстовом поле.',
            'results' => 'Результаты запроса:',
            'history-requests' => 'Последние запросы: ',
            'micro-district' => 'Микрорайон/Жилой комплекс: ',
            'metro' => 'Станции метро в радиусе 500 метров: ',
        ],
        'button' => [
            'exit' => 'Выход',
            'authorisation' => 'Авторизация',
            'registration' => 'Регистрация',
            'generate-table' => 'Сгенерировать таблицу',
            'filter' => 'Фильтровать',
            'clear-filter' => 'Очистить фильтры',
            'search' => 'Поиск',
        ],
        'message' => [
            'create-table' => 'Таблица успешно создана и заполнена.',
            'already-create' => 'Таблица уже была создана.',
            'help-search-map-info' => 'Введите адрес для получения информации о районе в городе Москва.',
        ],
    ],

];
