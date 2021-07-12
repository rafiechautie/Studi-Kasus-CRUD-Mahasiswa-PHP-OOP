<?php

namespace Helper {

    class Helper
    {
        static function input(string $info): string
        {
            echo "$info: ";
            $result = fgets(STDIN);

            return trim($result);
        }
    }
}
