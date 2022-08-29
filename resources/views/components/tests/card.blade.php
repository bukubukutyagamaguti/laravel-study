@props([
    'title',
    'message' => 'メッセージ初期値',
    'content' => '本文初期値'
    ])

<div>
    <div {{ $attributes->merge([
        'class' => "border-2 shadow-md w-1/4 p-2"
        ]) ></div> }}>{{ $title }}</div>
    <div></div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
