<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\ResponseType;

use AuthBucket\OAuth2\ResponseType\ResponseTypeHandlerInterface;
use Symfony\Component\HttpFoundation\Request;

class BarResponseTypeHandler implements ResponseTypeHandlerInterface
{
    public function handle(Request $request)
    {
    }
}
