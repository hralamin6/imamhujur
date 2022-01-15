<?php

namespace App\Http\Livewire\Admin;

use App\Models\Conversation;
use App\Models\Cv;
use App\Models\Job;
use App\Models\Message;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use LivewireAlert;

    use WithPagination;
    public $deleteId=null, $state = [], $user, $editmode, $orderBy='id', $serialize='desc', $paginate=10, $search='', $selectall = false, $selections = [];
    protected $listeners = ['deleteConfirmed' => 'delete', 'singleDeleteConfirmed' => 'singleDelete'];
//    protected $paginationTheme = 'bootstrap';

    public function updateStatus($id)
    {
        $user = User::find($id);
        $user = $user->user;
        if ($user->status==='active'){
            $user->status = 'inactive';
            $user->quantity -= $user->quantity;
        }else{
            $user->status = 'active';
            $user->quantity += $user->quantity;
        }
        $user->save();
        $user->save();
        $this->alert('success', 'Status successfully ' .$user->status.'d');

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
        foreach ($this->selections as $selections){
        $messages = Message::where('user_id', $selections)->get();
        if ($messages != null){
            foreach ($messages as $message){
                $message->delete();
            }
        }
        $conversatin = Conversation::where('sender_id', $selections)->first();
        if ($conversatin  != null){
            $conversatin->delete();
        }
        $cv = Cv::where('user_id', $selections)->first();
        if ($cv  != null){
            $cv->delete();
        }
        $job = Job::where('user_id', $selections)->first();
        if ($job  != null){
            $job->delete();
        }
        $user = User::findOrFail($selections);
        if ($user  != null){
            $user->delete();
        }
    }
//        User::whereIn('id', $this->selections)->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'user deleted successfully!']);
    }
    public function singleDelete()
    {
       $messages = Message::where('user_id', $this->deleteId)->get();
       if ($messages != null){
           foreach ($messages as $message){
               $message->delete();
           }
       }
       $conversatin = Conversation::where('sender_id', $this->deleteId)->first();
       if ($conversatin  != null){
           $conversatin->delete();
       }
       $cv = Cv::where('user_id', $this->deleteId)->first();
       if ($cv  != null){
           $cv->delete();
       }
       $job = Job::where('user_id', $this->deleteId)->first();
       if ($job  != null){
           $job->delete();
       }
       $user = User::findOrFail($this->deleteId);
       if ($user  != null){
           $user->delete();
       }
        $this->dispatchBrowserEvent('deleted', ['message' => 'user deleted successfully!']);
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
        User::whereIn('id', $this->selections)->update(['status'=>'active']);
        $this->alert('success', 'Successfully activated');
    }
    public function inactiveStatus()
    {
        User::whereIn('id', $this->selections)->update(['status'=>'inactive']);
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
        return User::where('name', 'like', '%'.$this->search.'%')->orderBy($this->orderBy, $this->serialize)->paginate($this->paginate);
    }
    public function render()
    {
        $users = $this->getProductsProperty();
        return view('livewire.admin.user-component', compact('users'))->layout('layouts.app');
    }
}
