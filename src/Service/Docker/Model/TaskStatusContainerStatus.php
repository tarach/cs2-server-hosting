<?php

namespace App\Service\Docker\Model;

class TaskStatusContainerStatus
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
    protected $containerID;
    /**
     * @var int
     */
    protected $pID;
    /**
     * @var int
     */
    protected $exitCode;

    public function getContainerID(): string
    {
        return $this->containerID;
    }

    public function setContainerID(string $containerID): self
    {
        $this->initialized['containerID'] = true;
        $this->containerID = $containerID;

        return $this;
    }

    public function getPID(): int
    {
        return $this->pID;
    }

    public function setPID(int $pID): self
    {
        $this->initialized['pID'] = true;
        $this->pID = $pID;

        return $this;
    }

    public function getExitCode(): int
    {
        return $this->exitCode;
    }

    public function setExitCode(int $exitCode): self
    {
        $this->initialized['exitCode'] = true;
        $this->exitCode = $exitCode;

        return $this;
    }
}
