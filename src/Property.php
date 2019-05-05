<?php namespace arnehendriksen\LaravelProperty;

class Property
{

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Checks if given property is set.
     *
     * @param $prop
     * @return bool
     */
    public function has($prop)
    {
        if (isset($this->{$prop})) {
            return true;
        }
        return false;
    }

    /**
     * Returns the property value, unless property is not set, in which case it will return the given string.
     *
     * @param $prop
     * @param string $str
     * @return string
     */
    public function getElse($prop, $str = '')
    {
        if ($this->has($prop)) {
            return $this->{$prop};
        }
        return $str;
    }

    /**
     * Returns the property value.
     *
     * @param $prop
     * @return mixed
     */
    public function get($prop)
    {
        return $this->{$prop};
    }

    /**
     * Sets the property and its value.
     *
     * @param $prop
     * @param $value
     */
    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }

    /**
     * Push an element to the end of an array.
     *
     * @param $prop
     * @param $value
     */
    public function push($prop, $value)
    {
        if (!$this->has($prop)) {
            $this->set($prop, []);
        }
        array_push($this->{$prop}, $value);
    }

    /**
     * Unsets a property.
     *
     * @param $prop
     * @return bool
     */
    public function forget($prop)
    {
        if (isset($this->{$prop})) {
            unset($this->{$prop});
            return true;
        }
        return false;
    }

    /**
     * Returns a json encoded version of the property. If no property is given, all properties will be returned.
     * This is useful when debugging.
     *
     * @param bool $prop
     * @return string
     */
    public function json($prop = false)
    {
        if ($prop) {
            return $this->{$prop};
        }
        return json_encode($this);
    }
}
