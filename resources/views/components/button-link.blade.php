@props(['url' => '/', 'icon' => 'null', 'bgClass' => "", 'hoverClass' => "", 'textClass' => "", 'block' => "false"])

<a href="{{$url}}" class="px-4 py-2 rounded hover:shadow-md transition duration-300 {{$bgClass}} {{$hoverClass}} {{$textClass}} {{$block ? "block" : ""}}">
    @if ($icon)
        <i class="fa fa-{{$icon}}"></i>
    @endif
    {{$slot}}
</a>