<?php

declare(strict_types=1);

namespace Potter\DateTime;

use DateInterval, DateTimeInterface as NativeDateTimeInterface, DateTimeZone;

interface DateTimeInterface extends NativeDateTimeInterface
{
    final public const string ATOM = "Y-m-d\\TH:i:sP";
    final public const string COOKIE = "l, d-M-Y H:i:s T";
    final public const string ISO8601 = "Y-m-d\\TH:i:sO";
    final public const string ISO8601_EXPANDED = "X-m-d\\TH:i:sP";
    final public const string RFC822 = "D, d M y H:i:s O";
    final public const string RFC850 = "l, d-M-y H:i:s T";
    final public const string RFC1036 = "D, d M y H:i:s O";
    final public const string RFC1123 = "D, d M Y H:i:s O";
    final public const string RFC7231 = "D, d M Y H:i:s \\G\\M\\T";
    final public const string RFC2822 = "D, d M Y H:i:s O";
    final public const string RFC3339 = "Y-m-d\\TH:i:sP";
    final public const string RFC3339_EXTENDED = "Y-m-d\\TH:i:s.vP";
    final public const string RSS = "D, d M Y H:i:s O";
    final public const string W3C = "Y-m-d\\TH:i:sP";
    
    public function diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval;
    public function format(string $format): string;
    public function getOffset(): int;
    public function getTimestamp(): int;
    public function getTimezone(): DateTimeZone|false;
    public function __wakeup(): void;
}
