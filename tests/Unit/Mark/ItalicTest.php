<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\StructuredText\Unit\Mark;

use Contentful\StructuredText\Mark\Italic;
use Contentful\Tests\StructuredText\TestCase;

class ItalicTest extends TestCase
{
    public function testAll()
    {
        $this->assertSame('italic', Italic::getType());

        $mark = new Italic();
        $this->assertSame('<em>Some text</em>', $mark->render('Some text'));

        $this->assertJsonFixtureEqualsJsonObject('serialize.json', $mark);
    }
}
