<?php

/*
 * This file is part of the badge-poser package.
 *
 * (c) PUGX <http://pugx.github.io/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PUGX\BadgeBundle\Service;

use Imagine\Image\ImageInterface;

/**
 * Class ImageCreatorInterface
 *
 * @author Giulio De Donato <liuggio@gmail.com>
 */
Interface ImageCreatorInterface
{
    /**
     * Stream the output.
     *
     * @param ImageInterface $image
     *
     * @return Boolean
     */
    public function streamRawImageData(ImageInterface $image);

    /**
     * Create the 'downloads' image with the standard Font and standard Image.
     *
     * @param string $value
     *
     * @return resource
     */
    public function createDownloadsImage($value);

    /**
     * Create the 'stable' image with the standard Font and standard Image.
     *
     * @param string $value
     *
     * @return resource
     */
    public function createStableImage($value);

    /**
     * Create the 'stable' image with the standard Font and standard Image.
     *
     * @param string $value
     *
     * @return resource
     */
    public function createUnstableImage($value = '@dev');
}
