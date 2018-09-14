/*! Made With Love | Classiebit Softwares */

/*! timeSince - calculate time in sec, min, hours, days */
function timeSince(date) {
    var seconds = Math.floor((new Date() - date) / 1000);
    var interval = Math.floor(seconds / 31536000);
    if (interval > 1) return interval + " years";
    interval = Math.floor(seconds / 2592000);
    if (interval > 1) return interval + " months";
    interval = Math.floor(seconds / 86400);
    if (interval > 1) return interval + " days";
    interval = Math.floor(seconds / 3600);
    if (interval > 1) return interval + " hours";
    interval = Math.floor(seconds / 60);
    if (interval > 1) return interval + " minutes";
    return Math.floor(seconds) + " seconds";
}

/*! initChat - initialize chat */
function initChat() {
    // add inner contents
    $('.addchat_initiate').html('  <a href="javascript:void(0)" class="addchat-toggle">\
                                    <i class="fa fa-comments-o fa-2x"></i>\
                                    <span class="badge progress-bar-danger badge-pre"></span>\
                                </a>\
                                <div id="chat-container" class="fixed"></div>');
    
    setInterval(function() {
        if(user_id != '') {
            $.ajax({
                type    : 'GET',
                url     : base_url + "addchat_init/get_updates/",
                async   : true,
                cache   : false,
                success : function(data) {
                    if(data.status) {
                         $.each(data.messages, function() {
                            if($("#addchat-container").is(":visible")) {
                                if(this.sender == $("#chat_user_id").val()){
                                  li = '<li class="'+ this.type +'"><img src="'+base_url+this.avatar+'" class="avt img-responsive">\
                                    <div class="message">\
                                    <span class="chat-arrow"></span>\
                                    <a href="javascript:void(0)" class="chat-name">'+this.name+'</a>&nbsp;\
                                    <span class="chat-datetime">'+timeSince(new Date(this.dt_updated))+'</span>';
                                  // add last seen feature
                                  if(this.sender == logged_in_user) {
                                    if(this.is_read == 1)
                                        li += '<span class="chat-lastseen pull-right read"><i class="fa fa-check-square-o"></i></span>';
                                    else
                                        li += '<span class="chat-lastseen pull-right unread"><i class="fa fa-check-square-o"></i></span>';
                                  } else {
                                        $('span.chat-lastseen.unread').addClass('read');
                                        $('span.chat-lastseen.unread').removeClass('unread');
                                  }

                                  li += '<span class="chat-body">'+this.message+'</span></div></li>';
                                    $('ul.addchat-container-body').append(li);
                                    $('ul.addchat-container-body').animate({scrollTop: $('ul.addchat-container-body').prop("scrollHeight")}, 500);

                                } else {
                                    from = this.sender;
                                    $.each(data.senders, function() {
                                        if(this.user == from) 
                                            $(".addchat-group").find('span[rel="'+from+'"]').text(this.count);
                                    });
                                }
                                
                             } else {
                                from = this.sender;
                                $.each(data.senders, function() {
                                    if(this.user == from) {
                                        $('.addchat_initiate .badge-pre').html('<i class="fa fa-bell"></i>');
                                        $(".addchat-group").find('span[rel="'+from+'"]').text(this.count);
                                    }
                                });
                             }
                         });
                        var audio = new Audio(data.ast_sound_pth+'/sound.mp3').play();
                    }
                },
                error : function(XMLHttpRequest, textstatus, error) { 
                    console.log(error); 
                }
            });
        }
    }, 5000);
}

