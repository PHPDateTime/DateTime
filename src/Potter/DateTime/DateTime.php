<?php

declare(strict_types=1);

namespace Potter\DateTime;

use Carbon\CarbonTimeZone, DateTimeZone,
    Potter\DateTime\Zone\TimeZone;

final class DateTime extends AbstractDateTime
{
    public function getTimezone(): CarbonTimeZone
    {
        return ($timeZone = parent::getTimezone()) === false ?
            false : TimeZone::inherit($timeZone);
    }
}
