<?php

namespace Container2aG84xw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_SerializerService extends App_KernelDevContainer
{
    /*
     * Gets the public '.container.private.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'));
        $b = ($container->privates['serializer.mapping.cache_class_metadata_factory'] ?? $container->load('getSerializer_Mapping_CacheClassMetadataFactoryService'));

        $c = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($b);

        return $container->services['.container.private.serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer($a), 1 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(false), 2 => new \Symfony\Component\Serializer\Normalizer\UidNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $c), 6 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 7 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer(), 9 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(NULL), 10 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 11 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($b, $c, $a, ($container->privates['property_info.cache'] ?? $container->load('getPropertyInfo_CacheService')), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($b), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }
}
