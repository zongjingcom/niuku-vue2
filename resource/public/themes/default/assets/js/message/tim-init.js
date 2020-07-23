var options = {
    SDKAppID: 1400347958 // 接入时需要将0替换为您的即时通信 IM 应用的 SDKAppID
};
// 创建 SDK 实例，`TIM.create()`方法对于同一个 `SDKAppID` 只会返回同一份实例
var tim = TIM.create(options);
// 设置 SDK 日志输出级别，详细分级请参见 setLogLevel 接口的说明
tim.setLogLevel(4); // 普通级别，日志量较多，接入时建议使用
// tim.setLogLevel(1); // release 级别，SDK 输出关键信息，生产环境时建议使用

//记录会话ID
var now_conversationID;
var now_nick;
var now_userID;
var ConversationArr = new Array();


//发送附件绑定事件
$("#sendImgOrFile").change(function () {
    //    ②如果value不为空，调用文件加载方法
    if ($(this).val() != "") {
        sendImgOrFile(this);
    }
})

// 注册 COS SDK 插件
tim.registerPlugin({
    'cos-js-sdk': COS
});

//监听TIM是否处于ready状态
let onSdkReady = function (event) {
    //更新个人信息
    updateProfile();
    //获取未读消息角标和列表
    getUnreadMsgTip();
    if (isXPage('user/message') && now_conversationID) {
        getChatDialogue(now_conversationID, now_nick, now_userID);
    }
};
tim.on(TIM.EVENT.SDK_READY, onSdkReady);

//监听TIM是否处于not ready状态
let onSdkNotReady = function (event) {
    // 如果想使用发送消息等功能，接入侧需驱动 SDK 进入 ready 状态，重新调用 login 接口即可，如下所示：
    // tim.login({userID: 'your userID', userSig: 'your userSig'});
};
tim.on(TIM.EVENT.SDK_NOT_READY, onSdkNotReady);

//监听TIM收到推送的单聊、群聊、群提示、群系统通知的新消息
let onMessageReceived = function (event) {
    // event.data - 存储 Message 对象的数组 - [Message]
    //获取未读消息角标和列表
    getUnreadMsgTip();
    // if (isMessagePage()) {
    //     if (event.data.length > 0) {
    //         $('#message-pannel').css('display', '');
    //         getRecentFriendsList(event);
    //     } else {
    //         $('#none-message').css('display', '');
    //     }
    // }
};
tim.on(TIM.EVENT.MESSAGE_RECEIVED, onMessageReceived);

//监听TIM收到会话列表更新通知，可通过遍历 event.data 获取会话列表数据并渲染到页面
let onConversationListUpdated = function (event) {
    if (isXPage('user/message')) {
        if (event.data.length > 0) {
            $('#message-pannel').css('display', '');
            getRecentFriendsList(event);
        } else {
            $('#none-message').css('display', '');
        }
    }
};
tim.on(TIM.EVENT.CONVERSATION_LIST_UPDATED, onConversationListUpdated);

//监听TIM收到 SDK 发生错误通知，可以获取错误码和错误信息
let onError = function (event) {
    // event.data.code - 错误码
    // event.data.message - 错误信息
};
tim.on(TIM.EVENT.ERROR, onError);

//登录
var usr = genTestUserSig($('#uuid').val());
let promise = tim.login({
    userID: $('#uuid').val(),
    userSig: usr['userSig']
});
promise.then(function (imResponse) {
    console.log(imResponse.data); // 登录成功
}).catch(function (imError) {
    console.warn('login error:', imError); // 登录失败的相关信息
});

//更新TIM用户信息 如：头像，昵称
function updateProfile() {
    // 修改个人标配资料
    let promise = tim.updateMyProfile({
        nick: $('#uname').val()
        // avatar: 'http(s)://url/to/image.jpg'
    });
    promise.then(function (imResponse) {
        console.log(imResponse.data); // 更新资料成功
    }).catch(function (imError) {
        console.warn('updateMyProfile error:', imError); // 更新资料失败的相关信息
    });
}

