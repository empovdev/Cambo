<?php echo $__env->make('Chatify::layouts.headLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="messenger">
    
    <div class="messenger-listView">
        
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle"><?php echo e(__('MESSAGES')); ?></span> </a>
                
                <nav class="m-header-right">
                    <a href="#" onclick="return false;" ><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" onclick="return false;" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>
            
            <input type="text" class="messenger-search" placeholder="Search" />
            
            <div class="messenger-listView-tabs">
                <a onclick="return false;" href="#" <?php if($route == 'user'): ?> class="active-tab" <?php endif; ?> data-view="users">
                    <span class="far fa-user"></span> <?php echo e(__('People')); ?></a>
                <a onclick="return false;" href="#" <?php if($route == 'group'): ?> class="active-tab" <?php endif; ?> data-view="groups">
                    <span class="fas fa-users"></span> <?php echo e(__('Groups')); ?></a>
            </div>
        </div>
        
        <div class="m-body">
           
           
           <div class="<?php if($route == 'user'): ?> show <?php endif; ?> messenger-tab app-scroll" data-view="users">

               
               <p class="messenger-title"><?php echo e(__('Favorites')); ?></p>
                <div class="messenger-favorites app-scroll-thin"></div>

               
               <?php echo view('Chatify::layouts.listItem', ['get' => 'saved','id' => $id])->render(); ?>


               
               <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);"></div>

           </div>

           
           <div class="<?php if($route == 'group'): ?> show <?php endif; ?> messenger-tab app-scroll" data-view="groups">
                
                <p style="text-align: center;color:grey;"><?php echo e(__('Soon will be available')); ?></p>
             </div>

             
           <div class="messenger-tab app-scroll" data-view="search">
                
                <p class="messenger-title"><?php echo e(__('Search')); ?></p>
                <div class="search-records">
                    <p class="message-hint"><span><?php echo e(__('Type to search..')); ?></span></p>
                </div>
             </div>
        </div>
    </div>

    
    <div class="messenger-messagingView">
        
        <div class="m-header m-header-messaging">
            <nav>
                
                <div style="display: inline-flex;">
                    <a onclick="return false;" href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                    </div>
                    <a onclick="return false;" href="#" class="user-name"><?php echo e(config('chatify.name')); ?></a>
                </div>
                
                <nav class="m-header-right">
                    <a onclick="return false;" href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>

                    <a onclick="return false;" href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                </nav>
            </nav>
        </div>
        
        <div class="internet-connection">
            <span class="ic-connected"><?php echo e(__('Connected')); ?></span>
            <span class="ic-connecting"><?php echo e(__('Connecting...')); ?></span>
            <span class="ic-noInternet"><?php echo e(__('No internet access')); ?></span>
        </div>
        
        <div class="m-body app-scroll">
            <div class="messages">
                <p class="message-hint" style="margin-top: calc(30% - 126.2px);"><span><?php echo e(__('Please select a chat to start messaging')); ?></span></p>
            </div>
            
            <div class="typing-indicator">
                <div class="message-card typing">
                    <p>
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </p>
                </div>
            </div>
            
            <?php echo $__env->make('Chatify::layouts.sendForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    
    <div class="messenger-infoView app-scroll">
        
        <nav>
            <a onclick="return false;" href="#"><i class="fas fa-times"></i></a>
        </nav>
        <?php echo view('Chatify::layouts.info')->render(); ?>

    </div>
</div>

<?php echo $__env->make('Chatify::layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Chatify::layouts.footerLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\project for sale\booking-core.2.0.foll\resources\views\vendor\Chatify\pages\app.blade.php ENDPATH**/ ?>