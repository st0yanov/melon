<?php

namespace Melon\Models\Mutators;

trait StateMutators
{
    public function getStateAttribute($state_id)
    {
        return array_search($state_id, $this->states);
    }

    public function setStateAttribute($state_name)
    {
        $this->attributes['state'] = $this->states[$state_name];
    }
}