//获取Head未读消息提醒
function getUnreadMsgTip() {
    $("#unread-msg-list").remove();
    let promise = tim.getConversationList();
    promise.then(function (imResponse) {
        const conversationList = imResponse.data.conversationList; // 会话列表，用该列表覆盖原有的会话列表
        var amount = 0;
        var unreadMsgListHtml = "";
        for (i = 0; i < conversationList.length; i++) {
            if (conversationList[i]['unreadCount'] != 0) {
                amount += conversationList[i]['unreadCount'];
                var msg = conversationList[i]['lastMessage']['messageForShow'];
                var name = conversationList[i]['userProfile']['nick'];
                var date = time(conversationList[i]['lastMessage']['lastTime']);
                if (msg.length > 20) {
                    msg = msg.substring(0, 20) + '...';
                }
                unreadMsgListHtml += "<li class=\"notifications-not-read\">" +
                    "<a href=\"/user/message?cid=" + conversationList[i]['conversationID'] + "&nick=" + conversationList[i]['userProfile']['nick'] + "&uid=" + conversationList[i]['userProfile']['userID'] + "\">" +
                    "<span class=\"notification-avatar status-online\">" +
                    "<img src=\"/themes/default/assets/images/user-avatar-small-03.jpg\"></span>" +
                    "<div class=\"notification-text\">" +
                    "<strong>" + name + "</strong>" +
                    "<p class=\"notification-msg-text\">" + msg +
                    "</p><span class=\"color\">" + date + "</span></div></a></li>"
            }
        }
        unreadMsgListHtml = "<ul id=\"unread-msg-list\">" + unreadMsgListHtml + "</ul>"
        if (amount != 0) {
            //header 未读消息 角标
            var msgamount = document.getElementById("msgamount");
            msgamount.innerText = amount;
            msgamount.style.display = "";

            //sidebar 消息中心 角标
            if (isXPage('user/message')) {
                var sidemsgamount = document.getElementById("sidemsgamount");
                sidemsgamount.innerText = amount;
                sidemsgamount.style.display = "";
            }


            $("#station-news .simplebar-scroll-content .simplebar-content").append(unreadMsgListHtml);
            $("#not-read-news").css('display', 'none');
        } else {
            $("#msgamount").css('display', 'none'); //header 未读消息 角标
            $("#sidemsgamount").css('display', 'none'); //sidebar 消息中心 角标
            $("#not-read-news").css('display', '');
        }
    }).catch(function (imError) {
        alert(imError);
        console.warn('getConversationList error:', imError); // 获取会话列表失败的相关信息
    });
}

//全部标记为已读
function markMsgRead() {
    // 拉取会话列表
    let promise = tim.getConversationList();
    promise.then(function (imResponse) {
        const conversationList = imResponse.data.conversationList; // 会话列表，用该列表覆盖原有的会话列表
        for (i = 0; i < conversationList.length; i++) {
            let pr = tim.setMessageRead({
                conversationID: conversationList[i]['conversationID']
            });
            pr.then(function (imResponse) {
                // 已读上报成功
                getUnreadMsgTip();
            }).catch(function (imError) {
                // 已读上报失败
                console.warn('setMessageRead error:', imError);
            });
        }
    }).catch(function (imError) {
        console.warn('getConversationList error:', imError); // 获取会话列表失败的相关信息
    });
}

