<?php

/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ProophessorDo\App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class UserRegistration implements RequestHandlerInterface
{
    /**
     * @var TemplateRendererInterface
     */
    private $templates;

    public function __construct(TemplateRendererInterface $templates)
    {
        $this->templates = $templates;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new HtmlResponse(
            $this->templates->render('page::user-registration')
        );
    }
}
