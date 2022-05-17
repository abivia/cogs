<?php
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
    public function body(): string;

    /**
     * Data elements for the history
     * @return mixed
     */
    public function data(): mixed;

    /**
     * Get the unique identifier for the history object.
     *
     * @return mixed
     */
    public function id(): mixed;

    /**
     * The associated element ID
     * @return mixed
     */
    public function linkId(): mixed;

    /**
     * The associated element type
     * @return string
     */
    public function linkType(): string;

    /**
     * Retrieve the party specified by the id parameter.
     *
     * @param mixed $id
     * @return HistoryInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?HistoryInterface;

    /**
     * History record title
     * @return string
     */
    public function title(): string;

}
