<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

/**
 * Interface for a Communications Channel, a way to contact a party
 */
interface ChannelInterface
{
    public function getAddress(): string;

    /**
     * Get the channel's unique identifier.
     *
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * The communications medium (phone, fax, email, chat, etc.)
     * @return string
     */
    public function getMedium(): string;

    /**
     * The channel name (work, home, billing, etc.)
     * @return string
     */
    public function getName(): string;

    /**
     * Retrieve the party specified by the id parameter.
     *
     * @param mixed $id
     * @return ChannelInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?ChannelInterface;

}
