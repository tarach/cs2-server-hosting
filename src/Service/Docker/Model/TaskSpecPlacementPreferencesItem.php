<?php

namespace App\Service\Docker\Model;

class TaskSpecPlacementPreferencesItem
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var TaskSpecPlacementPreferencesItemSpread
     */
    protected $spread;

    public function getSpread(): TaskSpecPlacementPreferencesItemSpread
    {
        return $this->spread;
    }

    public function setSpread(TaskSpecPlacementPreferencesItemSpread $spread): self
    {
        $this->initialized['spread'] = true;
        $this->spread = $spread;

        return $this;
    }
}