//获取最近好友列表
function getRecentFriendsList(event) {
    $("#recent-friends-list").remove();
    const conversationList = event.data; // 会话列表，用该列表覆盖原有的会话列表
    if (conversationList.length > 0) {
        $('#message-pannel').css('display', '');
    } else {
        $('#none-message').css('display', '');
    }
    var RecentFriendsList = "";
    for (i = 0; i < conversationList.length; i++) {
        var msg = conversationList[i]['lastMessage']['messageForShow'];
        var name = conversationList[i]['userProfile']['nick'];
        var date = time(conversationList[i]['lastMessage']['lastTime']);
        if (msg.length > 20) {
            msg = msg.substring(0, 20) + '...';
        }
        RecentFriendsList += "<li id=\"" + conversationList[i]['conversationID'] + "\"><a href=\"javascript:void(0)\" onclick=getChatDialogue(\"" + conversationList[i]['conversationID'] + "\",\"" + conversationList[i]['userProfile']['nick'] + "\",\"" + conversationList[i]['userProfile']['userID'] + "\")>" +
            "<div class=\"message-avatar\">" +
            "<i class=\"status-icon status-online\"></i>" +
            "<img src=\"/themes/default/assets/images/user-avatar-small-03.jpg\"></div>" +
            "<div class=\"message-by\">" +
            "<div class=\"message-by-headline\">" +
            "<h5>" + name + "</h5>"
        if (conversationList[i]['unreadCount'] != 0) {
            RecentFriendsList += "<div class=\"header-notifications-trigger\"><span id=\"nub-" + conversationList[i]['conversationID'] + "\" style=\"color:#fff;\">" + conversationList[i]['unreadCount'] + "</span></div>" +
                "<span>" + date + "</span></div>" +
                "<p>" + msg + "</p></div></a></li>"
        } else {
            RecentFriendsList += "<span>" + date + "</span></div>" +
                "<p>" + msg + "</p></div></a></li>"
        }
    }
    RecentFriendsList = "<ul id=\"recent-friends-list\">" + RecentFriendsList + "</ul>"
    $("#recent-friends-list-bar .messages-inbox").append(RecentFriendsList);
    if (GetQueryValue('cid')) {
        now_conversationID = GetQueryValue('cid');
        now_nick = GetQueryValue('nick');
        now_userID = GetQueryValue('uid');
        history.replaceState(null, null, 'http://niuku.net/user/message');
    }

    if (now_conversationID) {
        $("#" + now_conversationID).addClass("active-message");
    } else {
        now_conversationID = conversationList[0]['conversationID'];
        now_nick = conversationList[0]['userProfile']['nick'];
        now_userID = conversationList[0]['userProfile']['userID'];
    }
}


//获取聊天对话
function getChatDialogue(conversationID, nick, userID) {
    ConversationArr = new Array();
    $("#nub-" + conversationID).css('display', 'none');
    $("#recent-friends-list .active-message ").removeClass("active-message");
    $("#" + conversationID).addClass("active-message");
    $("#chat-dialogue-list").remove();
    now_conversationID = conversationID;
    now_nick = nick;
    now_userID = userID;
    getConversation();
}

