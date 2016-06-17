<?php

namespace BitWasp\Bitcoin\Block;

use BitWasp\Bitcoin\SerializableInterface;
use BitWasp\Buffertools\BufferInterface;

interface BlockHeaderInterface extends SerializableInterface, \ArrayAccess
{
    /**
     * Return the version of this block.
     *
     * @return int
     */
    public function getVersion();

    /**
     * Return the previous blocks hash.
     *
     * @return BufferInterface
     */
    public function getPrevBlock();

    /**
     * Return the merkle root of the transactions in the block.
     *
     * @return BufferInterface
     */
    public function getMerkleRoot();

    /**
     * Get the timestamp of the block.
     *
     * @return int
     */
    public function getTimestamp();

    /**
     * Return the buffer containing the short representation of the difficulty
     *
     * @return int
     */
    public function getBits();

    /**
     * Return the nonce of the block header.
     *
     * @return int
     */
    public function getNonce();

    /**
     * @return BufferInterface
     */
    public function getHash();
}
