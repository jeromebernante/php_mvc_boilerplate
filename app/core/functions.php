<?php

function manilaTimeZone($format)
{
  $manilaTimezone = new DateTimeZone('Asia/Manila');
  $currentDateTimeManila = new DateTime('now', $manilaTimezone);
  $formattedDateTime = $currentDateTimeManila->format($format);
  return $formattedDateTime;
}

function show($stuff)
{
  echo "<pre>";
  print_r($stuff);
  echo "</pre>";
}