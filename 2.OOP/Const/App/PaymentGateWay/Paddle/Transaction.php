<?php

namespace App\PaymentGateWay\Paddle;
use APP\Enums\Status;

class Transaction
{

    private string $status = Status::STATUS_PENDING;

    public function setStatus($status): self
    {
        if ( ! isset(Status::ALL_STATUS[$status])) {
            throw new \http\Exception\InvalidArgumentException(
                'Invalid Status'
            );
        }
        $this->status = $status;
        return $this;
    }

}