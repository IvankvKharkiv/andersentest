<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="flex justify-center pt-8 sm:pt-0">
        <h1 class="text-3xl font-semibold">Some Nonsence Form)))</h1>
    </div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-4">
            <div class="col-start-2 col-span-2 pr-6 pl-6">
                <form wire:submit.prevent="submit" method="POST">

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 bg-white">
                            <div class="grid grid-cols-3 gap-2">
                                <div class="col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" wire:model="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-gray-300 rounded-md">
                                    @error('name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                    <input type="text" wire:model="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-gray-300 rounded-md">
                                    @error('email') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                    <input type="text" wire:model="message" id="message" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-2 border-gray-300 rounded-md h-40">
                                    @error('message') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                                </div>




                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>





                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Select</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($userAdditionalData::all() as $user)
                            <tr class="odd gradeX">
                                <td class="px-4">{{ $user->name }}</td>
                                <td  class="px-4">{{ $user->email }}</td>
                                <td class="px-4">{{ $user->message }}</td>
                                <td class="px-4"><input wire:model="userids.{{$user->id}}" type="checkbox" id="{{ $user->id}}" /></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button wire:click="delete" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Delete
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
