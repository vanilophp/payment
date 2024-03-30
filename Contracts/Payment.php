<?php

declare(strict_types=1);

/**
 * Contains the Payment interface.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-12-17
 *
 */

namespace Vanilo\Payment\Contracts;

use Vanilo\Contracts\Payable;

interface Payment
{
    public function getPaymentId(): string;

    public function getAmount(): float;

    public function getCurrency(): string;

    public function getAmountPaid(): float;

    public function getStatus(): PaymentStatus;

    public function getMethod(): PaymentMethod;

    public function getSubtype(): ?string;

    public function hasRemoteId(): bool;

    public function getRemoteId(): ?string;

    public function isOffline(): bool;

    public function getPayable(): Payable;

    public function getExtraData(): array;
}
