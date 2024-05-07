<!DOCTYPE HTML>
<html lang="ja">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Index') }}
            </h2>        
        </x-slot>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Posts</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <div class="content">
                <div class="content__post">
                    <h3>本文</h3>
                    <p>{{ $post->body }}</p>    
                </div>
            </div>
            <div class="edit">
                <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>