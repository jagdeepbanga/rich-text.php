<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\StructuredText\NodeMapper;

use Contentful\Core\Api\LinkResolverInterface;
use Contentful\StructuredText\Node\NodeInterface;
use Contentful\StructuredText\ParserInterface;

interface NodeMapperInterface
{
    /**
     * @param ParserInterface       $parser
     * @param LinkResolverInterface $linkResolver
     * @param array                 $data
     *
     * @return NodeInterface
     */
    public function map(ParserInterface $parser, LinkResolverInterface $linkResolver, array $data): NodeInterface;
}
