<?php

use App\Models\Post;
use App\Models\Tag;

test('a post can have many tags and a tag many posts', function () {
    $post = Post::factory()->create();
    $tag = Tag::create(['name' => 'laravel']);

    $post->tags()->attach($tag);

    expect($post->tags)->toHaveCount(1);
    expect($tag->posts->first()->id)->toBe($post->id);
});
