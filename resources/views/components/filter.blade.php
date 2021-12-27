<div>
    <a class="float-right text-sm" style="cursor: pointer" wire:click.prevent="FilterSerialize('name')">
        <i class="fa fa-arrow-up {{$orderBy=='name' && $serialize=='asc'?'':'text-muted'}}"></i>
        <i class="fa fa-arrow-down {{$orderBy=='name' && $serialize=='desc'?'':'text-muted'}}"></i>
    </a>
</div>