function getConversation(nextReqMessageID = 0) {
    if(nextReqMessageID == 0 ){
        ConversationArr = [];
    }
    // 打开某个会话时，第一次拉取消息列表
    let promise = tim.getMessageList({
        conversationID: now_conversationID,
        count: 15,
        nextReqMessageID: nextReqMessageID
    });
    promise.then(function (imResponse) {
        $("#chat-dialogue-list").remove();
        const messageList = imResponse.data.messageList; // 消息列表。
        const nextReqMessageID = imResponse.data.nextReqMessageID; // 用于续拉，分页续拉时需传入该字段。
        const isCompleted = imResponse.data.isCompleted; // 表示是否已经拉完所有消息。
        document.getElementById("conversation-name").innerHTML = now_nick;
        var conversation = "";
        for (i = messageList.length-1; i >=0; i--) {
            ConversationArr.unshift(messageList[i]);
        }
        for (i = 0; i < ConversationArr.length; i++) {
            // var name = messageList[i]['nick'];
            var avatar = "/themes/default/assets/images/user-avatar-small-01.jpg"; //messageList[i]['avatar'];
            var msg = ConversationArr[i]['payload']['text'];
            if(i-1 >= 0 &&  isAddTime(ConversationArr[i]['time'],ConversationArr[i-1]['time'])){
                conversation += "<div style=\"text-align:center\">"+ ChatDialogueTime(ConversationArr[i]['time']) +"</div>"
            }
            if (ConversationArr[i]['from'] == now_userID) {
                conversation += "<div class=\"message-bubble\">"
            } else {
                conversation += "<div class=\"message-bubble me\">"
            }
            if (ConversationArr[i]['type'] == "TIMTextElem") {
                conversation += "<div class=\"message-bubble-inner\">" +
                    "<div class=\"message-avatar\"><img src=" + avatar + "/></div>" +
                    "<div class=\"message-text\">" +
                    "<p>" + msg + "</p>" +
                    "</div>" +
                    "</div>" +
                    "<div class=\"clearfix\"></div>" +
                    "</div>"
            } else if (ConversationArr[i]['type'] == "TIMImageElem") {
                var imageUrl = ConversationArr[i]['payload']['imageInfoArray'][0]['imageUrl'];
                conversation += "<div class=\"message-bubble-inner\">" +
                    "<div class=\"message-avatar\"><img src=" + avatar + "/></div>" +
                    "<div class=\"message-text\">" +
                    "<img src=" + imageUrl + "></img>" +
                    "</div>" +
                    "</div>" +
                    "<div class=\"clearfix\"></div>" +
                    "</div>"
            } else if (ConversationArr[i]['type'] == "TIMFileElem") {
                var fileUrl = ConversationArr[i]['payload']['fileUrl'];
                var fileName = ConversationArr[i]['payload']['fileName'];
                var fileSize = ConversationArr[i]['payload']['fileSize'];

                conversation += "<div class=\"message-bubble-inner\">" +
                    "<div class=\"message-avatar\"><img src=" + avatar + "/></div>" +
                    "<div class=\"message-text\">" +
                    "<p>" + fileName + "</p>" +
                    "<p>" + fileSize + "byte</p>" +
                    "<button  onclick=Download(\"" + fileUrl + "\",\"" + fileName + "\")>点击下载</button>" +
                    "</div>" +
                    "</div>" +
                    "<div class=\"clearfix\"></div>" +
                    "</div>"
            }
        }
        if (!isCompleted) {
            conversation = "<p style=\"text-align: center\"><a href=\"javascript:void(0)\" onclick=getConversation(\"" + nextReqMessageID + "\") style=\"text-align:center\">查看更多</a></p>" + conversation
        }

        if ($("#chat-dialogue-list").length > 0) {
            $("#chat-dialogue-list").append(conversation);
        } else {
            conversation = "<div id=\"chat-dialogue-list\">" + conversation + "<input type=\"text\" id=\"to-userid\" style=\"visibility: hidden;\" value=\"" + now_userID + "\" >" + "</div>"
            $(".message-content .message-content-inner").append(conversation);
        }
    });

    tim.setMessageRead({
        conversationID: now_conversationID
    });
    getUnreadMsgTip();
}

//发送文本消息
function sendMsg() {
    var msg = $('#msg-content').val();
    var toUserID = $('#to-userid').val();
    if (msg == "") {
        return;
    }
    // 发送文本消息，Web 端与小程序端相同
    // 1. 创建消息实例，接口返回的实例可以上屏
    let message = tim.createTextMessage({
        to: toUserID,
        conversationType: TIM.TYPES.CONV_C2C,
        payload: {
            text: msg
        }
    });
    // 2. 发送消息
    let promise = tim.sendMessage(message);
    promise.then(function (imResponse) {
        // 发送成功
        $('#msg-content').val("");
        getConversation(0);
        console.log(imResponse);
    }).catch(function (imError) {
        // 发送失败
        console.warn('sendMessage error:', imError);
    });
}

//发送图片或文件
function sendImgOrFile(ele) {
    var fileExtension = document.getElementById('sendImgOrFile')['files'][0]['name'].split('.').pop().toLowerCase();
    var toUserID = $('#to-userid').val();
    let message;
    if (fileExtension == "jpg" || fileExtension == "jpeg" || fileExtension == "png") {
        message = tim.createImageMessage({
            to: toUserID,
            conversationType: TIM.TYPES.CONV_C2C,
            payload: {
                file: document.getElementById('sendImgOrFile'),
            },
            onProgress: function (event) {
                console.log('file uploading:', event)
            }
        });
    } else {
        message = tim.createFileMessage({
            to: toUserID,
            conversationType: TIM.TYPES.CONV_C2C,
            payload: {
                file: document.getElementById('sendImgOrFile'),
            },
            onProgress: function (event) {
                console.log('file uploading:', event)
            }
        });
    }
    // 2. 发送消息
    let promise = tim.sendMessage(message);
    promise.then(function (imResponse) {
        // 发送成功
        getConversation(0);
        console.log(imResponse);
    }).catch(function (imError) {
        // 发送失败
        console.warn('sendMessage error:', imError);
    });
}

//删除对话

