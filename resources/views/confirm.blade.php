<x-layout>
    <x-slot:title>
        Home Feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Confirm Order</h1>
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                @csrf
                <table class="table">
                    <tr>
                        <th>Name:</th>
                        <td>{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Plan:</th>
                        <td>{{ $data['plan'] }}</td>
                    </tr>
                    @if ($data['product_key'] && $keyNotFound == true)
                        <tr>
                            <th>Prouct key:</th>
                            <td><span class="text-red-600">✕</span> Invalid</td>
                        </tr>
                    @elseif ($data['product_key'])
                        <tr>
                            <th>Prouct key:</th>
                            <td><span class="text-green-600">✓</span> Valid</td>
                        </tr>
                    @endif
                    @if (!$data['product_key'] || $keyNotFound == true)
                        <tr>
                            <th>Price:</th>
                            <td>
                                @switch($data['plan'])
                                    @case('basic')
                                        $0:00
                                    @break

                                    @case('pro')
                                        $50.00
                                    @break

                                    @case('premium')
                                        $99.99
                                    @break

                                    @default
                                @endswitch
                            </td>
                        </tr>
                    @endif
                </table>
                <form action="/submit" method="POST" class="flex justify-end gap-2">
                    <input type="hidden" name="name" value="{{ $data['name'] }}" />
                    <input type="hidden" name="email" value="{{ $data['email'] }}" />
                    <input type="hidden" name="plan" value="{{ $data['plan'] }}" />
                    <input type="hidden" name="product_key" value="{{ $data['product_key'] }}" />
                    <input type="hidden" name="keyNotFound" value="{{ $keyNotFound }}" />
                    <button type="submit" class="btn btn-primary btn-sm">
                        Confirm
                    </button>
                    <a href="/" class="btn btn-primary btn-sm">
                        Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
