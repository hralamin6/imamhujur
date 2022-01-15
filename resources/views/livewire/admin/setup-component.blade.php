@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"  />
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" ></script>
@endpush
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General Setting</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form wire:submit.prevent="updateSetting">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Admin Name</label>
                                <input wire:model.defer="admin" type="text" class="form-control" placeholder="Enter admin name">
                                @error('admin') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input wire:model.defer="phone" type="text" class="form-control" placeholder="Enter phone no">
                                @error('phone') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input wire:model.defer="email" type="email" class="form-control" placeholder="Enter email">
                                @error('email') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Site name</label>
                                <input wire:model.defer="site_name" type="text" class="form-control" placeholder="Enter site name">
                                @error('site_name') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Site url</label>
                                <input wire:model.defer="site_url" type="url" class="form-control" placeholder="Enter site url">
                                @error('site_url') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Site url</label>
                                <input wire:model.defer="logoUrl" type="url" class="form-control" placeholder="Enter site url">
                                @error('logoUrl') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Facobook url</label>
                                <input wire:model.defer="facebook" type="url" class="form-control" placeholder="Enter facebook url">
                                @error('facebook') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Twitter url</label>
                                <input wire:model.defer="twitter" type="url" class="form-control" placeholder="Enter twitter url">
                                @error('twitter') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Youtube url</label>
                                <input wire:model.defer="youtube" type="url" class="form-control" placeholder="Enter youtube url">
                                @error('youtube') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input wire:model.defer="location" type="text" class="form-control" placeholder="Enter location">
                                @error('location') <span class="text-danger text-bold"> {{$message}}</span>@enderror

                            </div>
                            <div class="form-group">
                                <label>About</label>
                                <span wire:ignore>
                                        <trix-editor class="formatted-content" x-data x-on:trix-change="$dispatch('input', event.target.value)" wire:model.debounce.1000ms="about" wire:key="uniqueKey"></trix-editor>
                                    </span>
                                @error('about') <span class="text-danger text-bold"> {{$message}}</span>@enderror
                            </div>


                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose logo image")}}
                                        <input type="file" class="hidden" wire:model.lazy="logo">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($logo)
{{--                                                                                <img style="height: 66px; width: 66px;" src="{{ $logo->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('logo')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('logo')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="logo" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save logo
                                        <span wire:loading wire:target="logo" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('logo')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose cover image")}}
                                        <input type="file" class="hidden" wire:model.lazy="cover">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($cover)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $cover->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('cover')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('cover')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="cover" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save cover
                                        <span wire:loading wire:target="cover" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('cover')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose imam image")}}
                                        <input type="file" class="hidden" wire:model.lazy="imam">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($imam)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $imam->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('imam')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('imam')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="imam" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save imam
                                        <span wire:loading wire:target="imam" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('imam')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose teacher image")}}
                                        <input type="file" class="hidden" wire:model.lazy="teacher">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($teacher)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $teacher->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('teacher')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('teacher')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="teacher" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save teacher
                                        <span wire:loading wire:target="teacher" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('teacher')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose mosque image")}}
                                        <input type="file" class="hidden" wire:model.lazy="mosque">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($mosque)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $mosque->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('mosque')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('mosque')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="mosque" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save mosque
                                        <span wire:loading wire:target="mosque" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('mosque')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose madrasa image")}}
                                        <input type="file" class="hidden" wire:model.lazy="madrasa">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($madrasa)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $madrasa->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('madrasa')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('madrasa')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="madrasa" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save madrasa
                                        <span wire:loading wire:target="madrasa" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('madrasa')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose locked image")}}
                                        <input type="file" class="hidden" wire:model.lazy="locked">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($locked)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $locked->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('locked')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('locked')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="locked" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save locked
                                        <span wire:loading wire:target="locked" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('locked')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose login image")}}
                                        <input type="file" class="hidden" wire:model.lazy="login">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($login)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $login->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('login')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('login')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="login" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save login
                                        <span wire:loading wire:target="login" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('login')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                            <label class="block mt-3">
                                <div class="list-inline flex justify-between gap-3"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <label class="cursor-pointer flex justify-content-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        {{__("Choose register image")}}
                                        <input type="file" class="hidden" wire:model.lazy="register">
                                    </label>
                                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                    @if($register)
                                        {{--                                        <img style="height: 66px; width: 66px;" src="{{ $register->temporaryUrl() }}">--}}
                                    @elseif($setup->getFirstMediaUrl('register')!=null)
                                        <img style="height: 66px; width: 66px;" src="{{$setup->getFirstMediaUrl('register')}}" alt="">
                                    @endif
                                    <button wire:click.prevent="register" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save register
                                        <span wire:loading wire:target="register" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                @error('register')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save changes
                                <span wire:loading wire:target="updateSetting" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