function deleteConversation() {
    let promise = tim.deleteConversation(now_conversationID);
    promise.then(function (imResponse) {
        //删除成功。
        const {
            conversationID
        } = imResponse.data; // 被删除的会话 ID
    }).catch(function (imError) {
        console.warn('deleteConversation error:', imError); // 删除会话失败的相关信息
    });
}

//消息距离当前时间
function time(time) {
    var hour = (new Date().getTime() - time * 1000) / (1000 * 3600);
    if (hour < 1) {
        return Math.ceil(hour * 60) + "分钟前";
    } else if (hour >= 1 && hour < 24) {
        return Math.ceil(hour) + "小时前";
    } else if (hour >= 24) {
        return parseInt(hour / 24) + "天前";
    }
}

//判断聊天对话中是否加时间 规则：两条消息中间大于5分钟的加，当天的显示上午或下午时间
function isAddTime(time1,time2){
    var minute = (time1*1000 - time2 * 1000) / (1000 * 60);
    if(minute>5){
        return true;
    }
    return false
}

//判断给定时间是否为今天
function isToday(str) {
    var ttt = new Date(str).getDate();
    var uuu = new Date().getDate();
    var yyy = uuu - ttt;
    var ooo = new Date().getDate() - new Date(str).getDate()  == 0;
    return ooo;
 }

//获取聊天对话时间
function ChatDialogueTime(time){
    time = time *1000;
    var date = new Date(time);
    if(isToday(time)){
        if(date.getHours()<12){
            return "上午 " + date.getHours() + ":" + (date.getMinutes()+1 < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ":" + (date.getSeconds()+1 < 10 ? '0'+date.getSeconds() : date.getSeconds()); 
        }
        return  "下午 " + date.getHours() + ":" + (date.getMinutes()+1 < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ":" + (date.getSeconds()+1 < 10 ? '0'+date.getSeconds() : date.getSeconds()); 
    }else{
        return  date.getFullYear() + "-" + date.getMonth() + "-" + date.getDate() + " " + date.getHours() + ":" + (date.getMinutes()+1 < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ":" + (date.getSeconds()+1 < 10 ? '0'+date.getSeconds() : date.getSeconds()); 
    }
}

//获取当前页面url
function GetUrlRelativePath() {
    var url = document.location.toString();
    var arrUrl = url.split("//");
    var start = arrUrl[1].indexOf("/");
    var relUrl = arrUrl[1].substring(start); //stop省略，截取从start开始到结尾的所有字符
    if (relUrl.indexOf("?") != -1) {
        relUrl = relUrl.split("?")[0];
    }
    return relUrl;
}

function Download(url, filename) {
    var fileExtension = filename.split('.').pop().toLowerCase();
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var url = URL.createObjectURL(this.response);
        if (fileExtension == "png" || fileExtension == "jpeg" || fileExtension == "jpg") {
            //图片下载  
            var img = new Image();
            img.onload = function () {
                let canvas = document.createElement("canvas");
                canvas.width = img.width;
                canvas.height = img.height;
                let context = canvas.getContext("2d");
                context.drawImage(img, 0, 0, img.width, img.height);
                let url = canvas.toDataURL("image/jpeg"); //得到图片的base64编码数据
                let a = document.createElement("a"); // 生成一个a元素
                let event = new MouseEvent("click"); // 创建一个单击事件
                a.download = filename || "photo"; // 设置图片名称
                a.href = url; // 将生成的URL设置为a.href属性
                a.dispatchEvent(event); // 触发a的单击事件
                URL.revokeObjectURL(url);
            };
            img.src = url;
        } else {
            // 文件下载
            var a = document.createElement('a');
            a.href = url;
            a.download = filename;
            a.click();
            window.URL.revokeObjectURL(url);
        }
    };
    xhr.open('GET', url, true);
    xhr.responseType = 'blob';
    xhr.send();
}

function sendImgOrFileClick() {
    $('#sendImgOrFile').click();
}

function GetQueryValue(queryName) {
    var query = decodeURI(window.location.search.substring(1));
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == queryName) {
            return pair[1];
        }
    }
    return null;
}

function isXPage(x) {
    var query = decodeURI(window.location.href);
    if (query.indexOf(x) != -1) {
        return true;
    } else {
        return false;
    }
}
