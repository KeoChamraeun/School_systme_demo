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

    'accepted'             => 'ត្រូវយល់ព្រមនឹងវាល :attribute។',
    'accepted_if'          => 'វាល :attribute ត្រូវបានទទួលយកនៅពេល :other គឺ :value។',
    'active_url'           => 'វាល :attribute មិនមែនជា URL ត្រឹមត្រូវទេ។',
    'after'                => 'វាល :attribute ត្រូវតែជាថ្ងៃបន្ទាប់ពី :date។',
    'after_or_equal'       => 'វាល :attribute ត្រូវតែជាថ្ងៃបន្ទាប់ឬស្មើនឹង :date។',
    'alpha'                => 'វាល :attribute ត្រូវមានតែអក្សរតែប៉ុណ្ណោះ។',
    'alpha_dash'           => 'វាល :attribute អាចមានតែអក្សរ លេខ និងសញ្ញា - _ ប៉ុណ្ណោះ។',
    'alpha_num'            => 'វាល :attribute ត្រូវមានតែអក្សរ និងលេខតែប៉ុណ្ណោះ។',
    'array'                => 'វាល :attribute ត្រូវតែជាអារេ។',
    'ascii'                => 'វាល :attribute ត្រូវមានតែតួអក្សរអង់គ្លេស និងតួអក្សរជាច្រើនប៊ីតតែមួយ។',
    'before'               => 'វាល :attribute ត្រូវតែជាថ្ងៃមុន :date។',
    'before_or_equal'      => 'វាល :attribute ត្រូវតែជាថ្ងៃមុនឬស្មើនឹង :date។',
    'between'              => [
        'array'   => 'វាល :attribute ត្រូវមានចំនួនធាតុចន្លោះពី :min ដល់ :max។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវចន្លោះពី :min ដល់ :max គីឡូបៃ។',
        'numeric' => 'តម្លៃ :attribute ត្រូវចន្លោះពី :min ដល់ :max។',
        'string'  => 'ចំនួនតួអក្សរ :attribute ត្រូវចន្លោះពី :min ដល់ :max។',
    ],
    'boolean'              => 'វាល :attribute ត្រូវតែជា true ឬ false។',
    'confirmed'            => 'ការបញ្ជាក់វាល :attribute មិនត្រឹមត្រូវ។',
    'current_password'     => 'ពាក្យសម្ងាត់មិនត្រឹមត្រូវ។',
    'date'                 => 'វាល :attribute មិនមែនជាថ្ងៃខែឆ្នាំត្រឹមត្រូវទេ។',
    'date_equals'          => 'វាល :attribute ត្រូវស្មើនឹង :date។',
    'date_format'          => 'វាល :attribute មិនត្រូវគ្នានឹងទ្រង់ទ្រាយ :format។',
    'decimal'              => 'វាល :attribute ត្រូវមានទសភាគ :decimal។',
    'declined'             => 'ត្រូវបដិសេធវាល :attribute។',
    'declined_if'          => 'វាល :attribute ត្រូវបានបដិសេធ នៅពេល :other គឺ :value។',
    'different'            => 'វាល :attribute និង :other ត្រូវតែខុសគ្នា។',
    'digits'               => 'វាល :attribute ត្រូវតែមាន :digits ខ្ទង់។',
    'digits_between'       => 'វាល :attribute ត្រូវមានចន្លោះពី :min ដល់ :max ខ្ទង់។',
    'dimensions'           => 'វាល :attribute មានវិមាត្ររូបភាពមិនត្រឹមត្រូវ។',
    'distinct'             => 'វាល :attribute មានតម្លៃកើនឡើង។',
    'doesnt_end_with'      => 'វាល :attribute មិនត្រូវបញ្ចប់ដោយតម្លៃណាមួយដូចជា៖ :values។',
    'doesnt_start_with'    => 'វាល :attribute មិនត្រូវចាប់ផ្តើមដោយតម្លៃណាមួយដូចជា៖ :values។',
    'email'                => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋានអ៊ីមែលត្រឹមត្រូវ។',
    'ends_with'            => 'វាល :attribute ត្រូវបញ្ចប់ដោយតម្លៃណាមួយដូចជា៖ :values។',
    'enum'                 => 'វាល :attribute មិនត្រឹមត្រូវ។',
    'exists'               => 'វាល :attribute មិនមានក្នុងប្រព័ន្ធ។',
    'file'                 => 'វាល :attribute ត្រូវតែជាឯកសារ។',
    'filled'               => 'វាល :attribute ត្រូវតែមានតម្លៃ។',
    'gt'                   => [
        'array'   => 'វាល :attribute ត្រូវមានធាតុច្រើនជាង :value។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវតែធំជាង :value គីឡូបៃ។',
        'numeric' => 'វាល :attribute ត្រូវតែធំជាង :value។',
        'string'  => 'វាល :attribute ត្រូវតែមានតួអក្សរច្រើនជាង :value។',
    ],
    'gte'                  => [
        'array'   => 'វាល :attribute ត្រូវមានធាតុយ៉ាងហោចណាស់ :value។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវតែធំជាងឬស្មើ :value គីឡូបៃ។',
        'numeric' => 'វាល :attribute ត្រូវតែធំជាងឬស្មើ :value។',
        'string'  => 'វាល :attribute ត្រូវតែមានតួអក្សរធំជាងឬស្មើ :value។',
    ],
    'image'                => 'វាល :attribute ត្រូវតែជារូបភាព។',
    'in'                   => 'វាល :attribute មិនត្រឹមត្រូវ។',
    'in_array'             => 'វាល :attribute មិនមានក្នុង :other។',
    'integer'              => 'វាល :attribute ត្រូវតែជាចំនួនគត់។',
    'ip'                   => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋាន IP ត្រឹមត្រូវ។',
    'ipv4'                 => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋាន IPv4 ត្រឹមត្រូវ។',
    'ipv6'                 => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋាន IPv6 ត្រឹមត្រូវ។',
    'json'                 => 'វាល :attribute ត្រូវតែជាសារ JSON ត្រឹមត្រូវ។',
    'lowercase'            => 'វាល :attribute ត្រូវតែជាតួអក្សរតូច។',
    'lt'                   => [
        'array'   => 'វាល :attribute ត្រូវមានធាតុតិចជាង :value។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវតែតិចជាង :value គីឡូបៃ។',
        'numeric' => 'វាល :attribute ត្រូវតែតិចជាង :value។',
        'string'  => 'វាល :attribute ត្រូវតែមានតួអក្សរតិចជាង :value។',
    ],
    'lte'                  => [
        'array'   => 'វាល :attribute មិនអាចមានធាតុច្រើនជាង :value។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវតែតិចជាងឬស្មើ :value គីឡូបៃ។',
        'numeric' => 'វាល :attribute ត្រូវតែតិចជាងឬស្មើ :value។',
        'string'  => 'វាល :attribute ត្រូវតែមានតួអក្សរតិចជាងឬស្មើ :value។',
    ],
    'mac_address'          => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋាន MAC ត្រឹមត្រូវ។',
    'max'                  => [
        'array'   => 'វាល :attribute មិនអាចមានធាតុច្រើនជាង :max។',
        'file'    => 'ទំហំឯកសារ :attribute មិនអាចធំជាង :max គីឡូបៃ។',
        'numeric' => 'តម្លៃ :attribute មិនអាចធំជាង :max។',
        'string'  => 'វាល :attribute មិនអាចមានតួអក្សរច្រើនជាង :max។',
    ],
    'max_digits'           => 'វាល :attribute មិនអាចមានចំនួនលេខលើស :max។',
    'mimes'                => 'វាល :attribute ត្រូវតែជាឯកសារប្រភេទ៖ :values។',
    'mimetypes'            => 'វាល :attribute ត្រូវតែជាឯកសារប្រភេទ៖ :values។',
    'min'                  => [
        'array'   => 'វាល :attribute ត្រូវមានធាតុយ៉ាងហោចណាស់ :min។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវតែយ៉ាងហោចណាស់ :min គីឡូបៃ។',
        'numeric' => 'តម្លៃ :attribute ត្រូវតែយ៉ាងហោចណាស់ :min។',
        'string'  => 'វាល :attribute ត្រូវមានតួអក្សរយ៉ាងហោចណាស់ :min។',
    ],
    'min_digits'           => 'វាល :attribute ត្រូវមានចំនួនលេខយ៉ាងហោចណាស់ :min។',
    'missing'              => 'វាល :attribute ត្រូវតែបាត់បង់។',
    'missing_if'           => 'វាល :attribute ត្រូវតែបាត់បង់នៅពេល :other គឺ :value។',
    'missing_unless'       => 'វាល :attribute ត្រូវតែបាត់បង់ លុះត្រាតែ :other គឺ :value។',
    'missing_with'         => 'វាល :attribute ត្រូវតែបាត់បង់ នៅពេល :values មាន។',
    'missing_with_all'     => 'វាល :attribute ត្រូវតែបាត់បង់ នៅពេល :values មាន។',
    'multiple_of'          => 'វាល :attribute ត្រូវតែជាគុណនៃ :value។',
    'not_in'               => 'វាល :attribute មិនត្រឹមត្រូវ។',
    'not_regex'            => 'ទ្រង់ទ្រាយវាល :attribute មិនត្រឹមត្រូវ។',
    'numeric'              => 'វាល :attribute ត្រូវតែជាលេខ។',
    'password'             => [
        'letters'       => 'វាល :attribute ត្រូវមានអក្សរយ៉ាងហោចណាស់មួយ។',
        'mixed'         => 'វាល :attribute ត្រូវមានអក្សរធំ និងតូចយ៉ាងហោចណាស់មួយ។',
        'numbers'       => 'វាល :attribute ត្រូវមានលេខយ៉ាងហោចណាស់មួយ។',
        'symbols'       => 'វាល :attribute ត្រូវមានតួអក្សរពិសេសយ៉ាងហោចណាស់មួយ។',
        'uncompromised' => 'វាល :attribute មើលទៅមិនសុវត្ថិភាព។ សូមជ្រើសរើសតម្លៃផ្សេង។',
    ],
    'present'              => 'វាល :attribute ត្រូវតែមាន។',
    'prohibited'           => 'វាល :attribute ត្រូវបានហាមឃាត់។',
    'prohibited_if'        => 'វាល :attribute ត្រូវបានហាមឃាត់ នៅពេល :other គឺ :value។',
    'prohibited_unless'    => 'វាល :attribute ត្រូវបានហាមឃាត់ លុះត្រាតែ :other គឺ :value។',
    'prohibits'            => 'វាល :attribute ហាម :other មិនឲ្យមាន។',
    'regex'                => 'ទ្រង់ទ្រាយវាល :attribute មិនត្រឹមត្រូវ។',
    'required'             => 'វាល :attribute ត្រូវបានទាមទារ។',
    'required_array_keys'  => 'វាល :attribute ត្រូវតែមានតម្លៃសម្រាប់ :values។',
    'required_if'          => 'វាល :attribute ត្រូវបានទាមទារ នៅពេល :other គឺ :value។',
    'required_if_accepted' => 'វាល :attribute ត្រូវបានទាមទារ នៅពេល :other ត្រូវបានទទួលយក។',
    'required_unless'      => 'វាល :attribute ត្រូវបានទាមទារ លុះត្រាតែ :other គឺ :values។',
    'required_with'        => 'វាល :attribute ត្រូវបានទាមទារ នៅពេលមាន :values។',
    'required_with_all'    => 'វាល :attribute ត្រូវបានទាមទារ នៅពេលមាន :values។',
    'required_without'     => 'វាល :attribute ត្រូវបានទាមទារ នៅពេលគ្មាន :values។',
    'required_without_all' => 'វាល :attribute ត្រូវបានទាមទារ នៅពេលគ្មាន :values ទាំងអស់។',
    'same'                 => 'វាល :attribute និង :other ត្រូវតែដូចគ្នា។',
    'size'                 => [
        'array'   => 'វាល :attribute ត្រូវមានធាតុចំនួន :size។',
        'file'    => 'ទំហំឯកសារ :attribute ត្រូវតែ :size គីឡូបៃ។',
        'numeric' => 'តម្លៃ :attribute ត្រូវតែស្មើនឹង :size។',
        'string'  => 'វាល :attribute ត្រូវមានតួអក្សរ :size។',
    ],
    'starts_with'          => 'វាល :attribute ត្រូវចាប់ផ្តើមដោយតម្លៃណាមួយដូចជា៖ :values។',
    'string'               => 'វាល :attribute ត្រូវតែជាអក្សរ។',
    'timezone'             => 'វាល :attribute ត្រូវតែជាដែនកំណត់ពេលវេលាត្រឹមត្រូវ។',
    'unique'               => 'តម្លៃវាល :attribute ត្រូវបានប្រើរួចហើយ។',
    'uploaded'             => 'បរាជ័យក្នុងការផ្ទុក :attribute។',
    'uppercase'            => 'វាល :attribute ត្រូវតែជាតួអក្សរធំ។',
    'url'                  => 'ទ្រង់ទ្រាយ URL នៃវាល :attribute មិនត្រឹមត្រូវ។',
    'ulid'                 => 'វាល :attribute ត្រូវតែជាទ្រង់ទ្រាយ ULID ត្រឹមត្រូវ។',
    'uuid'                 => 'វាល :attribute ត្រូវតែជាទ្រង់ទ្រាយ UUID ត្រឹមត្រូវ។',

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
            'rule-name' => 'សារ​ការពារ​ប្ដូរ',
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
        'name'                  => 'ឈ្មោះ',
        'username'              => 'ឈ្មោះអ្នកប្រើ',
        'email'                 => 'អ៊ីមែល',
        'first_name'            => 'ឈ្មោះ',
        'last_name'             => 'នាមត្រកូល',
        'password'              => 'ពាក្យសម្ងាត់',
        'password_confirmation' => 'បញ្ជាក់ពាក្យសម្ងាត់',
        'city'                  => 'ទីក្រុង',
        'country'               => 'ប្រទេស',
        'address'               => 'អាសយដ្ឋាន',
        'phone'                 => 'ទូរស័ព្ទ',
        'mobile'                => 'ទូរស័ព្ទចល័ត',
        'age'                   => 'អាយុ',
        'sex'                   => 'ភេទ',
        'gender'                => 'យេនឌ័រ',
        'day'                   => 'ថ្ងៃ',
        'month'                 => 'ខែ',
        'year'                  => 'ឆ្នាំ',
        'hour'                  => 'ម៉ោង',
        'minute'                => 'នាទី',
        'second'                => 'វិនាទី',
        'content'               => 'មាតិកា',
        'description'           => 'ការពិពណ៌នា',
        'excerpt'               => 'សេចក្ដីសង្ខេប',
        'date'                  => 'កាលបរិច្ឆេទ',
        'time'                  => 'ពេលវេលា',
        'available'             => 'អាចប្រើបាន',
        'size'                  => 'ទំហំ',
        'price'                 => 'តម្លៃ',
        'desc'                  => 'សង្ខេប',
        'title'                 => 'ចំណងជើង',
        'q'                     => 'ការស្វែងរក',
        'link'                  => 'តំណ',
        'slug'                  => 'slug',
    ],

];
