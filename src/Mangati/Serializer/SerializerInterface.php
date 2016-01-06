<?php

namespace Mangati\Serializer;

/**
 * SerializerInterface
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface SerializerInterface
{
    
    public function serialize($data);
    
    public function unserialize($data);
    
}
