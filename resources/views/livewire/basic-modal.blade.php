<div class="mt-6">
    <!-- Trigger Button -->
    <button wire:click="openModal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Create User
    </button>

    @if(session()->has('message'))
        <div class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-4 py-2 rounded shadow-lg">
            {{ session('message') }}
        </div>
    @endif

    <!-- Modal -->
    @if($isOpen)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Add User</h2>
                    <button wire:click="closeModal" class="text-gray-500 hover:text-gray-700">
                        &times; <!-- Close button -->
                    </button>
                </div>

                <!-- Modal Content -->
                <div class="mb-4">
                    <x-input-floating wire:model="name" :label="'Name'">
                    </x-input-floating>
                </div>

                <div class="mb-4">
                    <x-input-floating wire:model="email" :label="'Email'">
                    </x-input-floating>
                </div>

                <div class="mb-4">
                    <x-input-floating wire:model="phone" :label="'Mobile Number'">
                    </x-input-floating>
                </div>

                <div class="mb-4">
                    <x-input-floating wire:model="job_position" :label="'Job Position'">
                    </x-input-floating>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end space-x-2">

                    <button wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Close
                    </button>

                    <button wire:click="save" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
                </div>
            </div>
        </div>
    @endif
</div>


