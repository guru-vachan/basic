// <script>

// ----- display -----

function display(x)
{
  var win = window.open();
  for (var i in x) win.document.write(i+' = '+x[i]+'<br>');
}


// ----- Popup Windows ---------------------------------------------------------

// ----- Variables -----

var popup_dragging = false;
var popup_target;
var popup_mouseX;
var popup_mouseY;
var popup_mouseposX;
var popup_mouseposY;
var popup_oldfunction;

// ----- popup_mousedown -----

function popup_mousedown(e)
{
  var ie = navigator.appName == "Microsoft Internet Explorer";

  if ( ie && window.event.button != 1) return;
  if (!ie && e.button            != 0) return;

  popup_dragging = true;
  popup_target   = this['target'];
  popup_mouseX   = ie ? window.event.clientX : e.clientX;
  popup_mouseY   = ie ? window.event.clientY : e.clientY;

  if (ie)
       popup_oldfunction      = document.onselectstart;
  else popup_oldfunction      = document.onmousedown;

  if (ie)
       document.onselectstart = new Function("return false;");
  else document.onmousedown   = new Function("return false;");
}

// ----- popup_mousemove -----

function popup_mousemove(e)
{
  if (!popup_dragging) return;

  var ie      = navigator.appName == "Microsoft Internet Explorer";
  var element = document.getElementById(popup_target);

  var mouseX = ie ? window.event.clientX : e.clientX;
  var mouseY = ie ? window.event.clientY : e.clientY;

  element.style.left = (element.offsetLeft+mouseX-popup_mouseX)+'px';
  element.style.top  = (element.offsetTop +mouseY-popup_mouseY)+'px';

  popup_mouseX = ie ? window.event.clientX : e.clientX;
  popup_mouseY = ie ? window.event.clientY : e.clientY;
}

// ----- popup_mouseup -----

function popup_mouseup(e)
{
  if (!popup_dragging) return;
  popup_dragging = false;

  var ie      = navigator.appName == "Microsoft Internet Explorer";
  var element = document.getElementById(popup_target);

  if (ie)
       document.onselectstart = popup_oldfunction;
  else document.onmousedown   = popup_oldfunction;
}

// ----- popup_exit -----

function popup_exit(e)
{
  popup_mouseup(e);
  popup_hide(popup_target);
}

// ----- popup_hide -----

function popup_hide(id)
{
  element = document.getElementById(id);
  element.style.visibility = 'hidden';
  element.style.display    = 'none';
}

// ----- popup_show -----

function popup_show(id, drag_id, exit_id, position, x, y, position_id)
{
  element       = document.getElementById(id);
  drag_element  = document.getElementById(drag_id);
  exit_element  = document.getElementById(exit_id);

  if (element.style.visibility == "visible" && element.style.display == "block") return;

  if (position == "screen-corner")
  {
    element.style.left = (document.documentElement.scrollLeft+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +y)+'px';
  }

  if (position == "screen-center")
  {
    element.style.left = (document.documentElement.scrollLeft+(document.body.clientWidth -element.clientWidth )/2+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +(document.body.clientHeight-element.clientHeight)/2+y)+'px';
  }

  if (position == "mouse-corner")
  {
    element.style.left = (document.documentElement.scrollLeft+popup_mouseposX+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +popup_mouseposY+y)+'px';
  }

  if (position == "mouse-center")
  {
    element.style.left = (document.documentElement.scrollLeft+popup_mouseposX-element.clientWidth /2+x)+'px';
    element.style.top  = (document.documentElement.scrollTop +popup_mouseposY-element.clientHeight/2+y)+'px';
  }

  if (position == "element" || position == "element-right" || position == "element-bottom")
  {
    var position_element = document.getElementById(position_id);

    for (var p = position_element; p; p = p.offsetParent)
      if (p.style.position != 'absolute')
      {
        x += p.offsetLeft;
        y += p.offsetTop ;
      }

    if (position == "element-right" ) x += position_element.clientWidth;
    if (position == "element-bottom") y += position_element.clientHeight;

    element.style.left = x+'px';
    element.style.top  = y+'px';
  }

  element.style.position   = "absolute";
  element.style.visibility = "visible";
  element.style.display    = "block";

  drag_element['target']   = id;
  drag_element.onmousedown = popup_mousedown;

  exit_element.onclick     = popup_exit;
}

