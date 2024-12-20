{{-- Modal --}}
<div>
<div class="fixed inset-0 bg-gray-900 opacity-90">

        <div class="bg-white shadow-md p-4 max-w-sm h-48 m-auto rounded-md fixed inset-0">

            <div class="flex flex-col h-full justify-between">
            <header>
                <h1 class="font-bold text-lg">Are You Sure?</h1>
            </header>

            <main class="mb-4">
                <p>If You Proceed, your Account will be deleted entirely..</p>
            </main>

            <footer>
                <button class="bg-gray-400 text-xs uppercase py-2 px-4 rounded-md text-white hover:bg-gray-500 transition-all duration-200 mr-2">Cancel</button>
                <button class="bg-blue-400 text-xs uppercase py-2 px-4 rounded-md text-white hover:bg-blue-500 transition-all duration-200">Continue</button>
            </footer>
            </div>
        </div>

        </div>

We are creating this modal .. next episode we are gonna see how to reuse it dynamically.. 

cut this entire thing .. and paste it in to new component confirmation-modal.blade.php 

<x-confirmation-blade>

ipo namaku yethavathu html tag ah alphine js tag ah mathanum naa.. x-data nu kudukanum..

 # Sharing State Between Livewire And Alpine: @entangle

Livewire has an incredibly powerful feature called "entangle" that allows you to "entangle" a Livewire and Alpine property together.
With entanglement, when one value changes, the other will also be changed.
