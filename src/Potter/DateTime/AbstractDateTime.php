<?php

declare(strict_types=1);

namespace Potter\DateTime;

use DateInterval, DateTime, DateTimeZone;

abstract class AbstractDateTime extends DateTime implements DateTimeInterface
{
    abstract public function diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval;
    abstract public function format(string $format): string;
    abstract public function getOffset(): int;
    abstract public function getTimestamp(): int;
    abstract public function getTimezone(): DateTimeZone|false;
    abstract public function __wakeup(): void;
}
