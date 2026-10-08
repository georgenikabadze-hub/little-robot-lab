<?php

use App\Models\Post;
use App\Models\User;

test('guests are sent to the login page when they open the author area', function () {
    $this->get('/admin/posts')->assertRedirect('/login');
});

test('an author sees only their own posts in the author area', function () {
    $me = User::factory()->create();
    Post::factory()->create(['user_id' => $me->id, 'title' => 'My own robot']);
    Post::factory()->create(['title' => 'Somebody elses robot']);

    $this->actingAs($me)->get('/admin/posts')
        ->assertSee('My own robot')
        ->assertDontSee('Somebody elses robot');
});

test('an author cannot edit or delete the post of someone else', function () {
    $me = User::factory()->create();
    $post = Post::factory()->create();

    $this->actingAs($me)->get('/admin/posts/'.$post->id.'/edit')->assertForbidden();
    $this->actingAs($me)->delete('/admin/posts/'.$post->id)->assertForbidden();

    $this->assertDatabaseHas('posts', ['id' => $post->id]);
});