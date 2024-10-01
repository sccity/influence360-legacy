<?php

namespace Influence360\DataGrid\Enums;

use Influence360\DataGrid\ColumnTypes\Aggregate;
use Influence360\DataGrid\ColumnTypes\Boolean;
use Influence360\DataGrid\ColumnTypes\Date;
use Influence360\DataGrid\ColumnTypes\Datetime;
use Influence360\DataGrid\ColumnTypes\Decimal;
use Influence360\DataGrid\ColumnTypes\Integer;
use Influence360\DataGrid\ColumnTypes\Text;
use Influence360\DataGrid\Exceptions\InvalidColumnTypeException;

enum ColumnTypeEnum: string
{
    /**
     * String.
     */
    case STRING = 'string';

    /**
     * Integer.
     */
    case INTEGER = 'integer';

    /**
     * Float.
     */
    case FLOAT = 'float';

    /**
     * Boolean.
     */
    case BOOLEAN = 'boolean';

    /**
     * Date.
     */
    case DATE = 'date';

    /**
     * Date time.
     */
    case DATETIME = 'datetime';

    /**
     * Aggregate.
     */
    case AGGREGATE = 'aggregate';

    /**
     * Get the corresponding class name for the column type.
     */
    public static function getClassName(string $type): string
    {
        return match ($type) {
            self::STRING->value    => Text::class,
            self::INTEGER->value   => Integer::class,
            self::FLOAT->value     => Decimal::class,
            self::BOOLEAN->value   => Boolean::class,
            self::DATE->value      => Date::class,
            self::DATETIME->value  => Datetime::class,
            self::AGGREGATE->value => Aggregate::class,
            default                => throw new InvalidColumnTypeException("Invalid column type: {$type}"),
        };
    }
}
