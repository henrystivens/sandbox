<?php

class Cities extends \Kumbia\ActiveRecord\LiteRecord
{
    public static function allByRegion($regionId)
    {
        $sql = 'SELECT id, name FROM cities WHERE region_id = :region_id';

        return self::all($sql, ['region_id' => $regionId]);
    }
}
