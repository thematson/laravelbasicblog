<?php

namespace App;


class Post extends Model
{
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function addComment($body)
  {
    $this->comments()->create(compact('body')); //(compact('body')) == (['body' => $body])

    //long way of above:
    // Comment::create([
    //   'body' => $body,
    //   'post_id' => $this->id
    // ]);

    //Why? this.comments() shortcuts the relationship of the comments() function
    // to $this.... and 'compact() takes a variable number of parameters.
    // Each parameter can be either a string containing the name of the variable,
    // or an array of variable names --see above--. The array can contain other arrays of
    // variable names inside it; compact() handles it recursively. '
  }
}
