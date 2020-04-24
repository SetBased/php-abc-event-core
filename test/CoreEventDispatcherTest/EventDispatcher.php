<?php
declare(strict_types=1);

namespace Plaisio\Event\Test\CoreEventDispatcherTest;

use Plaisio\Event\CoreEventDispatcher;

/**
 * Concrete implementation of the event dispatcher.
 */
class EventDispatcher extends CoreEventDispatcher
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @inheritdoc
   */
  protected static $modifyHandlers =
    [
      Event1::class => [[[EventHandler::class, 'handle1'], null],
                        [[EventHandler::class, 'handle2'], null],
                        [[EventHandler::class, 'handle3'], null]]
    ];

  /**
   * @inheritdoc
   */
  protected static $notifyHandlers =
    [
      Event1::class => [[[EventHandler::class, 'handle1'], null],
                        [[EventHandler::class, 'handle2'], null],
                        [[EventHandler::class, 'handle3'], null]],

      Event2::class => [[[EventHandler::class, 'handle4'], null]]
    ];

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
