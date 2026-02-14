<?php

// This code defines an interface for payment processing and implements it in various classes.
// It includes an abstract class for online payment processors and concrete classes for Stripe and PayPal.
// It also includes a class for cash payments and an order processor that uses the payment processors.
// The code demonstrates polymorphism by allowing different payment methods to be used interchangeably.

interface PaymentProcessor {
    public function processPayment(float | int $amount): bool;
    public function refundPayment(float | int $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor 
{
    public function __construct(
        protected readonly string $apiKey
    ) {}

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float | int $amount): bool;
    abstract protected function executeRefund(float | int $amount): bool;

    public function processPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new \Exception("Invalid API Key");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new \Exception("Invalid API Key");
        }
        return $this->executeRefund($amount);
    }
}

final class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, 'sk_') === 0;
    }

    protected function executePayment(float | int $amount): bool {
        echo "Stripe: Processing payment of $amount\n";
        return true;
    }

    protected function executeRefund(float | int $amount): bool {
        echo "Stripe: Refunding payment of $amount\n";
        return true;
    }
}

class PayPalProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strlen($this->apiKey) === 32;
    }

    protected function executePayment(float | int $amount): bool {
        echo "PayPal: Processing payment of $amount\n";
        return true;
    }

    protected function executeRefund(float | int $amount): bool {
        echo "PayPal: Refunding payment of $amount\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float | int $amount): bool {
        echo "Processing cash payment of $amount\n";
        return true;
    }

    public function refundPayment(float | int $amount): bool {
        echo "Refunding cash payment of $amount\n";
        return true;
    }
}

class OrderProcessor {
    public function __construct(private PaymentProcessor $paymentProcessor) {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function processOrder(float | int $amount, string | array $items): void {
        if (is_array($items)) {
            $itemsList = implode(', ', $items);
            echo "Processing order for items: $itemsList\n";
        } else {
            echo "Processing order for item: $items\n";
        }
        
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully for amount: $amount\n";
        } else {
            echo "Failed to process order for amount: $amount\n";
        }
    }

    public function refundOrder(float | int $amount): bool {
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Order refunded successfully for amount: $amount\n";
            return true;
        } else {
            echo "Failed to refund order for amount: $amount\n";
            return false;
        }
    }
}

$stripeProcessor = new StripeProcessor('sk_test_123456');
$paypalProcessor = new PayPalProcessor('1234567890abcdef1234567890abcdef');
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00, "Book");
$paypalOrder->processOrder(200.00, ["Laptop", "Mouse"]);
$cashOrder->processOrder(50.00, ["Groceries", "Snacks"]);

$stripeOrder->refundOrder(50.00);
$paypalOrder->refundOrder(100.00);
$cashOrder->refundOrder(20.00);