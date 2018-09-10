<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\StructuredText\Node;

class OrderedList implements NodeInterface
{
    /**
     * @var ListItem[]
     */
    private $content = [];

    /**
     * OrderedList constructor.
     *
     * @param ListItem[] $content
     */
    public function __construct(array $content)
    {
        $this->content = $content;
    }

    /**
     * @return ListItem[]
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public static function getType(): string
    {
        return 'ordered-list';
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'nodeType' => self::getType(),
            'content' => $this->content,
        ];
    }
}
