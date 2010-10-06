<?php
$ezpodesc = array (
  'desc' => 'Contains information about a locale.',
  'persistent' => false,
  'attributes' => 
  array (
    'charset' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The character set that the locale uses (for example &quot;iso-8859-1&quot;).',
    ),
    'allowed_charsets' => 
    array (
      'type' => 'array [string]',
      'static' => true,
      'desc' => 'An array of strings containing the allowed character sets.',
    ),
    'country_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the country that the locale belongs to (for example &quot;United Kingdom&quot;).',
    ),
    'country_comment' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A comment about the country that the locale belongs to (usually empty).',
    ),
    'country_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The country code (for example &quot;GB&quot; for Great Britian).',
    ),
    'country_variation' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The country variation.',
    ),
    'language_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The native name of the language (for example &quot;Norsk&quot;, &quot;Magyar&quot;, etc.).',
    ),
    'intl_language_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The international name of the language (for example &quot;Norwegian&quot;, &quot;Hungarian&quot;, etc.).',
    ),
    'language_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The language code (for example &quot;eng&quot;).',
    ),
    'language_comment' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A comment about the language itself (usually empty).',
    ),
    'locale_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The actual locale code (for example &quot;eng-GB&quot;, &quot;nor-NO&quot;, etc.).',
    ),
    'locale_full_code' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The full locale code (for example &quot;eng-GB&quot;).',
    ),
    'http_locale_code' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The HTTP locale code (for example &quot;eng-GB&quot;).',
    ),
    'decimal_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The decimal symbol (for example a dot &quot;.&quot;).',
    ),
    'thousands_separator' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The character (if any) that is used to separate/split large numbers.',
    ),
    'decimal_count' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The number of decimal digits that should be displayed.',
    ),
    'negative_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The symbol used for displaying negative numbers (usually just a dash: &quot;-&quot;).',
    ),
    'positive_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The symbol used for displaying positive numbers (usually empty).',
    ),
    'currency_decimal_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The symbol used for separating the integer part from the decimal part of currency values.',
    ),
    'currency_thousands_separator' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The thousand separator used for currencies.',
    ),
    'currency_decimal_count' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The number of decimal digits that should be included when displaying currencies.',
    ),
    'currency_negative_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The symbol used for displaying negative currencies (usually just a dash: &quot;-&quot;).',
    ),
    'currency_positive_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The symbol used for displaying positive currencies (usually empty).',
    ),
    'currency_symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The currency symbol (for example &quot;£&quot;).',
    ),
    'currency_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the currency (for example &quot;British Pound&quot;, &quot;Norwegian Kroner&quot;, etc.).',
    ),
    'currency_short_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A short/abbreviated name for the currency (for example &quot;BSP&quot;, &quot;NOK&quot;, etc.).',
    ),
    'is_monday_first' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'Returns TRUE if monday is considered to be the first day of the week, FALSE otherwise.',
    ),
    'weekday_name_list' => 
    array (
      'type' => 'array [string]',
      'static' => false,
      'desc' => 'An array of strings containing the weekday names (for example &quot;Monday&quot;, &quot;Tuesday&quot;, etc.).',
    ),
    'weekday_short_name_list' => 
    array (
      'type' => 'array [string]',
      'static' => false,
      'desc' => 'An array of strings containing abbreviated weekday names (for example &quot;Mon&quot;, &quot;Tue&quot;, etc.).',
    ),
    'weekday_number_list' => 
    array (
      'type' => 'array [string]',
      'static' => true,
      'desc' => 'An array of strings containing the weekday numbers (for example &quot;0&quot;, &quot;1&quot;, etc.).',
    ),
    'month_list' => 
    array (
      'type' => 'array [string]',
      'static' => true,
      'desc' => 'An array of strings containing the month digits (for example &quot;1&quot; for January, &quot;2&quot; for February, etc.).',
    ),
    'month_name_list' => 
    array (
      'type' => 'array [string]',
      'static' => true,
      'desc' => 'An array of strings containing the name of the months (for example &quot;January&quot;, &quot;February&quot;, etc.).',
    ),
    'is_valid' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'Returns TRUE if the locale is valid (successfully read from disk), FALSE otherwise (unknown locale).',
    ),
  ),
);
?>