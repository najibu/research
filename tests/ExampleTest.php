<?php

use Laracasts\TestDummy\Factory;
use Laracasts\TestDummy\DbTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Repositories\ForumRepository;


class ExampleTest extends DbTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->repository = new ForumRepository;
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
      $user = Factory::create('App\User');

      $threads = Factory::times(2)->create('App\Thread', ['user_id' => $user->id]);

      Factory::times(3)->create('App\Thread');

      $threads = $this->repository->getThreadByUserId($user->id);

      $this->assertCount(2, $threads);
    }
}
