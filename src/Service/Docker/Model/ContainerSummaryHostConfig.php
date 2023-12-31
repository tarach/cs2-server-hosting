<?php

namespace App\Service\Docker\Model;

class ContainerSummaryHostConfig
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
     * @var string
     */
    protected $networkMode;

    public function getNetworkMode(): string
    {
        return $this->networkMode;
    }

    public function setNetworkMode(string $networkMode): self
    {
        $this->initialized['networkMode'] = true;
        $this->networkMode = $networkMode;

        return $this;
    }
}
