<?php
<div class="user_controls">  
    <?php if ($user = Current_User::user()): ?>  
        Hello, <em><?php echo $user->username; ?></em> <br/>  
        <?php echo anchor('logout', 'Logout'); ?>  
    <?php else: ?>  
        <?php echo anchor('login','Login'); ?> |  
        <?php echo anchor('signup', 'Register'); ?>  
    <?php endif; ?>  
</div>  
  
<h1>My Message Board</h1>  
  
<?php foreach($categories as $category): ?>  
  
    <div class="category">  
  
        <h2><?php echo $category->title; ?></h2>  
  
        <?php foreach($category->Forums as $forum): ?>  
  
            <div class="forum">  
  
                <h3>  
                    <?php echo anchor('forums/'.$forum->id, $forum->title) ?>  
                    (<?php echo $forum->Threads->count(); ?> threads)  
                </h3>  
  
                <div class="description">  
                    <?php echo $forum->description; ?>  
                </div>  
  
            </div>  
  
        <?php endforeach; ?>  
  
    </div>  
  
<?php endforeach; ?> 
