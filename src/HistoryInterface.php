<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

/**
 * Interface for a History object
 */
interface HistoryInterface
{
    /**
     * Body text for the history
     * @return string
     */
    public function getBody(): string;

    /**
     * Data elements for the history
     * @return mixed
     */
    public function getData(): mixed;

    /**
     * Get the unique identifier for the history object.
     *
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * The associated element ID
     * @return mixed
     */
    public function getLinkId(): mixed;

    /**
     * The associated element type
     * @return string
     */
    public function getLinkType(): string;

    /**
     * History record title
     * @return string
     */
    public function getTitle(): string;

    /**
     * Retrieve the party specified by the id parameter.
     *
     * @param mixed $id
     * @return HistoryInterface|null Null if no History with this ID is found.
     */
    static public function retrieve(mixed $id): ?HistoryInterface;

}
