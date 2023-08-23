<?php
namespace DI\Order;

class EmailNotifier
{
  public function sendNotification($message)
  {
    // simulate sending email notification
    echo "Email sent $message\n";
  }
}

class Order
{
  // Order details
}

class OrderCalculator
{
  private $notifier;

  public function __construct(EmailNotifier $notifier)
  {
    $this->notifier = $notifier;
  }

  public function calculateTotal(Order $order)
  {
    $total = 0;
    $this->notifier->sendNotification("Total calculated: $total");
  }
}

//usage
$emailNotifier = new EmailNotifier();
$orderCalculator = new OrderCalculator($emailNotifier);
$order = new Order();
$orderCalculator->calculateTotal($order);