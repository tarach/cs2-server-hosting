<?php

namespace App\Service\Docker\Model;

class ServiceSpecModeReplicated
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
     * @var int
     */
    protected $replicas;

    public function getReplicas(): int
    {
        return $this->replicas;
    }

    public function setReplicas(int $replicas): self
    {
        $this->initialized['replicas'] = true;
        $this->replicas = $replicas;

        return $this;
    }
}
