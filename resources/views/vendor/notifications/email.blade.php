<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Rất tiếc!')
@else
# @lang('Pet Spa Xin chào!')
@endif
@endif

    {{-- Dòng giới thiệu --}}
    {{ __('Vui lòng nhấn vào nút bên dưới để xác minh địa chỉ email đăng ký tài khoản của bạn.') }}

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset

{{-- Outro Lines --}}
    {{-- Dòng giới thiệu --}}
    {{ __('Nếu bạn không có hành động tạo tài khoản của Pet Spa thì có thể bỏ qua việc xác thực email này.') }}

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Trân trọng,')<br>
@endif

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "Nếu bạn gặp sự cố khi nhấp vào nút \":actionText\", hãy sao chép và dán URL bên dưới\n".
    'vào trình duyệt web của bạn:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>**Pet Spa**
@endisset
</x-mail::message>
