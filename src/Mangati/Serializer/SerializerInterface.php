<?php

namespace Mangati\Serializer;

/**
 * SerializerInterface
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface SerializerInterface
{
    
    /**
     * @param mixed  $data    any data
     * @param array  $context options
     *
     * @return string
     */
    public function serialize($data, array $context = []);
    
    /**
     * @param mixed  $data
     * @param string $type
     * @param array  $context
     *
     * @return object
     */
    public function deserialize($data, $type, array $context = []);
    
}
