<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewLocation extends InputObject
{
    /**
     * @return string
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string $value
     */
    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    public function hasPublicationId(): bool
    {
        return $this->has('publicationId');
    }

    public function unsetPublicationId(): self
    {
        return $this->remove('publicationId');
    }

    /**
     * @return string|null
     */
    public function getLandingPage()
    {
        return $this->get('landingPage');
    }

    /**
     * @param string|null $value
     */
    public function setLandingPage($value): self
    {
        return $this->set('landingPage', $value);
    }

    public function hasLandingPage(): bool
    {
        return $this->has('landingPage');
    }

    public function unsetLandingPage(): self
    {
        return $this->remove('landingPage');
    }

    /**
     * @return string|null
     */
    public function getFullTextUrl()
    {
        return $this->get('fullTextUrl');
    }

    /**
     * @param string|null $value
     */
    public function setFullTextUrl($value): self
    {
        return $this->set('fullTextUrl', $value);
    }

    public function hasFullTextUrl(): bool
    {
        return $this->has('fullTextUrl');
    }

    public function unsetFullTextUrl(): self
    {
        return $this->remove('fullTextUrl');
    }

    /**
     * @return string
     */
    public function getLocationPlatform()
    {
        return $this->get('locationPlatform');
    }

    /**
     * @param string $value
     */
    public function setLocationPlatform($value): self
    {
        return $this->set('locationPlatform', $value);
    }

    public function hasLocationPlatform(): bool
    {
        return $this->has('locationPlatform');
    }

    public function unsetLocationPlatform(): self
    {
        return $this->remove('locationPlatform');
    }

    /**
     * @return bool
     */
    public function getCanonical()
    {
        return $this->get('canonical');
    }

    /**
     * @param bool $value
     */
    public function setCanonical($value): self
    {
        return $this->set('canonical', $value);
    }

    public function hasCanonical(): bool
    {
        return $this->has('canonical');
    }

    public function unsetCanonical(): self
    {
        return $this->remove('canonical');
    }

    /**
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->get('checksum');
    }

    /**
     * @param string|null $value
     */
    public function setChecksum($value): self
    {
        return $this->set('checksum', $value);
    }

    public function hasChecksum(): bool
    {
        return $this->has('checksum');
    }

    public function unsetChecksum(): self
    {
        return $this->remove('checksum');
    }

    /**
     * @return string|null
     */
    public function getChecksumAlgorithm()
    {
        return $this->get('checksumAlgorithm');
    }

    /**
     * @param string|null $value
     */
    public function setChecksumAlgorithm($value): self
    {
        return $this->set('checksumAlgorithm', $value);
    }

    public function hasChecksumAlgorithm(): bool
    {
        return $this->has('checksumAlgorithm');
    }

    public function unsetChecksumAlgorithm(): self
    {
        return $this->remove('checksumAlgorithm');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewLocation', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'landingPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'fullTextUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'locationPlatform',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LocationPlatform',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'canonical',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'checksum',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'checksumAlgorithm',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'ChecksumAlgorithm',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
