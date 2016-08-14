<?php

namespace Melon\Models\Scopes;

trait StateScopes
{
    /**
     * This scope is used with a single state name.
     *
     * @param $query
     * @param string $state State name.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithState($query, $state)
    {
        return $query->where('state', $this->states[$state]);
    }

    /**
     * This scope is used with a list of possible state names.
     *
     * @param $query
     * @param string $states Array of state names.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithStates($query, $states)
    {
        $state_ids = [];
        foreach ($states as $state_name) {
            $state_ids[] = $this->states[$state_name];
        }

        return $query->whereIn('state', $state_ids);
    }
}
