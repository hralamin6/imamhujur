@section('title', $page->name)
{{--@section('description', __('find Imam Hujur Mosque Madrasa'))--}}
<div class="container grid px-6 mx-auto my-4">
    <div class="w-full rounded-lg shadow-xs p-4 dark:text-white">
        {!! $page->details !!}
    </div>
</div>
