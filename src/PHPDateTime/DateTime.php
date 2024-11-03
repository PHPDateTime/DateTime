<?php

declare(strict_types=1);

namespace PHPDateTime;

use Carbon\CarbonTimeZone, PHPDateTime\Zone\TimeZone;

final class DateTime extends AbstractDateTime
{
    public function getTimezone(): CarbonTimeZone
    {
        return ($timeZone = parent::getTimezone()) === false ?
            false : TimeZone::inherit($timeZone);
    }
}
