<?php

/**
 * j (jQuery)
 */
/**
 * j class
 */
class j
{

    /**
     * array
     *
     * @param string[] $src
     *            src
     * @param string $member
     *            member
     * @param bool $skip
     *            skip
     * @return string js
     */
    public static function a($src, $member = '', $skip = false)
    {
        $ret = '';
        if ($member != '') {
            $ret .= $member . ':';
        }
        $ret .= '[';
        if (! empty($src)) {
            if ($skip) {
                $ret .= implode(',', $src);
            } else {
                $rows = [];
                foreach ($src as $v) {
                    $rows[] = self::v($v);
                }
                $ret .= implode(',', $rows);
            }
        }
        $ret .= ']';
        return $ret;
    }

    /**
     * class
     *
     * @param string $class
     *            class
     * @return string class
     */
    public static function c($class)
    {
        return self::s('".' . $class . '"');
    }

    /**
     * quotation
     *
     * @param string $str
     *            str
     * @return string quotation
     */
    public static function q($str)
    {
        return "'{$str}'";
    }

    /**
     * double-quotation
     *
     * @param string $str
     *            str
     * @return string double-quotation
     */
    public static function dq($str)
    {
        return '"' . $str . '"';
    }

    /**
     * function
     *
     * @param string $src
     *            src
     * @param string $args
     *            args
     * @param string $name
     *            name
     * @return string js
     */
    public static function f($src, $args = '', $name = '')
    {
        return 'function ' . $name . '(' . $args . '){ ' . $src . '}';
    }

    /**
     * id
     *
     * @param string $id
     *            id
     * @return string js
     */
    public static function i($id)
    {
        return self::s('"#' . $id . '"');
    }

    /**
     * method
     *
     * @param string $selector
     *            selector
     * @param string $name
     *            name
     * @param string|string[] $param
     *            param
     * @param bool $continue
     *            continue
     * @return string js
     */
    public static function m($selector, $name, $param = '', $continue = false)
    {
        $ret = '';
        if (! empty($selector) && ! empty($name)) {
            $ret .= $selector . '.' . $name . '(';
            if (! empty($param)) {
                if (is_string($param)) {
                    $ret .= $param;
                } else {
                    $ret .= implode(',', $param);
                }
            }
            $ret .= ')';
            if (! $continue) {
                $ret .= ';';
            }
        }
        return $ret;
    }

    /**
     * object
     *
     * @param string[] $src
     *            src
     * @param string $member
     *            member
     * @param bool $skip
     *            skip
     * @return string js
     */
    public static function o($src, $member = '', $skip = false)
    {
        $ret = '';
        if ($member != '') {
            $ret .= $member . ':';
        }
        $ret .= '{ ';
        if (! empty($src)) {
            if ($skip) {
                if (is_array($src)) {
                    $ret .= implode(',', $src);
                } else {
                    $ret .= $src;
                }
            } else {
                $rows = [];
                foreach ($src as $k => $v) {
                    if (is_numeric($k)) {
                        $rows[] = self::v($v);
                    } else {
                        $rows[] = self::v($v, $k);
                    }
                }
                $ret .= implode(',', $rows);
            }
        }
        $ret .= '}';
        return $ret;
    }

    /**
     * ready
     *
     * @param string $src
     *            src
     * @return string js
     */
    public static function r($src)
    {
        return self::s(self::f($src)) . ';';
    }

    /**
     * selector
     *
     * @param string $selector
     *            selector
     * @return string js
     */
    public static function s($selector)
    {
        return '$(' . $selector . ')';
    }

    /**
     * value
     *
     * @param string $value
     *            value
     * @param string $member
     *            member
     * @return string value
     */
    public static function v($value, $member = '')
    {
        $ret = '';
        if ($member != '') {
            $ret .= $member . ':';
        }
        if (is_array($value)) {
            $ret .= self::a($value);
        } else if (is_bool($value)) {
            $ret .= $value ? 'true' : 'false';
        } else if (is_numeric($value)) {
            $ret .= $value;
        } else if (is_object($value)) {
            $ret .= self::o($value);
        } else if (is_string($value)) {
            if ($value !== 'null') {
                if (strpos($value, 'function') === false) {
                    $ret .= '"' . $value . '"';
                } else {
                    $ret .= $value;
                }
            } else {
                $ret .= $value;
            }
        } else {
            $ret .= 'undefined';
        }
        return $ret;
    }
}