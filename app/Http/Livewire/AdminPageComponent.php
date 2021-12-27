<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPageComponent extends Component
{

    use WithPagination;
    public $deleteId=null, $pageId, $state = [], $product, $editmode, $orderBy='id', $serialize='desc', $paginate=10, $search='', $selectall = false, $selections = [];
    protected $listeners = ['deleteConfirmed' => 'delete', 'singleDeleteConfirmed' => 'singleDelete'];
    public $body;
    public $name;
    public function mount($pageName=null)
    {
        if ($pageName!=null){
            $this->editmode = true;
            $data = Page::where('name', $pageName)->firstOrFail();
            $this->pageId = $data->id;
            $this->name = $data->name;
            $this->body = $data->details;
        }
    }
    public function Update()
    {
        $this->validate([
            'name' => 'required',
            'body' => 'required',
        ]);
        $data = Page::findOrFail($this->pageId);
        $data->name = $this->name;
        $data->details = $this->body;
        $data->save();
        $this->alert('success', 'Successfully updated');
        $this->reset();

    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'body' => 'required',
        ]);
        $data = new Page();
        $data->name = $this->name;
        $data->details = $this->body;
        $data->save();
        $this->alert('success', 'Successfully saved');
        $this->reset();
    }
    public function updateStatus($id)
    {
        $product = Page::find($id);
        if ($product->status==='active'){
            $product->status = 'inactive';
        }else{
            $product->status = 'active';
        }
        $product->save();
        $this->alert('success', 'Status successfully ' .$product->status.'d');

    }
    public function updateRequestStatus($id)
    {
        $product = Page::find($id);
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
        Page::whereIn('id', $this->selections)->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Product deleted successfully!']);
    }
    public function singleDelete()
    {
        Page::findOrFail($this->deleteId)->delete();
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
        Page::whereIn('id', $this->selections)->update(['status'=>'active']);
        $this->alert('success', 'Successfully activated');
    }
    public function inactiveStatus()
    {
        Page::whereIn('id', $this->selections)->update(['status'=>'inactive']);
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
        return Page::where('name', 'like', '%'.$this->search.'%')->orderBy($this->orderBy, $this->serialize)->paginate($this->paginate);
    }
    public function render()
    {
        $pages = $this->getProductsProperty();
        return view('livewire.admin-page-component', compact('pages'));
    }
}
