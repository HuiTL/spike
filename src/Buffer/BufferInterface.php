<?php
/**
 * Spike library
 * @author Tao <taosikai@yeah.net>
 */
namespace Spike\Buffer;

use React\Socket\ConnectionInterface;

interface BufferInterface
{
    /**
     * @return ConnectionInterface
     */
    public function getConnection();

    /**
     * Gets the buffer content
     * @return string
     */
    public function getContent();

    /**
     * call the  callback when buffer gather ok
     * @param callable $callback
     * @return mixed
     */
    public function gather(callable $callback);

    /**
     * Checks whether the buffer gather ok
     * @return boolean
     */
    public function isGatherComplete();

    /**
     * flush the buffer
     * @return void
     */
    public function flush();
}