<?php


namespace internal\Models;


use Spatie\Enum\Enum;

// For type log we better off with Enum rather than class like this
// But due to shit PHP design enum doesnt exist until PHP 8.1
// As of i write this enum are still RFC so i use this band aid..

// Please convert this to PHP 8 Annotations :")
/**
 * @method static self NOTICE()
 * @method static self SUCCESS()
 * @method static self WARNING()
 * @method static self MODIFIED()
 * @method static self ADDED()
 */
final class TypeEnum extends Enum
{

}
