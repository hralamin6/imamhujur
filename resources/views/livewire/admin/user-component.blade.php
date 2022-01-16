<div class="container grid px-6 mx-auto">
    <div class="w-full overflow-hidden rounded-lg shadow-xs">

        <div class="flex justify-between gap-6 mt-4">
            <div class="col-md-2 col-3">
                <input wire:model="paginate" type="number" class="form-control-tw form-input">

            </div>
            <div class="form-group col-md-2 col-6">
                <input wire:model="search" type="text" class="form-control-tw form-input" placeholder="Search by name">
            </div>
            <div class="form-group col-md-2 col-3">
                <input wire:click.prevent="generate_pdf" type="button" class="btn btn-info" value="PDF">
                <span wire:loading wire:target="generate_pdf" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            </div>
            @if($selections)
                <div x-data="{dropdownMenu: false}" class="relative">
                    <!-- Dropdown toggle button -->
                    <button @click="dropdownMenu = ! dropdownMenu" class="flex items-center pl-2 bg-purple-600 text-white bg-gray-100 rounded-md">
                        <span class="mr-4">Dropdown </span>
                    </button>
                    <!-- Dropdown list -->
                    <div x-show="dropdownMenu" class="absolute left-0-0 py-2 mt-2 bg-white bg-gray-300 rounded-md shadow-xl w-44">
                        <a wire:click.prevent="confirmRemoval" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Delete Selected</a>
                        <a wire:click.prevent="activeStatus" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Mark as Active</a>
                        <a wire:click.prevent="inactiveStatus" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Mark as Inactive</a>
                        <a wire:click.prevent="exportXls" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Export as Xls</a>
                        <a wire:click.prevent="exportCsv" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">Export as Csv</a>
                    </div>
                    <span wire:loading wire:target="confirmRemoval, inactiveStatus, activeStatus" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                </div>
            @endif

        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap text-xs">
                <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                >
                    <th><input type="checkbox" wire:model="selectall"></th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Type</th>
                    <th class="px-4 py-3">Slug</th>
                    <th class="px-4 py-3">Quantity</th>
                    <th class="px-4 py-3">Last_seen</th>
                    <th class="px-4 py-3">Verified_at</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                @forelse($users as $i=> $user)
                    <tr @if (is_array($selections)) @if(in_array($user->id, $selections))  @endif @endif wire:key="row-{{ $user->id }}" class="text-gray-700 dark:text-gray-400">
                        <td><input type="checkbox" value="{{ $user->id }}" wire:model="selections"></td>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://www.gravatar.com/avatar/{{md5($user->email)}}?d=mp"
                                        alt=""
                                        loading="lazy"
                                    />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{$user->name}}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        {{$user->email}}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>{{$user->type}}</td>
                        <td>@if($user->type==='imam' || $user->type==='teacher') {{$user->cv->slug}} @else {{$user->job->slug}} @endif</td>
                        <td>{{$user->quantity}}</td>
                        <td>{{\Carbon\Carbon::parse($user->last_seen)->diffForHumans()}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-4 text-sm">
                                <a wire:click.prevent="confirmDeletion({{ $user->id }})"
                                   class="cursor-pointer flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <center> <h2 class="text-red-600">No cv found</h2> </center>
                @endforelse
                </tbody>
            </table>
        </div>
        <div>

            {{ $users->links() }}
        </div>
    </div>
</div>
