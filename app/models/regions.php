<?php

class Regions extends \Kumbia\ActiveRecord\LiteRecord
{
    public static function allByCountry($countryId)
    {
        $sql = 'SELECT id, name FROM regions WHERE country_id = :country_id';

        return self::all($sql, ['country_id' => $countryId]);
    }
}
