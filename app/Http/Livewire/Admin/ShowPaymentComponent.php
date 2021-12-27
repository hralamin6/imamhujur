<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use Dotenv\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPaymentComponent extends Component
{

    use WithPagination;
    public $deleteId=null, $state = [], $payment, $editmode, $orderBy='id', $serialize='desc', $paginate=10, $search='', $selectall = false, $selections = [];
    protected $listeners = ['deleteConfirmed' => 'delete', 'singleDeleteConfirmed' => 'singleDelete'];
//    protected $paginationTheme = 'bootstrap';

    public function updateStatus($id)
    {
        $payment = Payment::find($id);
        $user = $payment->user;
        if ($payment->status==='active'){
            $payment->status = 'inactive';
            $user->quantity -= $payment->quantity;
        }else{
            $payment->status = 'active';
            $user->quantity += $payment->quantity;
        }
        $payment->save();
        $user->save();
        $this->alert('success', 'Status successfully ' .$payment->status.'d');

    }

    public function confirmRemoval()
    {
        $this->dispatchBrowserEvent('showDeleteConfirmation');
    }
    public function confirmDeletion($id)
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('showSingleDeleteConfirmation');
    }
    public function delete()
    {
        Payment::whereIn('id', $this->selections)->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Product deleted successfully!']);
    }
    public function singleDelete()
    {
        Payment::findOrFail($this->deleteId)->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Product deleted successfully!']);
    }
    public function updatedSelectall($value)
    {
        if ($value){
            $this->selections = $this->getProductsProperty()->pluck('id')->map(function ($id) {return (string) $id;});
        }else{
            $this->reset('selectall', 'selections');
        }
    }
    public function activeStatus()
    {
        Payment::whereIn('id', $this->selections)->update(['status'=>'active']);
        $this->alert('success', 'Successfully activated');
    }
    public function inactiveStatus()
    {
        Payment::whereIn('id', $this->selections)->update(['status'=>'inactive']);
        $this->alert('success', 'Successfully inactivated');
    }
    public function FilterSerialize($filtername)
    {
        $this->orderBy = $filtername;
        if ($this->serialize==='desc'){
            $this->serialize = 'asc';
        }else{
            $this->serialize = 'desc';
        }
    }

    public function getProductsProperty()
    {
        return Payment::where('trx_id', 'like', '%'.$this->search.'%')->orderBy($this->orderBy, $this->serialize)->paginate($this->paginate);
    }
    public function render()
    {
        $payments = $this->getProductsProperty();
        return view('livewire.admin.show-payment-component', compact('payments'))->layout('layouts.app');
    }
}
