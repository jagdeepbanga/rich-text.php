<?php

/**
 * This file is part of the contentful/rich-text package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\RichText\Node;

use Contentful\Core\Resource\AssetInterface;

class EmbeddedAssetBlock extends BlockNode
{
    /**
     * @var AssetInterface
     */
    protected $asset;

    /**
     * EmbeddedAssetBlock constructor.
     *
     * @param NodeInterface[] $content
     * @param AssetInterface  $asset
     */
    public function __construct(array $content, AssetInterface $asset)
    {
        parent::__construct($content);
        $this->asset = $asset;
    }

    /**
     * @return AssetInterface
     */
    public function getAsset(): AssetInterface
    {
        return $this->asset;
    }

    /**
     * {@inheritdoc}
     */
    public static function getType(): string
    {
        return 'embedded-asset-block';
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'nodeType' => self::getType(),
            'data' => [
                'target' => $this->asset->asLink(),
            ],
            'content' => $this->content,
        ];
    }
}
