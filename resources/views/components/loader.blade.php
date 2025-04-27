@props(['size' => 48, 'color' => '#ffffff'])
<span {{ $attributes->class('loader') }}
      style="width:{{ $size }}px;height:{{ $size }}px;border-color:{{ $color }} transparent !important"></span>
