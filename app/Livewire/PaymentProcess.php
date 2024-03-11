<?php

namespace App\Livewire;

use Livewire\Component;
use Srmklive\PayPal\Facades\PayPal;
use Exception;

class PaymentProcess extends Component
{
    public $amount;
    public $provider;
    public $projectId;

    public function makePayment()
    {
        try {
            $provider = PayPal::setProvider();
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());
            $order = $provider->createOrder([
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $this->amount
                        ]
                    ]
                ]
            ]);
            // Проверьте, был ли заказ успешно создан
            if ($order['status'] == 'CREATED') {
                // Если заказ был успешно создан, перенаправьте пользователя на страницу оплаты PayPal
                $project = Project::find($this->projectId); // Найдите соответствующий проект
                $project->total_donations += $this->amount; // Обновите total_donations
                $project->save(); // Сохраните изменения
                return redirect($order['links'][1]['href']);
            } else {
                // Если при создании заказа произошла ошибка, информируйте пользователя об этом
                session()->flash('error', 'Произошла ошибка при создании вашего заказа!');
            }
        } catch (Exception $e) {
            session()->flash('error', 'Произошла ошибка при обработке вашего платежа! Ошибка: ' . $e->getMessage());
        }
    }





    public function render()
    {
        return view('livewire.payment-process');
    }
}
