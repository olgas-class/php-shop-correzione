<?php
class Category {
    /**
     * @param string $name
     */
    function __construct(private string $name) {
        $this->name = $name;
    }
}