// ----- popup_mousepos -----

function popup_mousepos(e)
{
  var ie = navigator.appName == "Microsoft Internet Explorer";

  popup_mouseposX = ie ? window.event.clientX : e.clientX;
  popup_mouseposY = ie ? window.event.clientY : e.clientY;
}

// ----- Attach Events -----

if (navigator.appName == "Microsoft Internet Explorer")
     document.attachEvent('onmousedown', popup_mousepos);
else document.addEventListener('mousedown', popup_mousepos, false);

if (navigator.appName == "Microsoft Internet Explorer")
     document.attachEvent('onmousemove', popup_mousemove);
else document.addEventListener('mousemove', popup_mousemove, false);

if (navigator.appName == "Microsoft Internet Explorer")
     document.attachEvent('onmouseup', popup_mouseup);
else document.addEventListener('mouseup', popup_mouseup, false);


// ----- Dropdown Controls -----------------------------------------------------

var at_timeout = 100;

// ----- at_show_aux -----

function at_show_aux(parent, child)
{
  var p = document.getElementById(parent);
  var c = document.getElementById(child);

  var top  = (c["at_position"] == "y") ? p.offsetHeight+2 : 0;
  var left = (c["at_position"] == "x") ? p.offsetWidth +2 : 0;

  for (; p; p = p.offsetParent)
  {
    if (p.style.position == "absolute") break;
    top  += p.offsetTop;
    left += p.offsetLeft;
  }

  c.style.position   = "absolute";
  c.style.top        = top +'px';
  c.style.left       = left+'px';
  c.style.visibility = "visible";
}

// ----- at_show -----

function at_show()
{
  var p = document.getElementById(this["at_parent"]);
  var c = document.getElementById(this["at_child" ]);

  at_show_aux(p.id, c.id);

  clearTimeout(c["at_timeout"]);
}

// ----- at_hide -----

function at_hide()
{
  var c = document.getElementById(this["at_child"]);

  c["at_timeout"] = setTimeout("document.getElementById('"+c.id+"').style.visibility = 'hidden'", at_timeout);
}

// ----- at_click -----

function at_click()
{
  var p = document.getElementById(this["at_parent"]);
  var c = document.getElementById(this["at_child" ]);

  if (c.style.visibility != "visible")
       at_show_aux(p.id, c.id);
  else c.style.visibility = "hidden";

  return false;
}

// ----- at_attach -----

function at_attach(parent, child, showtype, position, cursor)
{
  var p = document.getElementById(parent);
  var c = document.getElementById(child);

  p["at_parent"]     = p.id;
  c["at_parent"]     = p.id;
  p["at_child"]      = c.id;
  c["at_child"]      = c.id;
  p["at_position"]   = position;
  c["at_position"]   = position;

  c.style.position   = "absolute";
  c.style.visibility = "hidden";

  if (cursor != undefined) p.style.cursor = cursor;

  switch (showtype)
  {
    case "click":
      p.onclick     = at_click;
      p.onmouseout  = at_hide;
      c.onmouseover = at_show;
      c.onmouseout  = at_hide;
      break;
    case "hover":
      p.onmouseover = at_show;
      p.onmouseout  = at_hide;
      c.onmouseover = at_show;
      c.onmouseout  = at_hide;
      break;
  }
}


// ----- Popup + DropDown ------------------------------------------------------

// ----- pdd_show -----