/*! getMessages - fetch messages from database */
var limit = 1;
function getMessages(user, limit){
    $.ajax({ 
        type: "POST", 
        url: base_url  + "addchat_init/get_messages", 
        data: {
            user : user, 
            limit:limit 
        },
        cache: false,
        success: function(response) {
            if(response.status) {
                console.log(response);
                buddy       = response.buddy;
                status      = buddy.status == 1 ? 'Online' : 'Offline';
                statusClass = buddy.status == 1 ? 'user-status is-online' : 'user-status is-offline';

                $('#chat_user_id').val(buddy.id);
                $('.display-name', '#addchat-container').html(buddy.name);
                $('#addchat-container > .addchat-container-header > small').html(status);
                $('#addchat-container > .addchat-container-header > span.user-status').removeClass().addClass(statusClass);
                $('ul.addchat-container-body').html('');

                if(buddy.more)
                    $('ul.addchat-container-body').append('<li id="load-more-wrap" style="text-align:center"><a onclick="javascript: getMessages(\''+buddy.id+'\', \''+buddy.limit+'\')" class="btn btn-block">View older messsages('+buddy.remaining+')</a></li>');
            
                thread = response.thread;
                $.each(thread, function() {
                  li = '<li class="'+ this.type +'"><img src="'+this.avatar+'" class="avt img-responsive">\
                    <div class="message">\
                    <span class="chat-arrow"></span>\
                    <a href="javascript:void(0)" class="chat-name">'+this.name+'</a>&nbsp;\
                    <span class="chat-datetime">'+timeSince(new Date(this.dt_updated))+'</span>';
                   
                   // add last seen feature
                    if(this.sender == logged_in_user) {
                        if(this.is_read == 1)
                            li += '<span class="chat-lastseen pull-right read"><i class="fa fa-check-square-o"></i></span>';
                        else
                            li += '<span class="chat-lastseen pull-right unread"><i class="fa fa-check-square-o"></i></span>';
                    }
                    

                   li += '<span class="chat-body">'+this.message+'</span></div></li>';

                    $('ul.addchat-container-body').append(li);
                });

                if(buddy.scroll)
                    $('ul.addchat-container-body').animate({scrollTop: $('ul.addchat-container-body').prop("scrollHeight")}, 500);

                if(buddy.is_blocked) { // user blocked
                    $('#addchat-container .chat-content').css('background', '#f443364a');
                    $('#send-text').attr('disabled', true);
                    $('#send-msg').attr('disabled', true);
                    $('#addchat-container > .addchat-container-header > small').html('blocked');
                    $('.block-user').html('<button class="btn btn-xs btn-success">block</button><button class="btn btn-xs btn-mute">unblock</button>');
                } else {                    // user unblocked
                    $('#addchat-container .chat-content').css('background', '#fff');
                    $('#send-text').attr('disabled', false);
                    $('#send-msg').attr('disabled', false);
                    $('.block-user').html('<button class="btn btn-xs btn-mute">block</button><button class="btn btn-xs btn-success">unblock</button>');
                }

            }
        }
    });
}

// Delay for keypress while searching user
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

function imageIsLoaded(e) {
    $('#wizardPicturePreview').attr('src', e.target.result);
};


