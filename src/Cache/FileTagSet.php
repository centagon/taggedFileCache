<?php
namespace Centagon\Cache;

use Illuminate\Cache\TagSet;

class FileTagSet extends TagSet
{
    /**
     * Get the tag identifier key for a given tag.
     *
     * @param  string  $name
     * @return string
     */
    public function tagKey($name)
    {
        return 'cache_tags' . $this->store->separator . preg_replace('/[^\w\s\d\-_~,;\[\]\(\).]/', '~', $name);
    }
}
