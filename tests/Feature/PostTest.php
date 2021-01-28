<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Post;


class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInsertPost()
    {

        $post=new Post();
        $post->title="informatique";
        $post->content="informatique Content";
        $post->Comments="informatique Comments";
$post->save();
        $this->assertDatabaseMissing('posts',[
            'title' =>'informatiquek'
        ]);

    }
    public function testStorePost(){
        $data=[
            'title'=>'info',
            'content'=>'info content',
            'Comments'=>'info Comments'
        ];
        $this->post('/postsC',$data)
        ->assertStatus(302)
        ->assertSessionHas('success');
        $this->assertEquals(session('success'),'Post added');
    }
    public function testStoreValidatePost(){
        $data=[
            'title'=>'',
            'content'=>'',
            'Comments'=>''
        ];
        $this->post('/postsC',$data)
        ->assertStatus(302)
        ->assertSessionHas('errors');
        $message=session('errors')->getMessages();
        $this->assertEquals($message['title'][0],'The title field is required.');
        $this->assertEquals($message['content'][0],'The content field is required.');
        $this->assertEquals($message['Comments'][0],'The comments field is required.');

    }
    public function testUpdatetPost()
    {

        $post=new Post();
        $post->title="informatique";
        $post->content="informatique Content";
        $post->Comments="informatique Comments";
$post->save();
        $this->assertDatabaseHas('posts',$post->toArray());
        $data=[
            'title'=>'informatique update',
            'content'=>'informatique Content update',
            'Comments'=>'informatique Content update'
        ];
        $this->put("/postsC/{$post->id}",$data)
        ->assertStatus(302)
        ->assertSessionHas('success');
        $this->assertEquals(session('success'),'Post was Uptaded');
        $this->assertDatabaseHas('posts',$data);
        $this->assertDatabaseMissing('posts',['title'=> $post->title]);
    }
    public function testDestroyPost()
    {

        $post=new Post();
        $post->title="informatique";
        $post->content="informatique Content";
        $post->Comments="informatique Comments";
$post->save();
        $this->assertDatabaseHas('posts',$post->toArray());
       
        $this->delete("/postsC/{$post->id}")
        ->assertStatus(302)
        ->assertSessionHas('success');
        $this->assertEquals(session('success'),'Post was Deleted');
        $this->assertDatabaseMissing('posts',['title'=> $post->title]);
    }
}