function pdd_show(popup, hide, focus)
{
  if (ChatClientUsername != '' && popup == 'login')
  {
    alert('You are already logged in!');
    return;
  }

  if (ChatClientUsername == '' && popup != 'login' && popup != 'about')
  {
    alert('Please, login first!');
    return;
  }

  if (popup != 'about'     ) popup_hide('about');
  if (popup != 'login'     ) popup_hide('login');
  if (popup != 'newroom'   ) popup_hide('newroom');
  if (popup != 'selectroom') popup_hide('selectroom');

  if (hide) document.getElementById(hide).parentNode.style.visibility = 'hidden';
  popup_show(popup, popup+'_drag', popup+'_exit', 'element', 50, 50, 'ChatClient');
  if (focus) setTimeout("document.getElementById('"+popup+"_frame').contentWindow.document.getElementById('focus').focus();", 10);
}

// ----- pdd_attach -----

function pdd_attach(anchor, popup, hide, focus)
{
  if (hide)
       document.getElementById(anchor).onclick = new Function("pdd_show('"+popup+"', '"+anchor+"', "+focus+"); return false;");
  else document.getElementById(anchor).onclick = new Function("pdd_show('"+popup+"', '', "+focus+"); return false;");
}


// ----- ChatClient Auxiliary --------------------------------------------------

// ----- Variables -----

var ChatClientQueue    = new Array();
var ChatClientMsgs     = new Array();
var ChatClientSystem   = true;

var ChatClientUsername = '';
var ChatClientPassword = '';
var ChatClientColor    = '000000';
var ChatClientRoom     = '';
var ChatClientRooms    = new Array();
var ChatClientUsers    = new Array();

var ChatClientDiscon   = true;
var ChatClientFreeze   = true;
var ChatClientLogged   = false;
var ChatClientInRoom   = false;

// ----- Clear Rooms -----

function ChatClientClearRooms()
{
  ChatClientRooms = new Array();
  document.getElementById('ChatClientRooms').innerHTML = '';
}

// ----- Clear Users -----

function ChatClientClearUsers()
{
  ChatClientUsers = new Array();
  document.getElementById('ChatClientUsers').innerHTML = '';
}

// ----- Connected -----

function ChatClientConnected()
{
  if (ChatClientDiscon && ChatClientSystem)
    ChatClientToScreen("System: Connected to the server", true);

  ChatClientDiscon = false;
  ChatClientFreeze = false;
  ChatClientLogged = false;
  ChatClientInRoom = false;
}

// ----- Connection Freeze -----

function ChatClientConnFreeze()
{
  if (ChatClientFreeze) return;

  ChatClientDiscon = false;
  ChatClientFreeze = true;
  ChatClientLogged = false;
  ChatClientInRoom = false;

  ChatClientSendFailed();
}

// ----- Connection Lost -----

function ChatClientConnLost()
{
  if (ChatClientDiscon) return;

  ChatClientDiscon = true;
  ChatClientFreeze = true;
  ChatClientLogged = false;
  ChatClientInRoom = false;
  ChatClientSendFailed();

  ChatClientToScreen("System: Connection lost. Trying to reconnect...", true);
}

// ----- Encode -----

function ChatClientEncode(strings, prefix)
{
  var result = "";

  for (i = 0; i < strings.length; i++)
  {
    var length  = strings[i].length.toString();
    result += length;
    for (j = 0; j < prefix-length.length; j++) result += ' ';
    result += strings[i];
  }

  return result;
}

// ----- Send -----

function ChatClientSend()
{
  if (ChatClientFreeze || ChatClientQueue.length == 0) return '';
  return ChatClientQueue.shift();
}

// ----- Send Failed -----

function ChatClientSendFailed()
{
  for (var i in ChatClientMsgs)
    ChatClientToScreen('<b>System:</b> failed to send message "'+ChatClientMsgs[i]['msg']+'"', false);
  ChatClientMsgs = new Array();
}

// ----- To Screen -----

