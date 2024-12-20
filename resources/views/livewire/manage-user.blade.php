<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg">

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap flex items-center">
                        <div>
                            <div class="text-sm font-medium text-gray-900">{{$user->name}}</div>
                            <div class="text-sm text-gray-500">{{$user->email}}</div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="text-indigo-600 hover:text-indigo-900" wire:click="confirmDelete( {{ $user->id }} )">Delete</button>
                    </td>
                </tr>
                <!-- End of repeat block -->
            @endforeach
            </tbody>

        </table>

    </div>


        @if($showDeleteUserModal)
        <x-confirmation-modal wire:model.defer="showDeleteUserModal">
            <x-slot name="title">
                Delete {{$currentUser->name}}
            </x-slot>

            <x-slot name="body">
                Continuing will delete your account permanently...
            </x-slot>

            <x-slot name="footer">

                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showDeleteUserModal', false)">Cancel</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="delete">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
          @endif
</div>

