<?php
/**
 * This file is part of the prooph/service-bus.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prooph\ServiceBus\Plugin\Router;

use Prooph\Common\Event\ActionEvent;

interface MessageBusRouterPlugin
{
    /**
     * Handle route action event of a message bus dispatch
     */
    public function onRouteMessage(ActionEvent $actionEvent): void;
}
