<?php

declare(strict_types=1);

namespace PHPDateTime;

use Carbon\CarbonInterface, DateInterval, DateTimeZone,
    \DateTimeInterface as BaseDateTimeInterface,
    Potter\Json\Serializable\JsonSerializableInterface;

interface DateTimeInterface extends CarbonInterface, JsonSerializableInterface
{   
    public function diff(BaseDateTimeInterface $targetObject, bool $absolute = false): DateInterval;
    public function format(string $format): string;
    public function getOffset(): int;
    public function getTimestamp(): int;
    public function getTimezone(): DateTimeZone|false;
    public function __wakeup(): void;
}
