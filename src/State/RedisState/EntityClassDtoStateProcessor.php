<?php

declare(strict_types=1);

namespace App\State\RedisState;

use ApiPlatform\Metadata\DeleteOperationInterface;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\ApiResource\PostAuthViaSteamResource;
use LogicException;

class EntityClassDtoStateProcessor extends AbstractStateOperation implements ProcessorInterface
{
    /**
     * Processes the state.
     *
     * @param array<string, mixed> $uriVariables
     * @param array<string, mixed> $context
     *
     * @return T
     * @throws AlreadyExistsException
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        if ($operation instanceof DeleteOperationInterface) {
            throw new LogicException('Delete operation is no supported.');
        }

        assert($data instanceof PostAuthViaSteamResource);

        $entityClass = $this->getEntityClass($operation);
        $entity = $this->mapper->mapToEntity($data, $entityClass);

        $repository = $this->getRepositoryObject($entityClass);

        if (!$repository->write($entity->uuid, $entity)) {
            throw new AlreadyExistsException();
        }

        return $data;
    }
}
