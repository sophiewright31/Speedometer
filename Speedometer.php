<?php

class Speedometer {

    public const ONE_KM_IN_MILES = 0.621;
    public const ONE_MILE_IN_KM = 1.61;

    public static function convertKmToMiles(float $numberInKm)
    {
        return $numberInKm * self::ONE_KM_IN_MILES;
    }
    public static function convertMilesToKm(float $numberInMiles)
    {
        return $numberInMiles * self::ONE_MILE_IN_KM;
    }
}
echo Speedometer::convertKmToMiles('10');
