<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;

test('a post can have many tags and a tag many posts', function () {
    $post = Post::factory()->create();
    $tag = Tag::create(['name' => 'laravel']);

    $post->tags()->attach($tag);

    expect($post->tags)->toHaveCount(1);
    expect($tag->posts->first()->id)->toBe($post->id);
});


test('tags are saved when a post is created and updated', function () {
    $user = User::factory()->create();
    $category = Category::factory()->create();
    $lego = Tag::create(['name' => 'Lego']);
    $robot = Tag::create(['name' => 'Robot']);

    $this->actingAs($user)->post(route('admin.posts.store'), [
        'title' => 'My post',
        'content' => 'Some content',
        'category_id' => $category->id,
        'tags' => [$lego->id, $robot->id],
    ]);

    $post = Post::where('title', 'My post')->first();
    expect($post->tags)->toHaveCount(2);

    $this->actingAs($user)->put(route('admin.posts.update', $post), [
        'title' => 'My post',
        'content' => 'Some content',
        'category_id' => $category->id,
        'tags' => [$lego->id],
    ]);

    expect($post->fresh()->tags)->toHaveCount(1);   

    });