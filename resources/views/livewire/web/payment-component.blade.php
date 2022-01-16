@section('title', __('Payment'))
{{--@section('description', __('find Imam Hujur Mosque Madrasa'))--}}
<div class="grid lg:grid-cols-1 grid-cols-1 items-center gap-3 mt-4 m-4">
    <div class="bg-white shadow-md rounded-md w-full lg:w-8/12 mx-auto p-4 dark:bg-gray-800 mb-6">
        <h1 class="dark:text-white text-indigo-800 font-semibold mb-2 text-center">{{__('Price list to unlock profile')}}</h1>
        <table class="w-full border border-green-800 dark:text-white">
            <thead>
            <tr>
                <th class="border border-green-600 text-sm px-1">{{__('profile')}}</th>
                <th class="border border-green-600 text-sm px-1">{{__('Discount')}}</th>
                <th class="border border-green-600 text-sm px-1">{{__('price')}}</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr>
                <td class="border border-green-600">
                    1
                </td>
                <td class="border border-green-600">
                    0</td>
                <td class="border border-green-600">
                    {{$data}}</td>
            </tr>
            <tr>
                <td class="border border-green-600">
                    2
                </td>
                <td class="border border-green-600">
                    {{$data*20/100*2}}</td>
                <td class="border border-green-600">
                    {{$data*2-$data*20/100*2}}</td>
            </tr>
            <tr>
                <td class="border border-green-600">
                    3
                </td>
                <td class="border border-green-600">
                    {{$data*100/3/100*3}}</td>
                <td class="border border-green-600">
                    {{$data*3-$data*100/3/100*3}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="bg-white dark:bg-gray-800 dark:text-white shadow-md rounded-md w-full lg:w-8/12 mx-auto " x-data="{ show: 'bkash'}">
        <div class="flex justify-center gap-5 gap-6 text-purple-600 my-2">
            <div class="bg-gray-100 dark:bg-gray-600 px-2 py-1 rounded-md shadow-md" :class="{ 'bg-blue-600 text-white': show=='bkash' }">
                <label for="bkash" @click="show = 'bkash'"  class="flex justify-center cursor-pointer">
                    <div for="bkash" class="relative w-12 h-8 mr-3 rounded-full md:block">
                        <img class="object-contain w-full h-full rounded-full" src="https://ordhekdeen.com/wp-content/uploads/2021/07/bkash.png.webp" alt="" loading="lazy"/>
                    </div>
                </label>
            </div>
            <div class="bg-gray-100 dark:bg-gray-600 px-2 py-1 rounded-md shadow-md" :class="{ 'bg-blue-600 text-white': show=='nagad' }">
                <label for="bkash" @click="show = 'nagad'"  class="flex justify-center cursor-pointer">
                    <div class="relative w-12 h-8 mr-3 rounded-full md:block">
                        <img class="object-contain w-full h-full rounded-full" src="https://ordhekdeen.com/wp-content/uploads/2021/07/nagad.png.webp" alt="" loading="lazy"/>
                    </div>
                </label>
            </div>
        </div>
            <div class="flex justify-center" x-show="show=='bkash'">
                <p class="text-purple-600 dark:text-white">{{__('Bkash Personal Number : 01650286494')}}</p>
            </div>
            <div class="flex justify-center" x-show="show=='nagad'">
                <p class="text-purple-600 dark:text-white">{{__('Nagad Personal Number : 01798085634')}}</p>
            </div>
        <div class="px-4 py-1 mb-0 bg-white rounded-lg shadow-md dark:bg-gray-800 grid grid-cols-1">
            <label class="block mt-2 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{__('Quantity of Biodata')}}</span>
                <select class="form-control form-control-tw" wire:model="quantity">
                    <option value="1">{{__('1 profile')}} {{$data}} {{__('BDT')}}</option>
                    <option value="2">{{__('2 profile')}} {{$data*2-$data*20/100*2}} {{__('BDT')}}</option>
                    <option value="3">{{__('3 profile')}} {{$data*3-$data*100/3/100*3}} {{__('BDT')}}</option>
                </select>
                @error('quantity')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }} </span>@enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{__('Mobile Number')}}</span>
                <input type="tel" wire:model.lazy="phone" class="form-control-tw @error('phone') is-invalid @enderror form-input" placeholder="{{__('Enter Mobile Number')}}" name="phone" value="{{old('phone')}}" required/>
                @error('phone')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{__('Transaction Id')}}</span>
                <input type="text" wire:model.lazy="trx_id" class="form-control-tw @error('trx_id') is-invalid @enderror form-input" placeholder="{{__('Enter Transaction Id')}}" name="trx_id" value="{{old('trx_id')}}" required/>
                @error('trx_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <div class="flex justify-center my-2" x-show="show=='bkash'">
                <p class="text-pink-700 dark:text-white">{{__('Send Money')}} <strong class="text-red-900">{{$amount}}</strong>  {{__('BDT')}} {{__('to the mentioned Bkash (Personal) number.')}}</p>
            </div>

            <div class="flex justify-center my-2" x-show="show=='nagad'">
                <p class="text-pink-700 dark:text-white">{{__('Send Money')}} <strong class="text-red-900">{{$amount}}</strong> {{__('BDT')}} {{__('to the mentioned Nagad (Personal) number.')}}</p>
            </div>

            <button x-show="show=='bkash'" wire:click.prevent="bkashPayment" type="button" class="btn btn-primary float-right mt-2">
                {{__("Submit")}}
                <span wire:loading wire:target="bkashPayment" class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
            </button>
            <button x-show="show=='nagad'" wire:click.prevent="nagadPayment" type="button" class="btn btn-primary float-right mt-2">
                {{__("Submit")}}
                <span wire:loading wire:target="nagadPayment" class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
            </button>

        </div>
    </div>
    <div class="container grid px-1 mx-auto">
        <div class="w-full overflow-hidden rounded-lg shadow-xs my-10">

            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap text-sm">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <th class="px-4 py-3">{{__('Method')}}</th>
                        <th class="px-4 py-3">{{__('Phone')}}</th>
                        <th class="px-4 py-3">{{__('Trx')}} id</th>
                        <th class="px-4 py-3">{{__('Quantity')}}</th>
                        <th class="px-4 py-3">{{__('Amount')}}</th>
                        <th class="px-4 py-3">{{__('Date')}}</th>
                        <th class="px-4 py-3">{{__('Status')}}</th>
                    </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @forelse($payments as $i=> $payment)
                        <tr wire:key="row-{{ $payment->id }}" class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                <span class="px-2 py-1 leading-tight rounded-full ">{{$payment->payment_method}}</span> </td>
                            <td>{{$payment->phone}}</td>
                            <td>{{$payment->trx_id}}</td>
                            <td>{{$payment->quantity}}</td>
                            <td>{{$payment->amount}}</td>
                            <td>{{\Carbon\Carbon::parse($payment->created_at)->diffForHumans()}}</td>
                            <td class="px-4 py-3 text-xs">
                                <span class="uppercase px-2 py-1 leading-tight {{$payment->status==='active'?'text-green-700 bg-green-100':'text-red-700 bg-red-100'}}  rounded-full ">{{ $payment->status }}</span>
                            </td>
                        </tr>
                    @empty
                        <center> <h2 class="text-red-600">{{__('No payment Found')}}</h2> </center>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div>
                {{ $payments->links() }}
            </div>
        </div>
    </div>
</div>
