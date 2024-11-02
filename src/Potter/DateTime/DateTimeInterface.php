<?php

declare(strict_types=1);

namespace Potter\DateTime;

use \DateTimeInterface as BaseDateTimeInterface,
    DateInterval, DateTimeZone;

interface DateTimeInterface extends BaseDateTimeInterface
{   
    public function diff(BaseDateTimeInterface $targetObject, bool $absolute = false): DateInterval;
    public function format(string $format): string;
    public function getOffset(): int;
    public function getTimestamp(): int;
    public function getTimezone(): DateTimeZone|false;
    public function __wakeup(): void;
}
