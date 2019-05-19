<?php

/**
 * a class (attribute shortcut)
 */
/**
 * a class
 */
class a
{

    /**
     * key value
     *
     * @param string $key
     *            key
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function kv($key = '', $value = '')
    {
        return [
            $key => $value
        ];
    }

    /**
     * aria-*
     *
     * @param string $key
     *            key
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function ar($key = '', $value = '')
    {
        return self::kv('aria-' . $key, $value);
    }

    /**
     * class
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function c($value = '')
    {
        return self::kv('class', $value);
    }

    /**
     * checked
     *
     * @return string[] attribute
     */
    public static function chk()
    {
        return self::kv('checked', null);
    }

    /**
     * data-*
     *
     * @param string $key
     *            key
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function d($key = '', $value = '')
    {
        return self::kv('data-' . $key, $value);
    }

    /**
     * for
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function f($value = '')
    {
        return self::kv('for', $value);
    }

    /**
     * href
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function hr($value = '')
    {
        return self::kv('href', $value);
    }

    /**
     * id
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function i($value = '')
    {
        return self::kv('id', $value);
    }

    /**
     * label
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function l($value = '')
    {
        return self::kv('label', $value);
    }

    /**
     * multiple
     *
     * @return string[] attribute
     */
    public static function mul()
    {
        return self::kv('multiple', null);
    }

    /**
     * name
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function n($value = '')
    {
        return self::kv('name', $value);
    }

    /**
     * role
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function r($value = '')
    {
        return self::kv('role', $value);
    }

    /**
     * required
     *
     * @return string[] attribute
     */
    public static function req()
    {
        return self::kv('required', null);
    }

    /**
     * style
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function s($value = '')
    {
        return self::kv('style', $value);
    }

    /**
     * type
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function t($value = '')
    {
        return self::kv('type', $value);
    }

    /**
     * tabindex
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function ti($value = '')
    {
        return self::kv('tabindex', $value);
    }

    /**
     * title
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function tt($value = '')
    {
        return self::kv('title', $value);
    }

    /**
     * value
     *
     * @param string $value
     *            value
     * @return string[] attribute
     */
    public static function v($value = '')
    {
        return self::kv('value', $value);
    }
}