<?php
declare(strict_types=1);

namespace Abivia\Cogs;

use Traversable;

/**
 * Interface for a Communications Channel, a way to contact a party
 */
interface ChannelInterface
{
    public function address(): string;

    /**
     * Get the channel's unique identifier.
     *
     * @return mixed
     */
    public function id(): mixed;

    /**
     * The communications medium (phone, fax, email, chat, etc.)
     * @return string
     */
    public function medium(): string;

    /**
     * The channel name (work, home, billing, etc.)
     * @return string
     */
    public function name(): string;

    /**
     * Retrieve the party specified by the id parameter.
     *
     * @param mixed $id
     * @return ChannelInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?ChannelInterface;

}
