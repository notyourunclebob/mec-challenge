<x-layout>
    <x-slot:title>
        Home Feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Order Complete</h1>
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                @if ($data['product_key'] && $keyNotFound == true)
                    <span>Invoice sent: Acoount awaiting payment confirmation.</span>
                @elseif ($data['product_key'] && $data['plan'] != 'pro')
                    <span>Premium account created. Here is your Complimentry flag 🚩</span>
                @elseif ($data['plan'] != 'basic')
                    <span>Invoice sent: Acoount awaiting payment confirmation.</span>
                @else
                    <span>Acccount created</span>
                @endif
            </div>
            <a href="/" class="btn btn-primary btn-sm">
                Okay
            </a>
        </div>
    </div>
</x-layout>
