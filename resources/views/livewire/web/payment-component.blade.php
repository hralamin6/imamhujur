<div class="grid lg:grid-cols-1 grid-cols-1 items-center gap-3 mt-4 m-4">
    <div class="bg-white m-4 shadow-md rounded-md lg:w-8/12 mx-auto p-4 dark:bg-gray-800">
        <h1 class="dark:text-white font-semibold mb-2 text-center">কত সংখ্যক বায়োডাটার যোগাযোগের তথ্য চাচ্ছেন?</h1>
        <table class="w-full border border-green-800 dark:text-white">
            <thead>
            <tr>
                <th class="border border-green-600 ...">বায়োডাটার সংখ্যা</th>
                <th class="border border-green-600 ...">Discount</th>
                <th class="border border-green-600 ...">সর্বমোট মূল্য</th>
            </tr>
            </thead>
            <tbody class="text-center">
{{--            <tr x-data="{val: {{$data}}, discount: 0}" class="text-center">--}}
{{--                <td class="border border-green-600 ...">--}}
{{--                    <p>1</p>--}}
{{--                    <select name="quantity" wire:model="quantity" id="">--}}
{{--                        <option @click="val={{$data}}, discount=0" value="1">1</option>--}}
{{--                        <option @click="val={{$data*2-$data*20/100*2}}, discount={{$data*20/100*2}}" value="2">2</option>--}}
{{--                        <option @click="val={{$data*3-$data*100/3/100*3}}, discount={{$data*100/3/100*3}}" value="3">3</option>--}}
{{--                    </select>--}}
{{--                </td>--}}
{{--                <td class="border border-green-600 ...">--}}
{{--                    <p x-text="discount"></p>--}}
{{--                </td>--}}
{{--                <td class="border border-green-600 ...">--}}
{{--                    <p x-text="val"></p>--}}
{{--                </td>--}}
{{--            </tr>--}}
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
    <div class="bg-white dark:bg-gray-800 dark:text-white shadow-md rounded-md w-full lg:w-8/12 mx-auto " x-data="{ show: 'bkash' }">
        <div class="flex flex-col gap-6 text-purple-600">
            <div class="bg-gray-100 dark:bg-gray-600 pt-3 pl-3" :class="{ 'bg-blue-600 text-white px-2 py-1 rounded-md shadow-md': show=='bkash' }">
                <label for="bkash" @click="show = 'bkash'"  class="flex justify-center gap-3 cursor-pointer text-lg font-semibold font-sans mb-3">
                    <span>Bkash</span>
                    <div for="bkash" class="relative w-12 h-8 mr-3 rounded-full md:block">
                        <img class="object-contain w-full h-full rounded-full" src="https://ordhekdeen.com/wp-content/uploads/2021/07/bkash.png.webp" alt="" loading="lazy"/>
                    </div>
                </label>
            </div>

            <div class="m-3 " x-show="show=='bkash'">
                <p class="text-gray-600 dark:text-white">DKJf ksdjfhalkdfhiwquh iehf kadsjf akajsdvfak asdfasdf </p>
                <div class="px-4 py-3 mb-0 bg-white rounded-lg shadow-md dark:bg-gray-800 grid grid-cols-1">
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Quantity of Biodata</span>
                        <select class="form-control form-control-tw" name="quantity" wire:model="quantity" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        @error('quantity')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Mobile Number</span>
                        <input wire:model.lazy="phone" class="form-control-tw @error('phone') is-invalid @enderror form-input" placeholder="Enter Mobile Number" name="phone" value="{{old('phone')}}" required/>
                        @error('phone')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Transaction Id</span>
                        <input wire:model.lazy="trx_id" class="form-control-tw @error('trx_id') is-invalid @enderror form-input" placeholder="Enter Transaction Id" name="trx_id" value="{{old('trx_id')}}" required/>
                        @error('trx_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                    <button wire:click.prevent="bkashPayment" type="button" class="btn btn-primary float-right mt-2">
                        {{__("Submit")}}
                        <span wire:loading wire:target="bkashPayment" class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
                    </button>

                </div>
            </div>

            <div class="bg-gray-100 dark:bg-gray-600 pt-3 pl-3" :class="{ 'bg-blue-600 text-white px-2 py-1 rounded-md shadow-md': show=='nagad' }">
                <label for="bkash" @click="show = 'nagad'"  class="flex justify-center gap-3 cursor-pointer text-lg font-semibold font-sans mb-3">
                    <span>Nagad</span>
                    <div class="relative w-12 h-8 mr-3 rounded-full md:block">
                        <img class="object-contain w-full h-full rounded-full" src="https://ordhekdeen.com/wp-content/uploads/2021/07/nagad.png.webp" alt="" loading="lazy"/>
                    </div>
                </label>
            </div>

            <div class="m-3 " x-show="show==='nagad'">
                <p  class="text-gray-600">Na ksdjfhalkdfhiwquh iehf kadsjf akajsdvfak asdfasdf </p>
                <div class="px-4 py-3 mb-0 bg-white rounded-lg shadow-md dark:bg-gray-800 grid grid-cols-1">
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Quantity of Biodata</span>
                        <select class="form-control form-control-tw" name="quantity" wire:model="quantity" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Mobile Number</span>
                        <input wire:model.lazy="phone" class="form-control-tw @error('phone') is-invalid @enderror form-input" placeholder="Enter Mobile Number" name="phone" value="{{old('phone')}}" required/>
                        @error('phone')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Transaction Id</span>
                        <input wire:model.lazy="trx_id" class="form-control-tw @error('trx_id') is-invalid @enderror form-input" placeholder="Enter Transaction Id" name="trx_id" value="{{old('trx_id')}}" required/>
                        @error('trx_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                    <button wire:click.prevent="nagadPayment" type="button" class="btn btn-primary float-right mt-2">
                        {{__("Submit")}}
                        <span wire:loading wire:target="nagadPayment" class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
