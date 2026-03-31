<?php
//$date = (new DateTime())->modify('-1 hour')->getTimestamp();
//$date = new DateTime();
//$date = new DateTimeImmutable();
//$date2 =  $date->modify('+1 day');
//$date2 = clone $date;
//echo $date->format('d.m.Y H:i:s');
//$date2 = $date2->setTimezone(new DateTimeZone('Europe/Kiev'))->setTime('16','4','16');
//var_dump($date);
//var_dump($date2);
//var_dump($date > $date2);

//$date = DateTime::createFromFormat('d.m.Y', '25.3.2026');
//$date = new DateTime('25.3.2026');
//var_dump($date);

$dt = new DateTime();
$formatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
//$formatter->setPattern('d MMMM yyyy');
echo $formatter->format($dt);