function ChatClientToScreen(str, system)
{
  if ( system && !ChatClientSystem) str = '<hr />'+str;
  if (!system &&  ChatClientSystem) str = '<hr />'+str;
  ChatClientSystem = system;

  document.getElementById('ChatClientChat').innerHTML += '<div>'+str+'</div>';
  document.getElementById('ChatClientChat').scrollTop = 1000000;
}


// ----- ChatClient Confirm ----------------------------------------------------

// ----- Login -----

function ChatClientConfirmLogin(user, color)
{
  ChatClientUsername = user;
  ChatClientColor    = color;
  ChatClientClearRooms();
  ChatClientClearUsers();

  if (!ChatClientSystem)
    ChatClientToScreen("System: Connection lost. Trying to reconnect...", true);
  ChatClientToScreen('System: login as <b>'+user+'</b>', true);
  ChatClientQueue.push('enter: '+ChatClientRoom);

  ChatClientDiscon = false;
  ChatClientFreeze = false;
  ChatClientLogged = true;
  ChatClientInRoom = false;
  ChatClientSendFailed();
}

// ----- Reconnect -----

function ChatClientConfirmReconn(user)
{
  ChatClientUsername = user;

  if (ChatClientRoom == '') ChatClientQueue.push('enter: ');

  ChatClientDiscon = false;
  ChatClientFreeze = false;
  ChatClientLogged = true;
  ChatClientInRoom = true;
  ChatClientSendFailed();
}

// ----- Enter -----

function ChatClientConfirmEnter(room)
{
  ChatClientInRoom = true;
  ChatClientRoom   = room;
  ChatClientClearUsers();
  ChatClientToScreen('System: Enter room <b>'+room+'</b>', true);
  ChatClientToScreen('', false);
}

// ----- Exit -----

function ChatClientConfirmExit()
{
  ChatClientToScreen('System: Exit room', true);
  ChatClientInRoom = false;
  ChatClientRoom   = '';
  ChatClientClearUsers();
}

// ----- Tell -----

function ChatClientConfirmTell(checksum)
{
  var arr = new Array();
  for (var i in ChatClientMsgs)
    if (ChatClientMsgs[i]['sum'] != checksum) arr.push(ChatClientMsgs[i]);
  ChatClientMsgs = arr;
}

// ----- ChatClient Action -----------------------------------------------------

// ----- Login -----

function ChatClientDoLogin()
{
  var form = document.getElementById('login_frame').contentWindow.document.forms[0];

  if (form['Username'].value == '') alert('Please, enter your username!');
  if (form['Username'].value == '' || ChatClientFreeze) return false;

  ChatClientUsername = form['Username'].value;
  ChatClientPassword = form['Password'].value;
  data = new Array(ChatClientUsername, ChatClientPassword);
  ChatClientQueue.push('login: '+ChatClientEncode(data, 3));

  return true;
}

// ----- Logoff -----

function ChatClientDoLogoff()
{
  if (!ChatClientLogged) return;

  ChatClientUsername = '';
  ChatClientPassword = '';
  ChatClientColor    = '000000';
  ChatClientRoom     = '';
  ChatClientClearRooms();
  ChatClientClearUsers();
  ChatClientQueue.push('logoff');

  document.getElementById('menu_chat_child').style.visibility = 'hidden';
}

// ----- New Room -----

function ChatClientDoNewRoom()
{
  var form = document.getElementById('newroom_frame').contentWindow.document.forms[0];

  if (!ChatClientLogged) return false;

  ChatClientRoom = form['Room'].value;
  ChatClientQueue.push('enter: '+ChatClientRoom);
  return true;
}

// ----- Enter -----

function ChatClientDoEnter(room)
{
  if (!ChatClientLogged) return;

  ChatClientRoom = ChatClientRooms[room];
  ChatClientQueue.push('enter: '+ChatClientRoom);
  popup_hide('selectroom');
}

// ----- Tell -----

