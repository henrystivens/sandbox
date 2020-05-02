<?php

class Cities extends \Kumbia\ActiveRecord\LiteRecord
{
    /**
     * List all cities by region ID
     *
     * @param  int $regionId Region ID
     * 
     * @return array
     */
    public static function formSelect(int $regionId): array
    {
        if ($regionId <= 0) {
            return [];
        }

        $sql = 'SELECT id, name FROM cities WHERE regions_id = :regions_id';

        return self::all($sql, ['regions_id' => $regionId]);
    }
}
