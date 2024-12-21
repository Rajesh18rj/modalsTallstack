<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg">

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($works as $row)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap flex items-center">
                        <div>
                            <div class="text-sm font-medium text-gray-900">{{$row->name}}</div>
                        </div>
                    </td>

                    <td>
                        <div>
                            <div class="text-sm font-medium text-gray-900">{{$row->email}}</div>
                        </div>
                    </td>

                    <td>
                        <div>
                            <div class="text-sm font-medium text-gray-900">{{$row->phone}}</div>
                        </div>
                    </td>

                    <td>
                        <div>
                            <div class="text-sm font-medium text-gray-900">{{$row->job_position}}</div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="text-indigo-600 hover:text-indigo-900" wire:click="edit( {{ $row->id }} )">Edit</button>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="text-indigo-600 hover:text-indigo-900" wire:click="confirmDelete( {{ $row->id }} )">Delete</button>
                    </td>
                </tr>
                <!-- End of repeat block -->
            @endforeach
            </tbody>

        </table>

    </div>


        @if($showDeleteWorkModal)
        <x-confirmation-modal wire:model.defer="showDeleteWorkModal">
            <x-slot name="title">
                Delete {{$currentWork->name}}
            </x-slot>

            <x-slot name="body">
                Continuing will delete your Work Details permanently...
            </x-slot>

            <x-slot name="footer">

                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showDeleteWorkModal', false)">Cancel</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="delete">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
          @endif
</div>

