<?php

/**
 * Class SimpleXML
 * Based on SimpleXMLElement.
 * Supports adding CData.
 */
class SimpleXML extends SimpleXMLElement
{
    /**
     * @param $text
     */
    public function addCData($text)
    {
        $node = dom_import_simplexml($this);
        $no = $node->ownerDocument;
        $node->appendChild($no->createCDATASection($text));
    }

    /**
     * @param string $path
     *
     * @return SimpleXML[]
     */
    public function xpath($path)
    {
        return parent::xpath($path);
    }

    /**
     * @param string $name
     * @param null   $value
     * @param null   $namespace
     *
     * @return SimpleXML
     */
    public function addChild($name, $value = null, $namespace = null)
    {
        return parent::addChild($name, $value, $namespace);
    }

    /**
     * @param child $name
     *
     * @return SimpleXML[]
     */
    function __get($name)
    {
        return parent::__get($name);
    }
}