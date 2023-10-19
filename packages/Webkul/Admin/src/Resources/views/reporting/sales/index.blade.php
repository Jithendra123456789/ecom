<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.reporting.sales.index.title')
    </x-slot:title>

    {{-- Page Header --}}
    <div class="flex gap-[16px] justify-between items-center mb-[20px] max-sm:flex-wrap">
        <div class="grid gap-[6px]">
            <p class="pt-[6px] text-[20px] text-gray-800 dark:text-white font-bold leading-[24px]">
                @lang('admin::app.reporting.sales.index.title')
            </p>
        </div>
    </div>

    {{-- Sales Stats Vue Component --}}
    <div class="flex flex-col gap-[15px] flex-1 max-xl:flex-auto">
        <!-- Sales Section -->
        @include('admin::reporting.sales.total-sales')

        <!-- Purchase Funnel and Abandoned Carts Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Purchase Funnel Section -->
            @include('admin::reporting.sales.purchase-funnel')

            <!-- Abandoned Carts Section -->
            @include('admin::reporting.sales.abandoned-carts')
        </div>

        <!-- Total Orders and Average Order Value Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Total Orders Section -->
            @include('admin::reporting.sales.total-orders')

            <!-- Average Order Value Section -->
            @include('admin::reporting.sales.average-order-value')
        </div>

        <!-- Tax Collected and Shipping Collected Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Tax Collected Section -->
            @include('admin::reporting.sales.tax-collected')

            <!-- Shipping Collected Section -->
            @include('admin::reporting.sales.shipping-collected')
        </div>

        <!-- Refunds and Top Payment Methods Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Refunds Section -->
            @include('admin::reporting.sales.total-refunds')

            <!-- Top Payment Methods Section -->
            @include('admin::reporting.sales.top-payment-methods')
        </div>
    </div>

    @pushOnce('scripts')
        <script type="module" src="{{ bagisto_asset('js/chart.js') }}"></script>
    @endPushOnce
</x-admin::layouts>