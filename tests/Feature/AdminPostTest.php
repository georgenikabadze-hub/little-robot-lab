<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

test('the edit form keeps submitted values after validation fails', function () {
    $user = User::factory()->create();
    $post = Post::factory()->create(['user_id' => $user->id, 'is_public' => true]);
    $category = Category::factory()->create();
    $post->tags()->attach(Tag::create(['name' => 'Saved tag']));

    $this->actingAs($user)->from(route('admin.posts.edit', $post))
        ->put(route('admin.posts.update', $post), [
            'title' => '',
            'content' => 'My unsaved changes',
            'category_id' => $category->id,
            'is_public' => '0',
        ])->assertSessionHasErrors('title');

    $this->get(route('admin.posts.edit', $post))
        ->assertSee('name="title" id="title" value=""', false)
        ->assertSee('My unsaved changes')
        ->assertSee('value="'.$category->id.'" selected', false)
        ->assertDontSee('checked', false);

    $this->assertDatabaseHas('posts', [
        'id' => $post->id,
        'title' => $post->title,
        'content' => $post->content,
        'category_id' => $post->category_id,
        'is_public' => true,
    ]);
    expect($post->fresh()->tags)->toHaveCount(1);

});
