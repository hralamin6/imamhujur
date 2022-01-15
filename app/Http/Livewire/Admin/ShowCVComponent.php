<?php

namespace App\Http\Livewire\Admin;

use App\Events\ProfileAcceptedEvent;
use App\Models\Cv;
use Dotenv\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCVComponent extends Component
{
use LivewireAlert;
    use WithPagination;
    public $deleteId=null, $state = [], $product, $editmode, $orderBy='id', $serialize='desc', $paginate=10, $search='', $selectall = false, $selections = [];
//    protected $listeners = ['deleteConfirmed' => 'delete', 'singleDeleteConfirmed' => 'singleDelete'];
//    protected $paginationTheme = 'bootstrap';
//    protected $listeners = ['echo:test,ProfileAcceptedEvent' => '$refresh'];
//    protected $listeners = [
//        'deleteConfirmed' => 'delete',
//        'singleDeleteConfirmed' => 'singleDelete',
//        'echo:test,ProfileAcceptedEvent' => '$refresh',
//    ];

    public function updateStatus($id)
    {
        $product = Cv::find($id);
        if ($product->status==='active'){
            $product->status = 'inactive';
        }else{
            $product->status = 'active';
        }
        $product->save();
//        $this->alert('success', 'Status successfully ' .$product->status.'d');
//        $this->dispatchBrowserEvent('push');

//        Broadcast(new ProfileAcceptedEvent($product))->toOthers();

    }
    public function updateRequestStatus($id)
    {
        $product = Cv::find($id);
        if ($product->request_status==='requested'){
            $product->request_status = 'pending';
        }else{
            $product->request_status = 'requested';
        }
        $product->save();
        $this->alert('success', 'Status successfully');

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
        Cv::whereIn('id', $this->selections)->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Product deleted successfully!']);
    }
    public function singleDelete()
    {
        Cv::findOrFail($this->deleteId)->delete();
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
        Cv::whereIn('id', $this->selections)->update(['status'=>'active']);
        $this->alert('success', 'Successfully activated');
    }
    public function inactiveStatus()
    {
        Cv::whereIn('id', $this->selections)->update(['status'=>'inactive']);
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
        return Cv::where('slug', 'like', '%'.$this->search.'%')->orderBy($this->orderBy, $this->serialize)->paginate($this->paginate);
    }

    public function Function()
    {
        dd('asdf');
    }
    public function render()
    {
        $cvs = $this->getProductsProperty();
        return view('livewire.admin.show-c-v-component', compact('cvs'))->layout('layouts.app');
    }
}
