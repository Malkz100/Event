@props([
    'options' => "{dateFormat:'Y-m-d H:i:S', altFormat:'G:i K, F j, Y', altInput:true, enableTime:true }",
])

<div wire:ignore>
    <input x-data x-init="flatpickr($refs.input, {{ $options }} );" x-ref="input" type="text" data-input
        {{ $attributes }} />
</div>




{{--<input--}}
{{--    x-data--}}
{{--    x-ref="input"--}}
{{--    x-init="new flatpickr({ field: $refs.input })"--}}
{{--    type="text"--}}
{{--    {{ $attributes }}--}}
{{-->--}}


{{--<input type="text" id="datetime">--}}

{{--<script>--}}
{{--    new flatpickr({ field: document.getElementById('datetime') })--}}
{{--</script>--}}



        {{--@props([--}}
        {{--    'options' =>"{dateformat:'Y-m-d H:i:S', altFormat:'G: i K, F j, Y', altInput:true, enableTime:true}"--}}
        {{--])--}}


{{--<div wire:ignore>--}}

        {{--    <div x-data="app()" x-init="initFlatpickr">--}}
        {{--        <input x-ref="input" id="datetime"/>--}}
        {{--        <input x-data x-init="flatpickr($refs.input, {{$options}});" x-ref="input" type="text" data-input{{ $attributes }} />--}}


{{--    --}}
{{--        <input x-data x-init="flatpickr($refs.input);" x-ref="input" id="datetime" type="text"/>--}}
{{--    </div>--}}
{{--</div>--}}



{{--        <input type="text" id="datetime">--}}

{{--    <script>--}}
{{--        new Pikaday({ field: document.getElementById('datetime') })--}}
{{--    </script>--}}
{{--    <input--}}
{{--        x-data--}}
{{--        x-ref="input"--}}
{{--        x-init="new Pikaday({ field: $refs.input })"--}}
{{--        type="text"--}}
{{--        {{ $attributes }}--}}

{{--    @once--}}
{{--        @push('styles')--}}
{{--            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">--}}
{{--        @endpush--}}

{{--        @push('head_scripts')--}}
{{--            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>--}}
{{--        @endpush--}}
{{--    @endonce--}}

{{--    @props(['options' => "{dateFormat:'Y-m-d', altFormat:'F j, Y', altInput:true, }"])--}}

{{--    <div wire:ignore>--}}
{{--        <input--}}
{{--            x-data--}}
{{--            x-init="flatpickr($refs.input);"--}}
{{--            x-ref="input"--}}
{{--            type="text"--}}
{{--            data-input--}}
{{--            options ={dateFormat:'Y-m-d H:i:S', altFormat:'G: i K, F j, Y', altInput:true, enableTime:true}--}}
{{--            {{ $attributes->merge(['class' => 'block w-full disabled:bg-gray-200 p-2 border border-gray-300 rounded-md focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 sm:text-sm sm:leading-5']) }}--}}
{{--        >--}}
{{--    </div>--}}

{{--</div>--}}
