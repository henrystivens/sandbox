<?php

class Regions extends \Kumbia\ActiveRecord\LiteRecord
{
    /**
     * List all regions by country ID
     *
     * @param  int $countryId Country ID
     * 
     * @return array
     */
    public static function formSelect(int $countryId): array
    {
        if ($countryId <= 0) {
            return [];
        }

        $sql = 'SELECT id, name FROM regions WHERE countries_id = :countries_id';

        return self::all($sql, ['countries_id' => $countryId]);
    }
}
