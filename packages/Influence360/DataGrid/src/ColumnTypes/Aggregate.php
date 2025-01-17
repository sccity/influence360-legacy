<?php

namespace Influence360\DataGrid\ColumnTypes;

use Influence360\DataGrid\Column;
use Influence360\DataGrid\Enums\FilterTypeEnum;

class Aggregate extends Column
{
    /**
     * Process filter.
     */
    public function processFilter($queryBuilder, $requestedValues)
    {
        if ($this->filterableType === FilterTypeEnum::DROPDOWN->value) {
            return $queryBuilder->having(function ($scopeQueryBuilder) use ($requestedValues) {
                if (is_string($requestedValues)) {
                    $scopeQueryBuilder->orHaving($this->columnName, $requestedValues);

                    return;
                }

                foreach ($requestedValues as $value) {
                    $scopeQueryBuilder->orHaving($this->columnName, $value);
                }
            });
        }

        return $queryBuilder->having(function ($scopeQueryBuilder) use ($requestedValues) {
            if (is_string($requestedValues)) {
                $scopeQueryBuilder->orHaving($this->columnName, 'LIKE', '%'.$requestedValues.'%');

                return;
            }

            foreach ($requestedValues as $value) {
                $scopeQueryBuilder->orHaving($this->columnName, 'LIKE', '%'.$value.'%');
            }
        });
    }
}