$(function(e) {
    /*!initiate chat*/
    initChat();

    // initial configuration
    $('#addchat-container .chat-content').css('background', '#fff');
    $('#send-text').attr('disabled', false);
    $('#send-msg').attr('disabled', false);

    /*! init chat container */
    var chatInit = function(){
        $( "#chat-container" ).load( base_url+"addchat_init/get_users");
        $('.addchat_initiate .badge-pre').html('');
    }

    /*! hide chat container */
    $(document).on('click', '.addchat-form-close', function() {
        $('#chat-container').toggle('slide', {
            direction: 'down'
        }, 300);
        $('#addchat-container').hide();
    });

    /*! hide chat sub-container */
    $(document).on('click','.addchat-container-close', function(){
        $('#addchat-container').hide();
        $('#chat-container .addchat-group a').removeClass('active');
    });

    /*! show chat container */
    $('.addchat-toggle').click(function () {
        if($('#addchat-container').is(':visible')){
            $('#chat-container').toggle('slide', {
                direction: 'down'
            }, 300);
            $('#addchat-container').hide();
        } else{
            $('#chat-container').toggle('slide', {
                direction: 'down'
            }, 300);
            chatInit();
        }
    });

     $(document).on('click', '.dropdown-menu', function(e) {
        e.stopPropagation();
    });

    /*! change user status */
    $(document).on('click', '.change-status', function() {
        $(this).find('.btn').toggleClass('active');  
        if ($(this).find('.btn-success').length > 0) {
            $(this).find('.btn').toggleClass('btn-success');
            
            $.ajax({ 
                type    : "POST", 
                url     : base_url + "addchat_init/change_status", 
                success : function(response) {
                    if(response.status == 1) {
                        $('#current_status').html("online");
                        $('#current_status').removeClass('label-mute').addClass('label-success');
                    } else { 
                        $('#current_status').html('offline');
                        $('#current_status').removeClass('label-success').addClass('label-mute');
                    }
                }
            });
        }    
        $(this).find('.btn').toggleClass('btn-mute');
    });


    /*! change user status */
    $(document).on('click', '.block-user', function() {
        $(this).find('.btn').toggleClass('active');  
        if ($(this).find('.btn-success').length > 0) {
            $(this).find('.btn').toggleClass('btn-success');

            var sub_user_id = $('input[name="sub_user_id"]').val();
            
            $.ajax({ 
                type: "POST", 
                url: base_url  + "addchat_init/block_user", 
                data: {
                    sub_user_id : sub_user_id
                },
                cache: false,
                success : function(response) {
                    if(response.status == 1) { // user blocked
                        $('#addchat-container .chat-content').css('background', '#f443364a');
                        $('#send-text').attr('disabled', true);
                        $('#send-msg').attr('disabled', true);
                        $('#addchat-container > .addchat-container-header > small').html('blocked');
                    } else {                    // user unblocked
                        $('#addchat-container .chat-content').css('background', '#fff');
                        $('#send-text').attr('disabled', false);
                        $('#send-msg').attr('disabled', false);
                        $('#addchat-container > .addchat-container-header > small').html('unblocked');
                    }
                }
            });
        }    
        $(this).find('.btn').toggleClass('btn-mute');
    });

    /*! change user status */
    $(document).on('click', '.delete-chat', function() {
        $("#mi-modal").modal('show');
    });

    // Chat delete confirm
    $(document).on('click', '#confirm-delete', function() {
        $("#mi-modal").modal('hide');
        var sub_user_id = $('input[name="sub_user_id"]').val();
        $.ajax({ 
            type: "POST", 
            url: base_url  + "addchat_init/delete_chat", 
            data: {
                sub_user_id : sub_user_id
            },
            cache: false,
            success : function(response) {
                if(response.status == 1) { // chat deleted
                    $('ul.addchat-container-body').empty();
                } else {  // delete fail
                    alert('delete fail, try again!');
                }
            }
        });
    });

    // Search user
    $(document).on('keyup', 'input[name="search_user"]', function() {
        var search_user = '';
        
        delay(function(){
            search_user = $('input[name="search_user"]').val();
            $('.addchat-group#group_1').css('display', 'none');
            $('.addchat-group#group_2').html('<span class="chat-search-loader"><i class="fa fa-circle-o-notch fa-spin"></i></span>');
            $.ajax({ 
                type: "POST", 
                url: base_url  + "addchat_init/search_users", 
                data: {
                    search_user : search_user
                },
                cache: false,
                success : function(response) {
                    console.log(response);
                    if(response.status == 1) { // list users
                        var s_users_list = '';
                        $.each(response.users, function() {
                            s_users_list += '<a href="javascript: void(0)" data-toggle="popover" data-trigger="click">\
                                                <div class="user-wrap">\
                                                    <input type="hidden" value="'+this.id+'" name="user_id" />\
                                                    <div class="user-profile-img">\
                                                       <div class="profile-img">';

                            if(this.avatar)
                                this.avatar = base_url+'/'+img_upld_pth+'/'+this.avatar;
                            else
                                this.avatar = base_url+'/'+ast_img_pth+'/avatar.png';
                            
                            s_users_list +=             '<img src="'+this.avatar+'" class="img-responsive img-circle">';

                            fullname = this.username;

                            unread   = this.unread ? this.unread : '';
                                                        
                            s_users_list +=             '</div>\
                                                    </div>\
                                                    <span class="user-name">\
                                                        <small class="user-name">'+fullname+'</small>\
                                                        <span class="badge progress-bar-danger" rel="'+this.id+'">'+unread+'</span>\
                                                    </span>\
                                                    <span class="user_status">';

                            if(this.online == 1)
                                s_users_list +=         '<span class="user-status is-online"></span>';
                            else
                                s_users_list +=         '<span class="user-status is-offline"></span>';

                            s_users_list +=         '</span>\
                                                </div>\
                                            </a>';
                        });

                        $('.addchat-group#group_2').html(s_users_list);
                    } else {  // delete fail
                        $('.addchat-group#group_2').html(response.response);
                        $('.addchat-group#group_1').css('display', 'block');
                    }
                }
            });

        }, 1000 );
        
    });


    /*Upload profile pic*/
    $(document).on('submit', '#profile_pic_save', function(e) {
        e.preventDefault();
        $('#image-error').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
        $.ajax({
            url: base_url  + "addchat_init/upload_profile_pic",
            type: "POST",             
            data: new FormData(this), 
            contentType: false,       
            cache: false,             
            processData:false,        
            success: function(data) {
                if(data.status == 1) {
                    $('#image-error').empty();
                    $('#image-success').html(data.response);
                } else {
                    $('#image-error').html(data.response);
                }
            }
        });
    });


    $(document).on("change", "#wizard-picture", function() {
        $("#image-error").empty(); // To remove the previous error message
        
        var file = this.files[0];
        var imagefile = file.type;

        var match= ["image/jpeg","image/png","image/jpg"];

        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))) {
            $("#image-error").html("Invalid Image File! (png, jpg or jpeg only)");
            return false;
        } else {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
        
    /*! show popover */
    var popOverSettings = {
        container: 'body',
        trigger:'hover',
        selector: '[data-toggle="popover"]',
        placement: 'left',
        html: true,
        content: function () {
            return $('#popover-content').html();
        }
    }
    $(document).on("mouseenter",'[data-toggle="popover"]',function() {
        $('.popover').hide();

        image  = $(this).find('.profile-img').html();
        
        $('#user-image').empty().html(image);
        
        $(this).popover({
            placement:'top', 
            trigger: 'hover',
            container: 'body',
            selector: '[data-toggle="popover"]',
            html: true,
            content: function () {
                return $('#popover-content').html();
            }
        }).popover('show');

    }).on('mouseleave', '[data-toggle="popover"]', function() {
        $(this).popover('hide');
    });

    /*!show chat sub-container*/
    $(document).on('click', '[data-toggle="popover"]', function(){

        $(this).popover('hide');
        $('ul.addchat-container-body').empty();

        user = $(this).find('input[name="user_id"]').val();

        // update sub user id
        $("#addchat-container input[name='sub_user_id']").val(user); 

        $(this).find('span[rel="'+user+'"]').text('');

        getMessages(user);

        var offset = $(this).offset(); 
        var h_main = $('#chat-container').height();
        var h_title = $("#addchat-container > .addchat-container-header").height();
        var top = ($('#addchat-container').is(':visible') ? (offset.top - h_title - 40) : (offset.top + h_title - 20));

        if((top + $('#addchat-container').height()) > h_main) 
            top = h_main -  $('#addchat-container').height();
        
        $('#addchat-container').css({'top': top});
        if(!$('#addchat-container').is(':visible')){
            $('#addchat-container').toggle('slide',{
                direction: 'right'
            }, 300);
        }
        $('.addchat-container-body').slimScroll({ height: '300px' });
        $("#send-text").focus();

        window.emojiPicker = new EmojiPicker({
            emojiable_selector: '[data-emojiable=true]',
            assetsPath: base_url+'/'+ast_img_pth+'/',
            popupButtonClasses: 'fa fa-smile-o'
        });

        window.emojiPicker.discover();
    });
    
    /*!
     * send message
     */
   
    $(document).on('keyup','.emoji-wysiwyg-editor',function(event){
        event.preventDefault();
  // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode == 13) {
        var txtarea = $('#send-text');
        var message = $('.emoji-wysiwyg-editor').text();
        if(message !== "") {
            $('#send-text').val('hello');
            
            $('#chat-container .emoji-wysiwyg-editor').html("");
            
            $.ajax({ 
                type    : "POST", 
                url     : base_url  + "addchat_init/send_message", 
                data    : {
                    message     : message, 
                    user        : user
                },
                cache   : false,
                success : function(response) {
                    if(response.status) {
                        
                        msg = response.message;
                        console.log(base_url);
                        li = '<li class=" bubble '+ msg.type +'"><img src="'+base_url+msg.avatar+'" class="avt img-responsive">\
                        <div class="message">\
                        <span class="chat-arrow"></span>\
                        <a href="javascript:void(0)" class="chat-name">'+msg.name+'</a>&nbsp;\
                        <span class="chat-datetime">'+timeSince(new Date(msg.dt_updated))+'</span>'

                        // add last seen feature
                        if(msg.sender == logged_in_user) {
                            if(msg.is_read == 1)
                                li += '<span class="chat-lastseen pull-right read"><i class="fa fa-check-square-o"></i></span>';
                            else
                                li += '<span class="chat-lastseen pull-right unread"><i class="fa fa-check-square-o"></i></span>';
                        }

                        li += '<span class="chat-body">'+msg.message+'</span></div></li>';

                        $('ul.addchat-container-body').append(li);
                        $('ul.addchat-container-body').animate({scrollTop: $('ul.addchat-container-body').prop("scrollHeight")}, 500);    
                    } else {
                        alert(response.response);
                    }
                    
                }
            });
        }
    }

    });
    $(document).on('click', '#send-msg', function(e) {
        var txtarea = $('#send-text');

        var message = txtarea.val();
        if(message !== "") {
            $('#send-text').val('hello');
            
            $('#chat-container .emoji-wysiwyg-editor').html("");
            
            $.ajax({ 
                type    : "POST", 
                url     : base_url  + "addchat_init/send_message", 
                data    : {
                    message     : message, 
                    user        : user
                },
                cache   : false,
                success : function(response) {
                    if(response.status) {
                        console.log(msg.avatar);
                        msg = response.message;
                        li = '<li class=" bubble '+ msg.type +'"><img src="'+base_url+msg.avatar+'" class="avt img-responsive">\
                        <div class="message">\
                        <span class="chat-arrow"></span>\
                        <a href="javascript:void(0)" class="chat-name">'+msg.name+'</a>&nbsp;\
                        <span class="chat-datetime">'+timeSince(new Date(msg.dt_updated))+'</span>'

                        // add last seen feature
                        if(msg.sender == logged_in_user) {
                            if(msg.is_read == 1)
                                li += '<span class="chat-lastseen pull-right read"><i class="fa fa-check-square-o"></i></span>';
                            else
                                li += '<span class="chat-lastseen pull-right unread"><i class="fa fa-check-square-o"></i></span>';
                        }

                        li += '<span class="chat-body">'+msg.message+'</span></div></li>';

                        $('ul.addchat-container-body').append(li);
                        $('ul.addchat-container-body').animate({scrollTop: $('ul.addchat-container-body').prop("scrollHeight")}, 500);    
                    } else {
                        alert(response.response);
                    }
                    
                }
            });
        }
    });
 
});