<?php

declare(strict_types=1);

namespace Potter\DateTime;

use DateTimeZone;
use Potter\DateTime\Zone\TimeZone;

final class DateTime extends AbstractDateTime
{
    public function getTimezone(): DateTimeZone|false
    {
        return ($timeZone = parent::getTimezone()) === false ?
            false : TimeZone::inherit($timeZone);
    }
}
