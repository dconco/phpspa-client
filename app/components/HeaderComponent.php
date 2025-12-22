<?php

use function Component\import;

function HeaderComponent() {
   var_dump(glob(__DIR__ . '../../public/*'));
   $logo = import('public/logo.svg');

   return <<<HTML
      <span class="pill">
         <img src="{$logo}" class="h-4 w-4" alt="PhpSPA + Vite Client Logo" />
         PhpSPA + Vite
      </span>
   HTML;
}
