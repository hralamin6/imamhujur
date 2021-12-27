<?php

namespace App\Http\Livewire\Web;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentComponent extends Component
{
    public $phone, $trx_id, $amount, $quantity=1, $data=100;

    public function nagadPayment()
    {
        $this->validate([
            'phone'=> 'required|digits:11',
           'trx_id'=>'required',
           'quantity'=>'required',
        ]);
        if ($this->quantity==1){
            $this->amount = $this->data;
        }elseif ($this->quantity=2){
           $this->amount = $this->data*2-$this->data*20/100*2;
        }elseif ($this->quantity=3){
            $this->amount = $this->data*3-$this->data*20/100*3;
        }
        $payment = new Payment();
        $payment->user_id = Auth::id();
        $payment->phone = $this->phone;
        $payment->trx_id = $this->trx_id;
        $payment->amount = $this->amount;
        $payment->quantity = $this->quantity;
        $payment->payment_method = 'nagad';
        $payment->save();
        $this->alert('success', 'Successfully requested, wait for confirmation or contact');
        $this->reset();
    }

//    public function updatedQuantity($value)
//    {
//        dd($value);
//    }
    public function bkashPayment()
    {
        $this->validate([
            'phone'=> 'required|digits:11',
           'trx_id'=>'required',
           'quantity'=>'required',
        ]);
        if ($this->quantity==1){
            $this->amount = $this->data;
        }elseif ($this->quantity==2){
            $this->amount = $this->data*2-$this->data*20/100*2;
        }elseif ($this->quantity==3){
            $this->amount = $this->data*3-$this->data*20/100*3;
        }
        $payment = new Payment();
        $payment->user_id = Auth::id();
        $payment->phone = $this->phone;
        $payment->trx_id = $this->trx_id;
        $payment->amount = $this->amount;
        $payment->quantity = $this->quantity;
        $payment->payment_method = 'bkash';
        $payment->save();
        $this->alert('success', 'Successfully requested, wait for confirmation or contact');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.web.payment-component');
    }
}
