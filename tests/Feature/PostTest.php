<?php

use App\Models\Post;

test('the posts page shows public posts and hides drafts', function () {
    $public = Post::factory()->create(['title' => 'Public robot arm', 'is_public' => true]);
    $draft = Post::factory()->create(['title' => 'Secret draft robot', 'is_public' => false]);

    $response = $this->get('/posts');

    $response->assertStatus(200);
    $response->assertSee('Public robot arm');
    $response->assertDontSee('Secret draft robot');
});

test('a draft cannot be opened on its own page', function () {
    $draft = Post::factory()->create(['is_public' => false]);

    $this->get('/posts/'.$draft->id)->assertNotFound();
});