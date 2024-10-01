<?php

namespace Influence360\DataGrid\ColumnTypes;

use Influence360\DataGrid\Column;
use Influence360\DataGrid\Enums\FilterTypeEnum;

class Text extends Column
{
    /**
     * Process filter.
     */
    public function processFilter($queryBuilder, $requestedValues)
    {
        if ($this->filterableType === FilterTypeEnum::DROPDOWN->value) {
            return $queryBuilder->where(function ($scopeQueryBuilder) use ($requestedValues) {
                if (is_string($requestedValues)) {
                    $scopeQueryBuilder->orWhere($this->columnName, $requestedValues);

                    return;
                }

                foreach ($requestedValues as $value) {
                    $scopeQueryBuilder->orWhere($this->columnName, $value);
                }
            });
        }

        return $queryBuilder->where(function ($scopeQueryBuilder) use ($requestedValues) {
            if (is_string($requestedValues)) {
                $scopeQueryBuilder->orWhere($this->columnName, 'LIKE', '%'.$requestedValues.'%');

                return;
            }

            foreach ($requestedValues as $value) {
                $scopeQueryBuilder->orWhere($this->columnName, 'LIKE', '%'.$value.'%');
            }
        });
    }
}
