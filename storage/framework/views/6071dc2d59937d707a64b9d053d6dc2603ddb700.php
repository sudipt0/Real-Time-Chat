<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chat Room</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
            <li class="list-group-item active">Chat Room<span class="badge badge-pill badge-danger">{{ numberOfUsers }}</span></li>
                <div class="badge badge-pill" badge-primary>{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message-component
                    v-for="value,index in chat.message"
                    :key=value.index
                    :color=chat.color[index]
                    :user=chat.user[index]
                    :float=chat.floating[index]
                    :time=chat.time[index]
                    >
                        {{ value }}
                    </message-component>
                </ul>
                <input type="text" class="form-control" placeholder="Enter your message here..." v-model="message" @keyup.enter="send"/>
            </div>
        </div>

    </div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH E:\Sudipta Kumar Mondal\laravel\chat\resources\views/chat.blade.php ENDPATH**/ ?>