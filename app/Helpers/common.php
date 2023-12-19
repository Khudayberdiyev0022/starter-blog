<?php

if (!function_exists('activeLink')) {
  function activeLink(string|array $name, string $class = 'active'): string|array
  {
    return request()->routeIs($name) ? $class : '';
  }
}
