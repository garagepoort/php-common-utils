<?php

namespace Bendani\PhpCommon\Utils\Model;

class StringUtils {

    public static function emptyToNull($string)
    {
        if (trim($string) === '')
            $string = null;

        return $string;
    }

    public static function isEmpty($string){
        return !isset($string) || trim($string) === '';
    }

    public static function contains($stringToContain, $chars){
        return stripos($stringToContain,$chars) !== false;
    }

    public static function split($stringToSplit, $delimiter){
        return explode($delimiter, $stringToSplit);
    }

    public static function clean($string) {
        return preg_replace('/[^A-Za-z0-9.]/', '', $string); // Removes special chars.
    }

    public static function replace($string, $charToReplace, $replaceChar) {
        return str_replace($charToReplace, $replaceChar, $string);
    }

    public static function toLowerCase($value)
    {
        return strtolower($value);
    }

    public static function toBoolean($string){
        return $string === 'true'? true: false;
    }

    public static function toMysqlBoolean($string){
        return $string === 'true'? 1: 0;
    }
}