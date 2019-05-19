<?php

/**
 * h class (html shortcut)
 */
/**
 * h class
 */
class h
{

    /**
     * dtd
     *
     * @var string
     */
    const dtd = '<!doctype html>';

    /**
     * br
     *
     * @var string
     */
    const br = '<br>';

    /**
     * a
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function a($content = '', $attrs = [])
    {
        return self::e('a', $content, $attrs);
    }

    /**
     * button
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function b($content = '', $attrs = [])
    {
        return self::e('button', $content, $attrs);
    }

    /**
     * div
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function d($content = '', $attrs = [])
    {
        return self::e('div', $content, $attrs);
    }

    /**
     * element
     *
     * @param string $name
     *            name
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function e($name, $content = null, $attrs = [])
    {
        $ret = '<' . $name;
        if (! empty($attrs)) {
            foreach ($attrs as $k => $v) {
                if ($v !== null) {
                    $ret .= ' ' . $k . '="' . $v . '"';
                } else {
                    $ret .= ' ' . $k;
                }
            }
        }
        $ret .= '>';
        if ($content !== null) {
            $ret .= $content . '</' . $name . '>';
        }
        return $ret;
    }

    /**
     * form
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function f($content = '', $attrs = [])
    {
        return self::e('form', $content, $attrs);
    }

    /**
     * font awesome icon
     *
     * @param string $name
     *            name
     * @param string $class
     *            class
     * @return string html
     * @link https://fontawesome.com
     */
    public static function fa($name, $class = '')
    {
        $value = 'fas fa-' . $name;
        if (! empty($class)) {
            $value .= ' ' . $class;
        }
        return self::e('i', '', a::c($value));
    }

    /**
     * h1
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function h1($content = '', $attrs = [])
    {
        return self::e('h1', $content, $attrs);
    }

    /**
     * h2
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function h2($content = '', $attrs = [])
    {
        return self::e('h2', $content, $attrs);
    }

    /**
     * h3
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function h3($content = '', $attrs = [])
    {
        return self::e('h3', $content, $attrs);
    }

    /**
     * h4
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function h4($content = '', $attrs = [])
    {
        return self::e('h4', $content, $attrs);
    }

    /**
     * h5
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function h5($content = '', $attrs = [])
    {
        return self::e('h5', $content, $attrs);
    }

    /**
     * h6
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function h6($content = '', $attrs = [])
    {
        return self::e('h6', $content, $attrs);
    }

    /**
     * input
     *
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function i($attrs)
    {
        return self::e('input', null, $attrs);
    }

    /**
     * label
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function l($content = '', $attrs = [])
    {
        return self::e('label', $content, $attrs);
    }

    /**
     * li
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function li($content = '', $attrs = [])
    {
        return self::e('li', $content, $attrs);
    }

    /**
     * meta
     *
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function mt($attrs = [])
    {
        return self::e('meta', null, $attrs);
    }

    /**
     * nav
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function nav($content = '', $attrs = [])
    {
        return self::e('nav', $content, $attrs);
    }

    /**
     * option
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function o($content = '', $attrs = [])
    {
        return self::e('option', $content, $attrs);
    }

    /**
     * ol
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function ol($content = '', $attrs = [])
    {
        return self::e('ol', $content, $attrs);
    }

    /**
     * p
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function p($content = '', $attrs = [])
    {
        return self::e('p', $content, $attrs);
    }

    /**
     * select
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function s($content = '', $attrs = [])
    {
        return self::e('select', $content, $attrs);
    }

    /**
     * span
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function sp($content = '', $attrs = [])
    {
        return self::e('span', $content, $attrs);
    }

    /**
     * table
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function t($content = '', $attrs = [])
    {
        return self::e('table', $content, $attrs);
    }

    /**
     * tbody
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function tbd($content = '', $attrs = [])
    {
        return self::e('tbody', $content, $attrs);
    }

    /**
     * td
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function td($content = '', $attrs = [])
    {
        return self::e('td', $content, $attrs);
    }

    /**
     * tfoot
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function tft($content = '', $attrs = [])
    {
        return self::e('tfoot', $content, $attrs);
    }

    /**
     * th
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function th($content = '', $attrs = [])
    {
        return self::e('th', $content, $attrs);
    }

    /**
     * thead
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function thd($content = '', $attrs = [])
    {
        return self::e('thead', $content, $attrs);
    }

    /**
     * tr
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function tr($content = '', $attrs = [])
    {
        return self::e('tr', $content, $attrs);
    }

    /**
     * ul
     *
     * @param string $content
     *            content
     * @param string[] $attrs
     *            attrs
     * @return string html
     */
    public static function ul($content = '', $attrs = [])
    {
        return self::e('ul', $content, $attrs);
    }
}