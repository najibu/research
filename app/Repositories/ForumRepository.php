<?php 

namespace App\Repositories;

use App\Thread;

class ForumRepository {
  
  public function getThreadByUserId($userId)
  {
    return Thread::where('user_id', $userId)->get();
  }
}