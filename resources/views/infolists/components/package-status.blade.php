
<div {{ $attributes }}>
    {{ $getChildComponentContainer() }}

    @php

        use App\Models\MainShippingTypeState;
        $mainShippingTypeStates = MainShippingTypeState::all();

    @endphp

{{--    <div class="container mx-auto p-4">--}}
{{--        <div class="flex flex-col md:flex-row md:justify-between text-center">--}}
{{--            @foreach($mainShippingTypeStates as $state)--}}
{{--                <!-- Timeline Step -->--}}
{{--                <div class="flex flex-col items-center">--}}
{{--                    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">--}}
{{--                        <!-- Replace with dynamic icon if available -->--}}
{{--                        <i class="fas {{ $state->icon ?? 'fa-box' }} text-white"></i>--}}
{{--                    </div>--}}
{{--                    <p class="text-sm mt-2">{{ $state->name }}</p>--}}
{{--                </div>--}}

{{--                @if(!$loop->last)--}}
{{--                    <!-- Connecting Line -->--}}
{{--                    <div class="hidden md:block w-full bg-gray-300 h-1 self-center"></div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <ul class="timeline">--}}
{{--        @foreach($mainShippingTypeStates as $state)--}}
{{--            <li>--}}
{{--                <hr class="bg-primary"/>--}}
{{--                <div class="timeline-start timeline-box">{{$state->name}}</div>--}}
{{--                <div class="timeline-middle">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-primary">--}}
{{--                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <hr class="bg-primary"/>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}


{{--    <ul class="timeline timeline-vertical">--}}
{{--        @foreach($getRecord()->packageStatusHistories as $statusHistory)--}}
{{--            <li>--}}
{{--                @if(!$loop->first)--}}
{{--                    <hr/>--}}
{{--                @endif--}}

{{--                <div class="timeline-start">{{ \Carbon\Carbon::parse($statusHistory->changed_at)->format('M d, Y') }}</div>--}}
{{--                <div class="timeline-middle">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">--}}
{{--                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <div class="timeline-end timeline-box bg-blue-100">{{ $statusHistory->shippingTypeState->status_name }}</div>--}}

{{--                @if(!$loop->last)--}}
{{--                    <hr/>--}}
{{--                @endif--}}
{{--            </li>--}}
{{--        @endforeach--}}

{{--    </ul>--}}

    <div class="relative sm:ml-[calc(2rem+1px)] sm:pb-12 md:ml-[calc(3.5rem+1px)] lg:ml-[max(calc(14.5rem+1px),calc(100%-48rem))]">
        @foreach($getRecord()->packageStatusHistories as $statusHistory)
            @if(!$loop->last)
                <div class="absolute bottom-0 right-full top-3 mr-7 hidden w-px bg-slate-200 sm:block md:mr-[3.25rem] dark:bg-slate-800"></div>
            @endif
            <div class="space-y-16">
                <article class="group relative">
                    <div class="absolute -inset-x-4 -inset-y-2.5 group-hover:bg-slate-50/70 sm:rounded-2xl md:-inset-x-6 md:-inset-y-4 dark:group-hover:bg-slate-800/50"></div>
                    <svg viewBox="0 0 9 9" class="absolute right-full top-2 mr-6 hidden h-[calc(0.5rem+1px)] w-[calc(0.5rem+1px)] overflow-visible text-slate-200 sm:block md:mr-12 dark:text-slate-600">
                        <circle cx="4.5" cy="4.5" r="4.5" stroke="currentColor" class="fill-white dark:fill-slate-900" stroke-width="2"></circle>
                    </svg>
                    <div class="relative">
                        <h3 class="pt-8 text-base font-semibold tracking-tight text-slate-900 lg:pt-0 dark:text-slate-200">{{ $statusHistory->shippingTypeState->status_name }}</h3>
                        <div class="prose prose-slate prose-a:relative prose-a:z-10 dark:prose-dark mb-4 mt-2 line-clamp-2">
                            <p>some data here</p>
                        </div>
                        <dl class="absolute left-0 top-0 lg:left-auto lg:right-full lg:mr-[calc(6.5rem+1px)]">
                            <dt class="sr-only">Date</dt>
                            <dd class="whitespace-nowrap text-sm leading-6 dark:text-slate-400">{{ \Carbon\Carbon::parse($statusHistory->changed_at)->format('M d, Y') }}</dd>
                        </dl>
                    </div>
                </article>
            </div>
        @endforeach
    </div>




</div>



