<?php
// -----------------------------------------------------
// Created by : tool
// -----------------------------------------------------
// Date: 2021/5/21
// -----------------------------------------------------
// User: tf <1096392101@qq.com>
// -----------------------------------------------------
declare (strict_types=1);

namespace Gao\tool\plugin\snowflake;


class RandomSequenceResolver implements SequenceResolver
{

    /**
     * The las ttimestamp.
     *
     * @var null
     */
    protected $lastTimeStamp = -1;

    /**
     * The sequence.
     *
     * @var int
     */
    protected $sequence = 0;

    public function sequence(int $currentTime)
    {
        if ($this->lastTimeStamp === $currentTime) {
            ++$this->sequence;
            $this->lastTimeStamp = $currentTime;

            return $this->sequence;
        }

        $this->sequence = 0;
        $this->lastTimeStamp = $currentTime;

        return 0;
    }
}