function ChatClientDoTell()
{
  var msg = document.forms['ChatClientTell']['Tell'].value;

  if (!ChatClientInRoom || msg == '') return;

  ChatClientQueue.push('tell: '+msg);
  ChatClientToScreen('<font color="#'+ChatClientColor+'">'+'<b>'+ChatClientUsername+':</b> '+msg+'</font>', false);
  document.forms['ChatClientTell']['Tell'].value = '';

  var sum = 0;
  for (var i = 0; i < msg.length; i++)
  {
    sum += msg.charCodeAt(i);
    if (sum > 999) sum -= 999;
  }
  ChatClientMsgs.push({'msg' : msg, 'sum' : sum});
}


// ----- ChatClient Command ----------------------------------------------------

// ----- Login -----

function ChatClientLogin()
{
  if (ChatClientUsername)
  {
    data = new Array(ChatClientUsername, ChatClientPassword);
    if (ChatClientDiscon)
         ChatClientQueue.push( 'login: '+ChatClientEncode(data, 3));
    else ChatClientQueue.push('reconn: '+ChatClientEncode(data, 3));
  }
  else document.getElementById('menu_chat_login').onclick();
}

// ----- Invalid Login -----

function ChatClientInvalidLogin()
{
  ChatClientUsername = '';
  document.getElementById('menu_chat_login').onclick();
}

// ----- Logoff -----

function ChatClientLogoff(msg)
{
  ChatClientUsername = '';
  alert(msg);
}

// ----- New Room -----

function ChatClientNewRoom(rooms)
{
  for (var i = 0; i < rooms.length; i++)
  {
    var exists = false;
    for (var j = 0; j < ChatClientRooms.length; j++)
      if (ChatClientRooms[j] == rooms[i]) exists = true;
    if (exists) continue;

    document.getElementById('ChatClientRooms').innerHTML +=
      '<a id="ChatClientRoom_'+ChatClientRooms.length+'" href="#" '+
      'onclick="ChatClientDoEnter('+ChatClientRooms.length+'); return false;" '+
      'onmouseover="this.style.color=\'#FFFFFF\'; this.style.backgroundColor = \'#0A246A\';" '+
      'onmouseout ="this.style.color=\'#000000\'; this.style.backgroundColor = \'#FFFFFF\';" '+
      '>'+rooms[i]+'</a>';
    ChatClientRooms[ChatClientRooms.length] = rooms[i];
  }
}

// ----- Close Room -----

function ChatClientCloseRoom(room)
{
  for (var i = 0; i < ChatClientRooms.length; i++)
    if (room == ChatClientRooms[i])
    {
      ChatClientRooms[i] = undefined;
      element = document.getElementById('ChatClientRoom_'+i);
      element.parentNode.removeChild(element);
    }
}

// ----- Enter -----

function ChatClientEnter(users)
{
  for (var i = 0; i < users.length; i++)
  {
    var exists = false;
    for (var j = 0; j < ChatClientUsers.length; j++)
      if (ChatClientUsers[j] == users[i]) exists = true;
    if (exists) continue;

    document.getElementById('ChatClientUsers').innerHTML +=
      '<a id="ChatClientUser_'+ChatClientUsers.length+'">'+users[i]+'</a>';
    ChatClientUsers[ChatClientUsers.length] = users[i];
  }
}

// ----- Exit -----

function ChatClientExit(user)
{
  for (var i = 0; i < ChatClientUsers.length; i++)
    if (user == ChatClientUsers[i])
    {
      ChatClientUsers[i] = undefined;
      element = document.getElementById('ChatClientUser_'+i);
      element.parentNode.removeChild(element);
    }
}

// ----- Tell -----

function ChatClientTell(type, color, user, msg)
{
  if (user != ChatClientUsername)
    ChatClientToScreen('<font color="#'+color+'">'+'<b>'+user+':</b> '+msg+'</font>', false);
}


