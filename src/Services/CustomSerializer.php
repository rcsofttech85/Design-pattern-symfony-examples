<?php

namespace App\Services;

use Symfony\Component\DependencyInjection\Attribute\AsDecorator;
use Symfony\Component\Serializer\SerializerInterface;


#[AsDecorator('serializer')]
class CustomSerializer implements SerializerInterface
{

    public function __construct(private readonly SerializerInterface $serializer)
    {
    }

    public function serialize(mixed $data, string $format, array $context = []): string
    {
        $serializedData = $this->serializer->serialize($data, $format);

        return sprintf("serialized data :%s", $serializedData);
    }

    public function deserialize(mixed $data, string $type, string $format, array $context = []): mixed
    {
        return "custom deserialization was successful";
    }
}