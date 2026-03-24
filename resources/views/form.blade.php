<script></script>

<x-layout>
    <x-slot:title>
        Purchace Box Plan
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Choose your Box Plan</h1>

        <form method="POST" action="/confirm">
            @csrf
            <div class="flex justify-between">
                <div class="card bg-base-100 shadow mt-8 w-45">
                    <div class="card-body">
                        <h2 class="text-xl font-semibold border-b">Basic Box</h2>
                        <div class="form-control w-full border-b">
                            <ul>
                                <li><span class="text-green-600">✓</span> Free</li>
                                <li><span class="text-green-600">✓</span> Holds words</li>
                                <li><span class="text-green-600">✓</span> Has corners</li>
                                <li><span class="text-red-600">✕</span> No limit posting</li>
                                <li><span class="text-red-600">✕</span> Shiny</li>
                                <li><span class="text-red-600">✕</span> Prestigious</li>
                                <li><span class="text-red-600">✕</span> Best Value</li>
                                <li><span class="text-red-600">✕</span> Free flag</li>
                            </ul>
                        </div>
                        <div class="text-xl">$0.00</div>
                        <div class="mt-4 flex items-center justify-between">
                            <span>Select plan</span>
                            <input type="radio" id="basic" name="plan" value="basic">
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow mt-8 w-45">
                    <div class="card-body">
                        <h2 class="text-xl font-semibold border-b">Box Pro</h2>
                        <div class="form-control w-full border-b">
                            <ul>
                                <li><span class="text-red-600">✕</span> Free</li>
                                <li><span class="text-green-600">✓</span> Holds words</li>
                                <li><span class="text-green-600">✓</span> Has corners</li>
                                <li><span class="text-green-600">✓</span> No limit posting</li>
                                <li><span class="text-red-600">✕</span> Shiny</li>
                                <li><span class="text-red-600">✕</span> Prestigious</li>
                                <li><span class="text-red-600">✕</span> Best Value</li>
                                <li><span class="text-red-600">✕</span> Free flag</li>
                            </ul>
                        </div>
                        <div class="text-xl">$50.00</div>
                        <div class="mt-4 flex items-center justify-between">
                            <span>Select plan</span>
                            <input type="radio" id="pro" name="plan" value="pro">
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow mt-8 w-45">
                    <div class="card-body">
                        <h2 class="text-xl font-semibold border-b">Premium Box</h2>
                        <div class="form-control w-full border-b">
                            <ul>
                                <li><span class="text-red-600">✕</span> Free</li>
                                <li><span class="text-green-600">✓</span> Holds words</li>
                                <li><span class="text-green-600">✓</span> Has corners</li>
                                <li><span class="text-green-600">✓</span> No limit posting</li>
                                <li><span class="text-green-600">✓</span> Shiny</li>
                                <li><span class="text-green-600">✓</span> Prestigious</li>
                                <li><span class="text-green-600">✓</span> Best value</li>
                                <li><span class="text-green-600">✓</span> Free flag</li>
                            </ul>
                        </div>
                        <div class="text-xl">$99.99</div>
                        <div class="mt-4 flex items-center justify-between">
                            <span>Select plan</span>
                            <input type="radio" id="premium" name="plan" value="premium">
                        </div>
                    </div>
                </div>
            </div>
            @error('plan')
                <div class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </div>
            @enderror
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div class="form-control w-full flex flex-col gap-4">
                        <div>
                            <span>Enter your name</span>
                            <input name="name" placeholder="Name" class="input input-bordered w-full resize-none"
                                maxlength="50" />
                            @error('name')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <span>Enter your email</span>
                            <input name="email" placeholder="Email" class="input input-bordered w-full resize-none"
                                maxlength="50" />
                            @error('email')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <span>Enter a product key</span>
                            <input name="product_key" placeholder="Product key"
                                class="input input-bordered w-full resize-none" maxlength="50" />
                            @error('product_key')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                        <span>Confirm your purchace</span>
                        <button type="submit" class="btn btn-success btn-sm">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="flex gap-4 card bg-base-100 shadow mt-8 p-6">
            <button onclick="showHint()" class="btn btn-primary w-fit">Click for Hint</button>
            <div id="hint"></div>
        </div>
    </div>
</x-layout>
