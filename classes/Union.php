<?php

namespace GodsDev\TempFireIceArda1;

class Union
{

    /**
     *
     * @var array
     */
    private $version;

    /**
     *
     * @var array
     */
    private $result;

    /**
     *
     * @param array $a
     * @param array $b
     */
    public function __construct(array $a, array $b)
    {
        //commits
        $this->version = [
            'init',
        ];
        $this->result = $a + $b;
    }

    /**
     *
     * @param string $label
     * @return arraz
     */
    public function getAll($label = 'default')
    {
        return array_merge($this->getInfo($label), $this->getResult());
    }

    /**
     *
     * @param string $label
     * @return arraz
     */
    public function getInfo($label = 'default')
    {
        return ['v' => $this->version, 'l' => $label];
    }

    /**
     *
     * @return array
     */
    public function getResult()
    {
        return ['result' => $this->result];
    }
}
